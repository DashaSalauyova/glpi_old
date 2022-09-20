<?php
//============================================================================//
//==    Plugin pour GLPI - Dévelloppeur: ORAPI Darya SALAUYOVA - ©2022     ==//
//==            http://orapi.com             ==//
//============================================================================//


/**
 * Gestion du formulaire de configuration plugin
 * Reçoit les informations depuis un formulaire de configuration
 * Renvoie sur la page de l'item traité
 */

// Définition de la variable GLPI_ROOT obligatoire pour l'instanciation des class
define('GLPI_ROOT', getAbsolutePath());
// Récupération du fichier includes de GLPI, permet l'accès au cœur
include (GLPI_ROOT."inc/includes.php");

// Définition du chemin d'accès à Smarty
$cheminSmarty = getAbsolutePath()."plugins/monplugin/Smarty";

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

//Instanciation de la class config
$config = new PluginTicketcounterConfig();

//Envoie des variables à Smarty
$smarty->assign('configuration', $config->getConfiguration());
$smarty->assign('httpPath', getHttpPath());
$smarty->assign('absolutePath',  getAbsolutePath());

//Affichage de l'entête GLPI (fonction native GLPI)
HTML::header('Configuration Plugin Ticketcounter');
//Affichage du plugin
$smarty->display('config.tpl');
//Affichage du pied de page GLPI (fonction native GLPI)
HTML::footer();  

//========================================================================//
/**
 * Récupère le chemin absolu de l'instance GLPI
 * @return String : le chemin absolu (racine principale)
 */
function getAbsolutePath()
    {return str_replace("plugins/ticketcounter/front/config.form.php", "", $_SERVER['SCRIPT_FILENAME']);}

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
//Ici aucune valeur de formulaire (POST) n'est attendue,
//nous utiliserons Ajax pour gérer nos formulaires. 
//Ce fichier permet d'afficher le formulaire de configuration appelé via le fichier setup.php (il sera appelé lorsque vous irez dans Configuration-->Plugins et que vous cliquerez sur le plugin).

?>