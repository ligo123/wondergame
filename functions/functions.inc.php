<?php
/**
 *Common Functions
 *Contains functions used all throught the forum
 **/

/**
 * Get the value of the last array key for script_name Ex.: filename.php
 *
 * @return script name
 */
function ScriptName()
{
    $exp = end(explode('/', $_SERVER['SCRIPT_NAME']));
    return $exp;
}

/**
 * Check to see if the user account exists
 * and put forth certain criteria if user does.
 * Otherwise send false statement.
 *
 * @param string $user
 * @param string $pass
 * @return void
 */
function LoginExists($user, $pass)
{
    $passE = sha1(md5($pass)); 
    
    $r_login = db("login",$user,$passE);
    $r_login_check = mysql_num_rows($r_login);
    
    if($r_login_check > 0)
    {
    	$row = mysql_fetch_array($r_login, MYSQL_ASSOC);
    	
    	$_SESSION['pass'] = $row['pass'];
		$_SESSION['user'] = $row['user'];
	    $_SESSION['admin'] = $row['admin'];
	    session_id($row['sid']);
    	
    	return true;
    }
    else
    {
        return false;
    }
}

/**
 * Redirection Function to send user back to index
 * after unsetting any session they may have.
 * 
 * @author Trevor Bramwell
 * @name Redirect
 */
function Redirect($site = 'index.php')
{
	session_unset();
	session_destroy();
	
	$locSite = "Location:".$site;
	header($locSite);
}

/**
 * Login Check function
 * @author: Trevor Bramwell
 * @name Login Check
 *
 */
function IsLoggedIn($user = "")
{
    switch($user)
    {
        case "user":
            $page_exceptions = array('index.php', 'reg.php', 'emailvalidate.php');
            if(!in_array(ScriptName(), $page_exceptions))
            {
                if( (!isset($_SESSION['pass'])) || ($_SESSION['SID'] != session_id()) )
                {
                    return false;
                }
                else
                {
                    return true;
                }
                
            }
            break;
            
        case "admin":
            if( isset($_SESSION['admin']) || $_SESSION['admin'] == 1 )
        	{
        		return true;
        	}
        	else
        	{
        	    return false;
        	}
            break;
            
        case "moderator":
            break;
    }
}

/**
 * Admin Check Function
 * 
 * @author Trevor Bramwell
 * @name Admin Check
 */
function AdminVerify()
{
	
}
?>
