<?php

/**
 * PLUGIN VERSION
 * Fonction de définition de la version du plugin
 * @return type
 */

function plugin_version_ticketcounter() {

    return array('name'           => "ticketcounter",
                 'version'        => '1.0.0',
                 'author'         => 'SALAUYOVA',
                 'license'        => 'https://monsupport.orapigroup',
                 'homepage'       => 'https://monsupport.orapigroup',
                 'minGlpiVersion' => '0.85');
    }

/**
 * PREREQUISITE
 * Fonction de vérification des prérequis
 * @return boolean
 */
function plugin_ticketcounter_check_prerequisites() 
    {
    if (GLPI_VERSION >= 0.84)
        return true;
    echo "A besoin de la version 0.84 au minimum";
    return false; 
    }

/**
 * VERIFICATION
 * Fonction de vérification de la configuration initiale
 * @param type $verbose
 * @return boolean
 */
function plugin_ticketcounter_check_config($verbose=false) 
    {
    if (true) 
        { // Your configuration check
        return true;
        }
    if ($verbose) 
        {
        echo 'Installed / not configured';
        }
    return false;
    }

/**
 * INITIALISATION
 * Fonction d'initialisation du plugin
 * @global array $PLUGIN_HOOKS
 */
function plugin_init_ticketcounter() 
    {
    global $PLUGIN_HOOKS;

    $PLUGIN_HOOKS['csrf_compliant']['ticketcounter'] = true;
    $PLUGIN_HOOKS['config_page']['ticketcounter'] = 'front/config.form.php';
    Plugin::registerClass('PluginTicketcounterTicketcounter', array('addtabon' => array('Computer')));
    Plugin::registerClass('PluginTicketcounterProfile', array('addtabon' => array('Profile')));
    Plugin::registerClass('PluginTicketcounterConfig');
    }
?>