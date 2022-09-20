<?php class PluginTicketounter extends CommonDBTM
{
    public function z_count_incident()
    {
        global $DB;
        $nb_incident = $db->query("SELECT COUNT(*) FROM `glpi_tickets` WHERE `type` = 1 AND `status` <>6 and `status` <>5 AND `is_deleted` <>1");
        echo $nb_incident;
    }

    public function z_count_demande()
    {
        global $DB;
        $nb_demande = $db->query("SELECT COUNT(*) FROM `glpi_tickets` WHERE `type` = 2 AND `status` <>6 and `status` <>5 AND `is_deleted` <>1");
        echo $nb_demande;
    }

}
?>