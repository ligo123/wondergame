<html>
<head>
<title>Wonder - Registration</title>
</head>
<body>
<h4>Registrations are now closed.  This is to keep out the riff-raff.  If you have a registration code then you may sign up.</h4>
<br />
<?php
$con = mysql_connect("mysql4.freehostia.com","ethmic_ethmic","Epsilonn");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
echo "It connected.";

mysql_select_db("ethmic_ethmic", $con);
$password=md5($_POST[password]);
$code = ($_POST['code']);
echo "<br />";echo $code;echo "<br />";


$query="SELECT * FROM wonder_codes WHERE code = '". $code ."'";
$result = mysql_query($query) or die ( mysql_error() );
if(mysql_num_rows($result) == 1)
{

//echo $query;
mysql_query("DELETE FROM wonder_codes WHERE code = '". $code ."'");
$sql="INSERT INTO wonder_users(username, password, email, registrationcode, resource1, resource2, resource3, resource4) VALUES ('$_POST[username]','$password','$_POST[email]','$code','100','200','350','500')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "<br />";
echo "<h1>Registration Successful</h1>";
}
else
{
   echo "Error:  Bad registration code.";
}  
mysql_close($con);

?>

</body>
</html>