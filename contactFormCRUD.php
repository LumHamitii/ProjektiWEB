<?php
require_once('connect.php');

if (!isset($_SESSION)) {
    session_start();
}

class contactFormCRUD extends dbCon
{
    private $id;
    private $name;
    private $phone;
    private $email;
    private $msg;
    private $dbConn;

    public function __construct($id = '', $name = '',$phone = '', $email = '', $msg = '')
    {
        $this->id = $id;
        $this->name = $name;
        $this->phone = $phone;
        $this->email = $email;
        $this->msg = $msg;
      
        $this->dbConn = $this-> connDB();
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
    public function getPhone()
    {
        return $this->phone;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getMsg()
    {
        return $this->msg;
    }

    public function setMsg($msg)
    {
        $this->msg = $msg;
    }
   
    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function insertM()
    {
        try {
            $sql = "INSERT INTO `contact`(`name`,`phone`, `email`, `msg`) VALUES (?,?,?,?)";
            $stm = $this->dbConn->prepare($sql);
            $stm->execute([$this->name, $this->phone, $this->email, $this->msg]);

            $_SESSION['mesazhiMeSukses'] = true;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }


    public function shfaqMesazhet()
    {
        try {
            $sql = "SELECT * FROM contact";
            $stm = $this->dbConn->prepare($sql);
            $stm->execute();

            return $stm->fetchAll();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    
}



?>