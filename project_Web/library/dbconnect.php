<?php
class DB_connect
{
    protected $db;
    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost; dbname=projectwebbase', 'root', '9aluminum)');
    }
    public function getLoginList()
    {
        $login_list=[];
        $result=$this->db->query('SELECT login FROM accounts;')->fetchAll();
        
        for($i=0;$i<count($result);$i++)
        {
            array_push($login_list,$result[$i]['login']);
        }
        return $login_list;

    }


    public function checkLogin($login)
    {
        $login_list=$this->getLoginList();
        if(!in_array($login, $login_list))
            return False; 
        return True;
    }
    public function checkPassword($login, $password)
    {
        if(!$this->checkLogin($login))
            return False;
        $result=$this->db->query("SELECT password FROM accounts WHERE login='$login';")->fetch();
        if($password!=$result['password'])
            return False;
        return True;
    }
    public function addUser($login, $password)
    {
        if($this->checkLogin($login))
            return False;
        $this->db->exec("INSERT INTO accounts VALUES('$login', '$password');");
    }
    public function removeUser($login)
    {
        if(!$this->checkLogin($login))
            return False;
        $this->db->exec("DELETE FROM accounts WHERE login='$login'");
    }
}
$logdb = new DB_connect;
