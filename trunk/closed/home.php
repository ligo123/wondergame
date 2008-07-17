<?php session_start(); ?>
<?php
if(!$_SESSION['logged_in'])
{
header("Location: http://wondergame.freehostia.com");
}
?>

<html>
<head>
<title>Wonder:  The Game of Economic Domination</title>
 <link rel="stylesheet" type="text/css" href="http://wondergame.freehostia.com/common.css" />
</head>
<body>
<p>welcome <?php
echo $_SESSION['user'];
echo "Does this PHP work?  Do you see your username?";
?>

</p>
<p>How are you?</p>
<a href="http://wondergame.freehostia.com/game/resourceupdate.php">Test Game Mechanics!</a>

</body>
</html>