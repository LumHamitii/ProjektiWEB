<?php

 

//Kto duhesh me e bo require ose include fajllin ku e ki crudin

require_once('produktiCRUD.php');

 

//emri variables nuk ka randsi, a knej ku e krijon instancen duhet me kon e njejt si emri i klases qe e ke kriju te crudi

$produktiCRUD = new produktiCRUD();

 

//kjo vyn nqofse ki pun me sesuone

if (!isset($_SESSION)) {

  session_start();

}

 

//if e kontrollon shtoPros a osht bo POST, shtoProd osht emri i butonit posht ku shkrun name='shtoProd' qekjo osht pjesa ma e rendsishme te inputat se qaty i merr t dhanat

if (isset($_POST['shtoProd'])) {

  //kto i kemi morr t dhanat prej formes qe e kemi degu pra i kena bi setat per secilen qe duhet me

  $produktiCRUD->setDescription($_POST['desc']);

  $produktiCRUD->setPrice($_POST['cmimiPd']);

  //Pershkak qe e kemi foto duhet me e bo file se dergohet si file jo tekst mandej kto e merr veq emrin

  $produktiCRUD->setImage($_POST['pdPhoto']);

 

 //kto e thirrim funksionin qe e kena psh rastin ton e ki addProd per me shtu produkte

  $produktiCRUD->addProd();

}
  if (isset($_POST['fshiProd'])) {

    $produktiCRUD->deleteProd($_POST['id']);
    $id = $_POST['id'];
        $produktiCRUD->deleteProd($id);
}

?>

<!DOCTYPE html>

<html lang="en">

 

<head>

  <meta charset="UTF-8" />

  <meta http-equiv="X-UA-Compatible" content="IE=edge" />

  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Shtimi i produktev </title>

 

</head>

 

<body>

  <div class="forms">

    <form name="shtoProduktin" action='' method="POST"

      enctype="multipart/form-data">

      <h1 class="form-title">Shtimi i Produkteve</h1>

      <input class="form-input" name="desc" type="text" placeholder="pershkrimi" required>

      <input class="form-input" name="pdPhoto"  type="text"  placeholder="images/" required>

      <input class="finput" name="cmimiPd" type="text" placeholder="Qmimi i Produktit" required>

      <input class="button" type="submit" value="Shtoni Produktin" name='shtoProd'>

    </form>
  <form action="" method="post" name="fshijProd">
  <h1 class="form-title">Fshirja e  Produkteve</h1>
  <input class="form-input" name="id" type="text" placeholder="id" required>
  <input class="button" type="submit" value="Fshije produktin" name='fshiProd'>

  </form>
  </div>

</body>

 

</html>

 