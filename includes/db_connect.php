<?php
include_once("{$path}/configs/config_db.php");
include("db/mysql.class.php");
$db      = new mysql();
$world_db = $db_world;

if (! $db->Open($db_name, $db_url, $db_user, $db_pass))
  $db->Kill();
?>