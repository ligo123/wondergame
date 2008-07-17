<?php session_start(); ?>
<?php
$con = mysql_connect("mysql4.freehostia.com","ethmic_ethmic","Epsilonn");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("ethmic_ethmic", $con);

$result = mysql_query("SELECT resource1,resource2,resource3,resource4 FROM wonder_users
WHERE username='wayfarer'");

while($row = mysql_fetch_array($result))
  {
  echo $row['resource1'] . " " . $row['resource2'] . " " . $row['resource3'] . " " . $row['resource4'];
  echo "<br />";
  }
/*This Finds out what the seconds are for the time.*/
//echo(idate("s"));
$time = (idate("s"));
echo "<br />";
echo $time;
echo "<br />";
/*It then displays the seconds, for debugging purposes*/
if ($time == 30 OR 25 OR 20)
{
echo "The time is a multiple of 5!";
}
else
{
echo "The time it not a multiple of 5!";
}
echo "<br />";
mysql_close($con);
?>
<html>
<body>
<span id=tick2>

<script>
<!--
/*
By George Chiang (WA's JavaScript tutorial) 
http://wsabstract.com
*/

function show2(){
  if (!document.all)
    return

  var Digital=new Date()
  var hours=Digital.getHours()
  var minutes=Digital.getMinutes()
  var seconds=Digital.getSeconds()
  var dn="AM" 

  if (hours>12){
   dn="PM"
   hours=hours-12
  }

  if (hours==0)
   hours=12

  if (minutes<=9)
   minutes="0"+minutes

  if (seconds<=9)
   seconds="0"+seconds
   var ctime=hours+":"+minutes+":"+seconds+" "+dn
   tick2.innerHTML="<b style='font-size:22;color:blue;'>"+ctime+"</b>"
   setTimeout("show2()",1000)
}

window.onload=show2

//-->
</script>
</span>
</body>
</html>

