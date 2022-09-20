<?php
/**
 * CREATING A NEW TABLES IN DATABASE
 * @return boolean
 */
function plugin_ticketcounter_install() 
    {
    global $DB; //instancier la variable globale qui permet l'appel à la DB interne


    //Creating FIRST table PROFILES
    // Création de la table uniquement lors de la première installation
    if (!TableExists("glpi_plugin_ticketcounter_profiles"))
    //verification of tables existance: if tables doesnt existe(condition is not true)
        {
        // requête de création de la table    
        $query = "CREATE TABLE `glpi_plugin_ticketcounter_profiles` (
            `id` int(11) NOT NULL default '0' COMMENT 'RELATION to glpi_profiles (id)',
            `right` char(1) collate utf8_unicode_ci default NULL,
            PRIMARY KEY  (`id`)
            )ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci";

        $DB->query($query) or die($DB->error());

        //création du premier accès nécessaire lors de l'installation du plugin
        $id = $_SESSION['glpiactiveprofile']['id'];
        $query = "INSERT INTO glpi_plugin_ticketcounter_profiles VALUES ('$id','w')";

        $DB->query($query) or die($DB->error());
        }
    

    // Creating SECOND table CONFIG
    // Création de la table uniquement lors de la première installation
    if (!TableExists("glpi_plugin_ticketcounter_config")) 
    {
        $query = "CREATE TABLE `glpi_plugin_ticketcounter_config` (
            `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
            `statut` char(32) NOT NULL default '',
            `vie` char(1) NOT NULL default '1'
            )ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci";
            $DB->query($query) or die($DB->error());
        }  

    // Creating THIRD table STATUT
    // Création de la table uniquement lors de la première installation
    if (!TableExists("glpi_plugin_ticketcounter_statut")) 
        {
        // Création de la table config
        $query = "CREATE TABLE `glpi_plugin_ticketcounter_statut` (
            `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
            `id_machine` int(11) NOT NULL,
            `id_config` int(11) NOT NULL,
            `vie` char(1) NOT NULL default '1'
            )ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci";
            $DB->query($query) or die($DB->error());
        }

    return true;
    }


    /**
 * FUNCTION DESINSTALL OF TABLES while desinstall of plugin
 * @return boolean
 */
function plugin_ticketcounter_uninstall() 
{
global $DB;

$tables = array("glpi_plugin_ticketcounter_profiles", "glpi_plugin_ticketcounter_config", "glpi_plugin_ticketcounter_statut");

foreach($tables as $table) 
    {$DB->query("DROP TABLE IF EXISTS `$table`;");}

return true;
}

?>