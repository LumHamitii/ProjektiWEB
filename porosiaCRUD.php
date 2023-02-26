<?php
require_once('connect.php');

if (!isset($_SESSION)) {
    session_start();
}

class porosiaFormCRUD extends dbCon
{
    private $id;
    private $name;
    private $surname;
    private $phone;
    private $city;
    private $address;
    private $dbConn;

    public function __construct($id = '', $name = '',$surname = '',$phone = '', $city = '', $address = '')
    {
        $this->id = $id;
        $this->name = $name;
        $this->surname = $surname;
        $this->phone = $phone;
        $this->city = $city;
        $this->address = $address;
      
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
    public function getSurname()
    {
        return $this->surname;
    }

    public function setSurname($surname)
    {
        $this->surname = $surname;
    }
    public function getPhone()
    {
        return $this->phone;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function setCity($city)
    {
        $this->city = $city;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }
   
    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function insertp()
    {
        try {
            $sql = "INSERT INTO `porosia`(`name`,'surname',`phone`, `city`, `address`) VALUES (?,?,?,?,?)";
            $stm = $this->dbConn->prepare($sql);
            $stm->execute([$this->name,$this->surname, $this->phone, $this->city, $this->address]);

            $_SESSION['porosiaMeSukses'] = true;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }


    public function shfaqporosite()
    {
        try {
            $sql = "SELECT * FROM porosia";
            $stm = $this->dbConn->prepare($sql);
            $stm->execute();

            return $stm->fetchAll();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    
}



?>