<?php

//============================================================================//
//==    Plugin pour GLPI - Dévelloppeur: ORAPI Darya SALAUYOVA - ©2022     ==//
//==            http://orapi.com             ==//
//============================================================================//


/**
 * Gestion des droits du plugin ticketcounter
 * Reçoit les informations depuis un formulaire de configuration des droits (profile)
 * Renvoie sur la page de l'item traité
 */

// récupération des chemins absolus
define('GLPI_ROOT', getAbsolutePath());
include (GLPI_ROOT."inc/includes.php"); 
include "../inc/profile.class.php";

if (isset($_POST["Modifier"]))
    {
    // Modification des droits dans la base
    $arrayItem[0] = $_POST["id"];
    if($_POST["droit"] == "Lecture")
        {$arrayItem[1] = "r";}
    elseif ($_POST["droit"] == "Modification") 
        {$arrayItem[1] = "w";}
    else {$arrayItem[1] = "0";}

    $profile = new PluginTicketcounterProfile();
    
    $profile->majDroit($arrayItem);
    // Retour à la page d'appel (fonction native GLPI)
    Html::back();
    }
    

    
    
/**
 * Récupère le chemin absolu de l'instance GLPI
 * @return String : le chemin absolu (racine principale)
 */
function getAbsolutePath()
    {
        return str_replace("plugins/ticketcounter/front/profile.form.php", "", $_SERVER['SCRIPT_FILENAME']);
    }
?>