<?php
/**
 * Database Connect Info
 */
$user = "";
$pass = "";
$host = "";
$db = "";

mysql_connect($host,$user,$pass);
@mysql_select_db($db) or die("Unable To Select Database");
?>