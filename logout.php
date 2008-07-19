<?php
ob_start();
require_once "header.php";

if(isset($_SESSION['pass']))
{
    session_unset();
    session_destroy();
    header("Location:index.php");
    exit;
}
else
{
    header("Location:index.php");
    exit;
}

ob_flush();
require_once "footer.php";
?>