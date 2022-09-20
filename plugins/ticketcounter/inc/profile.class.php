<?php
//============================================================================//
//==    Plugin pour GLPI - Dévelloppeur: ORAPI (Darya SALAUYOVA - ©2022     ==//
//==            http://orapi.com             ==//
//============================================================================//

/**
 * Class pour la gestion de profil du plugin
 */
class PluginTicketcounterProfile extends CommonDBTM
    {
    /**
     * Récupère le nom de l'onglet si l'utilisateur est autorisé
     * @param CommonGLPI $item
     * @param type $withtemplate
     * @return boolean|string
     * @global type $DB
     * @return string
     */

    function getTabNameForItem(CommonGLPI $item, $withtemplate=0)
    //Permet au systeme de recuperer le nom à afficher dans l'onglet 
    {
    if (!Session::haveRight("profile","r")) 
        {return false;}
    elseif (Session::haveRight("profile", "w"))
    //Ici on vérifie qu'il s'agit bien de la partie Profil de GLPI qui est concernée
        {
        if ($item->getType() == 'Profile') 
        //Ici on a vérifié que l'utilisateur actuel a le droit d'accéder à cet onglet. 
            {
            return "Ticketcounter";
            }
        }
   return '';
   }

/**
 * Gère ce qui doit être affiché en accédant à l'onglet
 * @param CommonGLPI $item
 * @param type $tabnum
 * @param type $withtemplate
 * @return boolean
 */
static function displayTabContentForItem(CommonGLPI $item, $tabnum=1, $withtemplate=0) 
    {
    
    if ($item->getType() == 'Profile')
    //Ici on vérifie qu'il s'agit bien d'un Profil de GLPI concerné
        {
        $prof = new self();
        $ID = $item->getField('id');
        //On récupère l'id du profil actuel
        $prof->showForm($ID);
        // on affiche le formulaire
        }
    return true;
}


/**
 * Fonction qui affiche le formulaire du plugin
 * @param type $id
 * @param type $options
 * @return boolean
 */

function showForm($id, $options=array()) 
    {
    global $DB;
    //On récupère le chemin qui servira au formulaire
    $target = $this->getFormURL();
    if (isset($options['target'])) 
        {$target = $options['target'];}
    //On vérifie que l'utilisateur actuel a bien le droit d'accéder à la gestion des profils
    if (!Session::haveRight("profile","w")) 
        {return false;}

    //On définit le chemin d'accès à la bibliothèque Smarty   
    $cheminSmarty = $this->getAbsolutePath()."plugins/ticketcounter/Smarty";
    
    // définition de l'emplacement de la bibliothèque
    define('SMARTY_DIR', $cheminSmarty."/libs/");
    
    // instanciation de la class Smarty
    require_once(SMARTY_DIR . 'Smarty.class.php');
    $smarty = new Smarty();
    
    // définition des dossiers Smarty
    $smarty->template_dir = $cheminSmarty."/templates/";
    $smarty->compile_dir = $cheminSmarty."/templates_c/";
    $smarty->config_dir = $cheminSmarty."/configs/";
    $smarty->cache_dir = $cheminSmarty."/cache/";

    // vérification des droits pour le groupe actuel sur le plugin
    $query = "SELECT * FROM glpi_plugin_ticketcounter_profiles WHERE id = '$id'";
    if ($result = $DB->query($query))
       {
       // Si le groupe est enregistré dans la base, on récupère le droit
       if ($DB->numrows($result) > 0)
           {
           $row = $DB->fetch_assoc($result);
           if (!empty($row['right'])){$droit = $row['right'];}   
           $smarty->assign('droit',$droit);   
           }
       // Sinon, on insère le groupe dans la base avec un droit à null
       else
           {
           $query = "INSERT INTO `glpi_plugin_ticketcounter_profiles`(`id`, `right`) VALUES ('$id','0')";
           $DB->query($query) or die($DB->error());
           $smarty->assign('droit','0');  
           }
       }
   $smarty->assign('endform', HTML::closeForm(false));
   $smarty->assign('id',$id);
   $smarty->assign('target',$target);
   $smarty->display('profile.tpl');
   }
   
/**
* Fonction qui modifie les droits dans la base
* @param type $arrayItem (id, right)
*/
function majDroit($arrayItem) 
    {
    global $DB;
    //Mise à jour des droits
    $query = "SELECT * FROM glpi_plugin_ticketcounter_profiles WHERE id='$arrayItem[0]'";
    if ($result = $DB->query($query))
        {
        if ($DB->numrows($result) > 0)
          {
            $query = "UPDATE `glpi_plugin_ticketcounter_profiles` SET `right`='$arrayItem[1]' WHERE `id`=$arrayItem[0]";
            $DB->query($query);
            }
        }
    }
    
/**
* Vérifie si l'utilisateur courant est autorisé à utiliser le plugin
* @global type $DB
* @return boolean
*/
function estAutorise() 
    {
    global $DB;
    if (isset($_SESSION["glpiactiveprofile"]["ticketcounter"])) 
        {
        if($_SESSION["glpiactiveprofile"]["ticketcounter"] == "w" || $_SESSION["glpiactiveprofile"]["ticketcounter"] == "r")
            {return true;}
        }
    else
        {
        $ID = $_SESSION["glpiactiveprofile"]["id"];
        $query = "SELECT * FROM glpi_plugin_ticketcounter_profiles WHERE id='$ID'";
        if ($result = $DB->query($query))
            {
            $row = $DB->fetch_assoc($result);
            if (!empty($row['right']))
                {
                $_SESSION["glpiactiveprofile"]["ticketcounter"] = $row['right'];
                if($_SESSION["glpiactiveprofile"]["ticketcounter"] == "w" || $_SESSION["glpiactiveprofile"]["ticketcounter"] == "r")
                    {return true;}
                }
                
            else{$_SESSION["glpiactiveprofile"]["ticketcounter"] = "NULL";}
            }
        }
    return false;
}
    /**
     * Récupère le chemin absolu de l'instance GLPI
     * @return String : le chemin absolu (racine principale)
     */
    function getAbsolutePath()
        {return str_replace("ajax/common.tabs.php", "", $_SERVER['SCRIPT_FILENAME']);}
    
    /**
     * Récupère le chemin http absolu de l'application GLPI
     * @return string : le chemin http absolu de l'application
     */
    function getHttpPath()
        {
        $temp = explode("/",$_SERVER['HTTP_REFERER']);
        $Ref = "";
        foreach ($temp as $value)
            {
            if($value != "front"){$Ref.= $value."/";}
            else{break;}
            }
        return $Ref;
        }        
    }
?>