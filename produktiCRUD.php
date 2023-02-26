<?php

require_once('connect.php');


class produktiCRUD extends dbCon

{


    private $id;
    private $description;
    private $price;
    private $image;
    private $dbConn;


    public function __construct($id= '', $description = '', $price = '', $image = '')

    {

        $this->id = $id;
        $this->description = $description;
        $this->price = $price;
        $this->image = $image;

        $this->dbConn = $this->connDB();
    }

    public function getID()

    {

        return $this->id;

    }

 

    public function setID($id)

    {

        $this->id = $id;

    }

 

    public function getDescription()

    {

        return $this->description;

    }

 

    public function setDescription($description)

    {

        $this->description = $description;

    }

 

    public function getPrice()

    {

        return $this->price;

    }

 

    public function setPrice($price)

    {

        $this->price = $price;

    }

   

    public function getImage()

    {

        return $this->image;

    }

 

    public function setImage($image)

    {

        $this->image = $image;

      }

 

     

 

    public function addProd()

    {

        try {


            $sql = "INSERT INTO `products`(`image`, `description`, `price`) VALUES (?,?,?)";

            $stm = $this->dbConn->prepare($sql);


            $stm->execute([implode(",", [$this->image]), $this->description, $this->price]);
 

        } catch (Exception $e) {

            return $e->getMessage();

        }

      }
      public function deleteProd($id)

    {

        try {


            $sql = "DELETE * FROM `products` WHERE `id`= ?";

            $stm = $this->dbConn->prepare($sql);


            $stm->execute([$id]);
 

        } catch (Exception $e) {

            return $e->getMessage();

        }

      }
      public function shfaqTeGjithaProduktet()

    {

        try {

            $sql = "SELECT * FROM `products` ORDER BY `id` DESC  ";

            $stm = $this->dbConn->prepare($sql);

            $stm->execute();

 

            return $stm->fetchAll();

        } catch (Exception $e) {

            return $e->getMessage();

        }

    }

     

      public function selectProd()

    {

        try {


            $sql = "SELECT * FROM `products`";

            $stm = $this->dbConn>prepare($sql);


            $stm->execute();


            return $stm->fetchAll();

        } catch (Exception $e) {

            return $e->getMessage();

        }

      }

     

      public function selectProdbyID()

    {

        try {


            $sql = "SELECT * FROM `products` where id = ?";

            $stm = $this->dbConn>prepare($sql);


            $stm->execute([$this->id]);


            return $stm->fetch();

        } catch (Exception $e) {

            return $e->getMessage();

        }

      }

    }

      ?>