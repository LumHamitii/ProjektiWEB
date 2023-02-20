<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Dashboard</title>

<style>
 .band {
    background-color: darkblue;
    text-align: left;
    width: 300px;
    height:800px;
  }
  .options {
    list-style-type: none;
  }
  .options a {
    display: block;
    padding: 5px;
    color:red;
    font-size:2rem;
    text-decoration:none;
  }
   h1{
      font-size:5rem;
      background-color: lightblue;

   }
</style>

</head>
<body>
<h1><b> Dashboard</b></h1>   
<h3>welcome <span><?php echo $_SESSION['admin_name'] ?></span></h3>

<!-- <div class="container">

   <div class="content">
      <h3>hi, <span>admin</span></h3>
      <p>this is an admin page</p>
      <a href="login.php" class="btn">login</a>
      <a href="register.php" class="btn">register</a>
      <a href="logout.php" class="btn">logout</a>
   </div>

</div> -->

<div class="band">
   <div class="options">
   <ul>
     <a href="shtoProdukt.php">Add product</a>
     <a href="feedback.php">Feedback</a>
     <a href="logout.php" >logout</a>

   </ul>
   </div>
   
</div>

</body>
</html>