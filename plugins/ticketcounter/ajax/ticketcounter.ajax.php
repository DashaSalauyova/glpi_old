<?php
//============================================================================//
//==    Plugin pour GLPI - Dévelloppeur: ORAPI Darya SALAUYOVA - ©2022     ==//
//==            http://orapi.com             ==//
//============================================================================//

/**
 * Traite toutes les demandes Ajax du plugin
 */
define('GLPI_ROOT', getAbsolutePath());
include (GLPI_ROOT."inc/includes.php");

//Instanciation de la class config
$config = new PluginTicketcounterTicketcounter();

$config->modifierMachine($_POST['statut'],$_POST['id']);
    
/**
 * Récupère le chemin absolu de l'instance GLPI
 * @return String : le chemin absolu (racine principale)
 */
function getAbsolutePath()
    {return str_replace("plugins/ticketcounter/ajax/ticketcounter.ajax.php", "", $_SERVER['SCRIPT_FILENAME']);}
    
?>