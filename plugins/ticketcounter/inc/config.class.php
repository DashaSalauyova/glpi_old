<?php
//============================================================================//
//==    Plugin pour GLPI - Dévelloppeur: ORAPI (Darya SALAUYOVA - ©2022     ==//
//==            http://orapi.com             ==//
//============================================================================//

/**
 * Class pour la gestion de la configuration du plugin
 */
class PluginTicketcounterConfig extends CommonDBTM
    {
    /**
     * GET CONFIG
     * Récupère les informations de configuration enregistrées
     * Retourne un tableau avec ID + valeur
     * @global type $DB
     * @return string
     */

    function getConfiguration()
    //fait une requete à la BD, filtre les resultats et renvoie un tableau de valeurs
    {
    global $DB;
    
    $query = "SELECT * FROM glpi_plugin_ticketcount_config WHERE vie='1'";
    if ($result = $DB->query($query))
        {
        if ($DB->numrows($result) > 0)
            {
            $i = 0;
            while ($row = $DB->fetch_assoc($result)) 
                {
                if (!empty($row['id'])){$config['id'] = $row['id'];}
                else{$config['id'] = "";}
                if (!empty($row['statut'])){$config['statut'] = $row['statut'];}
                else{$config['statut'] = "";}
                $retour[$i] = $config;
                $i++;
                }
            }  
        }
    return $retour;
    }

    /**
     * SET CONFIG
     * Enregistre ou modifie une information de configuration
     * @global type $DB
     * @param type $id
     * @param type $valeur
     */

    function setConfiguration($id=null,$valeur)
        {
        global $DB;
        
        if($id != null)
            {
            if($valeur != "delStatut")
                {$query = "UPDATE glpi_plugin_ticketcounter_config SET statut='$valeur' WHERE id='$id'";}
            else //suppression du statut (on passe la vie à 0)
                {$query = "UPDATE glpi_plugin_ticketcounter_config SET vie='0' WHERE id='$id'";}
            $DB->query($query) or die($DB->error());
            }
        else
            {
            $query = "INSERT INTO glpi_plugin_ticketcounter_config (statut,vie) VALUES ('$valeur','1')";
            $DB->query($query) or die($DB->error());
            }
        }

    }
?>