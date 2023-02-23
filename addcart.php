<?php
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST['blej'])){
        if(isset($_SESSION['cart'])){
        $myproducts=array_column($_SESSION['cart'],'id');
        if(in_array($_POST['id'],$myproducts)){
            echo"<script>
            alert ('item alredy added');
            window.location.href='products.php';
            </script>";
        }else{
         $count=count($_SESSION['cart']);
         $_SESSION['cart'][$count]=array('Id'=>$_POST['id'],
         'description'=>$_POST['description'],
         'price'=>$_POST['price']);
         echo"<script>
         window.location.href='products.php';
         </script>";
        }
        }
        else{
            $_SESSION['cart'][0]=array('Id'=>$_POST['id'],
                                       'description'=>$_POST['description'],
                                       'price'=>$_POST['price']);
            echo"<script>
             window.location.href='products.php';
             </script>";
        }
    }
}




?>