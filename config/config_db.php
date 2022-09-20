<?php
class DB extends DBmysql {
   public $dbhost = 'localhost';
   public $dbuser = 'glpi_user';
   public $dbpassword = 'pointer22';
   public $dbdefault = 'glpi';
   public $allow_datetime = false;
   public $use_utf8mb4 = true;
   public $allow_myisam = false;
   public $allow_signed_keys = false;
}
