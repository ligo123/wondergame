<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>Login System</title>
	</head>
	<body>

		<div id="header">
			Logo
		</div>
		
		<div id="navigation">
			<ul>
				<li>[<a href="index.php">Home</a>]</li>
				<li>[<a href="javascript:history.go(-1);">Back</a>]</li>
<?php
				if(isset($_SESSION['pass']))
			    { 
			        echo("<li>[<a href=\"profile.php?user=".$_SESSION['user']."\">Profile</a>]</li>");
				    echo("<li>[<a href=\"logout.php\">Logout</a>]</li>");
				}
				if(isset($_SESSION['admin']))
				{
					echo("<li>[<a href=\"admin.php\">Admin Control Panel</a>]</li>");
				}
?>
			</ul>
		</div>

