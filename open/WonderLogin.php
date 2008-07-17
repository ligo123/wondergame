<?php session_start(); ?>
<?php
ob_start();
$user = ($_POST['username']);
$pass = md5($_POST['password']);
$con = mysql_connect("mysql4.freehostia.com","ethmic_ethmic","Epsilonn");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
echo "It Connected";
echo "<br />";
mysql_select_db("ethmic_ethmic", $con);
$query = "SELECT username, password FROM wonder_users WHERE Username='". $user ."' AND Password='". $pass ."'";
$result = mysql_query($query) or die ( mysql_error() );
if(mysql_num_rows($result) == 1)
{
   header('Refresh: 5; url=http://wondergame.freehostia.com/closed/home.php'); 
   setcookie("wonder_define_login", "login_true", time()+360000000);
   $_SESSION['user'] = $user;
   $_SESSION['logged_in'] = TRUE;
   

   echo $_SESSION['user'];

   echo "<h1>Log in successful.</h1>"; echo "<br />";
   echo "You have been logged in successfully.  You should be redirected shortly. If not, please click the link below."; echo "<br />";
   echo "Please go here:  http://wondergame.freehostia.com/closed/home.php";
   
  exit;
}
else
{
   echo "did not log in.";
}  
ob_flush();
?>
