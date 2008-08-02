<?php
require_once "header.php";
/** 
 * Login System for Online user access
 * 
 * @author Trevor Bramwell
 */

/**
 * Start Login.
 */
if(isset($_POST['submit']))
{
    // Set veriables.
    $user = $_POST['user'];
	$pass = $_POST['pass'];
	
    // Call verification function.
    loginScriptVerify($user, $pass);
}
if(!IsLoggedIn())
{
    DispLoginBox();
    echo "<br /><a href=\"reg.php\">Register Here</a>";
} else {
    
    echo "Welcome!";
    
}
/**
 * End Login.
 */

require_once "footer.php";
?>