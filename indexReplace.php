<?php
require "header.php";
/** 
 * Login System for Online user access
 * 
 * @author Trevor Bramwell
 */

/**
 * Start Login.
 */
if(!IsLoggedIn())
{
?>
<table border="0">
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
        <tr>
            <td>Username: </td>
            <td><input type="text" size="32" name="user"></td>
        </tr>
        <tr>
            <td>Password: </td>
            <td><input type="password" size="12" name="pass"></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td><input type="submit" name="submit" value="Login"></td>
        </tr>
    </form>
</table>
<br />
<a href="reg.php">Register Here</a>
<?php
}
if(isset($_POST['submit']))
{
    // Set veriables.
    $user = $_POST['user'];
	$pass = $_POST['pass'];
	
    // Call verification function.
    loginScriptVerify($user, $pass);
}
/**
 * End Login.
 */

require_once "footer.php";
?>