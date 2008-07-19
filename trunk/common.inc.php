<?php
/**
 * Database Connect Info
 */
$user = "tehriddler";
$pass = "l2nv8e5u";
$host = "localhost";
$db = "cal_bbs";

mysql_connect($host,$user,$pass);
@mysql_select_db($db) or die("Unable To Select Database");
?>