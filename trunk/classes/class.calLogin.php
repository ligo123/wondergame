<?php
/**
 * Universal Login
 * 
 * IDEAS:
 *  DB Schema to appompany?
 *  banUser will add to ban table?
 *  permBanUser will ad to perm ban table?
 *  What is my dbScheme?!
 */
class calLogin
{    
    // TODO Declarations
    private $dbUrl;
    private $dbTable;
    public  $dbCon;
    
    //TODO Constructor
    public function __contruct($new_dbUrl,$new_dbTable)
    {
        $this->dbUrl = $new_dbUrl;
        $this->dbTable = $new_dbTable;
        
        require_once "MDB2.php";
        $this->dbCon =& MDB2::factory($this->dbUrl);
        //$this->dbTableSelect = ;
        if(PEAR::isError($this->dbCon))
        {
            die("Error connecting to the database: ".$dbCon->getMessage());
        }
        elseif(PEAR::isError($this->dbTableSelect))
        {
            die("Error selecting ".$this->dbTableSelect." table.");
        }
    }
    
    public function addUser()
    {
        
    }
    
    // Check to see if user is actually in the database, then let them view the page. Aka: No redirect.
    public function isGroup($groupID)
    {
        if(blah){
            
        } else {
            $this->Redirect;
        }
    }
    // Group acess to pages by checking page exceptions in group policy (DB).
    protected function script_name()
    {
        $exp = end(explode('/', $_SERVER['SCRIPT_NAME']));
        return $exp;
        //Get the value of the last array key for script_name (filename.php)
    }
    
    public function banUser()
    {
        
    }
    
    public function permBanUser()
    {
        
    }
    
    //TODO Deconstructor
    public function __decontruct()
    {
        
    }
}
?>