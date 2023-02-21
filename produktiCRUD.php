<?php

require_once('connect.php');

//dbCon ndrron mbas emrit klases ku osht klasa e databazes

class produktiCRUD extends dbCon

{

    //id, desc, price,img i ke pas n tabel qashto edhe qeshto i kam vendos

    private $id;
    private $description;
    private $price;
    private $image;
    private $dbConn;


    public function __construct($id= '', $description = '', $price = '', $image = '')

    {

      //$this->id osht pjesa e private, $id osht variabla n konstruktor kjo ndrron qysh dush.
        $this->id = $id;
        $this->description = $description;
        $this->price = $price;
        $this->image = $image;

        //connDB() osht emri i funksionit mrena klases dbCon
        $this->dbConn = $this->connDB();
    }

//getat edhe setat per secilen veq per databazen ska nevoj
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

            //kto shkruhet query i insertimit ose qfare do

            $sql = "INSERT INTO `products`(`image`, `description`, `price`) VALUES (?,?,?)";

            $stm = $this->dbConn->prepare($sql);

            //qysh i kish t radhitura qaty n sql duhesh edhe kto posht te execute me i rradhit.

            $stm->execute([implode(",", [$this->image]), $this->description, $this->price]);
 

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

            //Qeshto bohet query per select krejt produktet ket rast

            $sql = "SELECT * FROM `products`";

            $stm = $this->dbConn>prepare($sql);

            //tash skemi nevoj me shkrujt kurgjo n execute se sna vyn asnji parameter n query.

            $stm->execute();

              //Qeki sherben me ti kthy t dhanat e tabelave

            return $stm->fetchAll();

        } catch (Exception $e) {

            return $e->getMessage();

        }

      }

     

      public function selectProdbyID()

    {

        try {

            //Qeshto bohet query me i kerku produktet mbas ids

            $sql = "SELECT * FROM `products` where id = ?";

            $stm = $this->dbConn>prepare($sql);

            //kto na vyn me e morr id-n pershkak se jemi tu kerku mbas id-s n where

            $stm->execute([$this->id]);

              //e bojm veq fetch ndrysh prej nalt se fetch e kthen veq ni rresht masi jem tu e kerku mbas ids veq 1 ka me kthy, e fetchAll i kthen krejt rreshtat

            return $stm->fetch();

        } catch (Exception $e) {

            return $e->getMessage();

        }

      }

    }

      ?>