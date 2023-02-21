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
	$produktiCRUD->setImage($_FILES['pdPhoto']);
  
 //kto e thirrim funksionin qe e kena psh rastin ton e ki addProd per me shtu produkte
  $produktiCRUD->addProd();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Vendosja e Produkteve | Tech Store</title>
  <link rel="shortcut icon" href="../../img/web/favicon.ico" />
  <link rel="stylesheet" href="../../css/header.css" />
  <link rel="stylesheet" href="../../css/forms.css" />
  <link rel="stylesheet" href="../../css/mesazhetStyle.css" />
</head>

<body>
  <div class="forms">
    <form name="shtoProduktin" action='' method="POST"
      enctype="multipart/form-data">
      <h1 class="form-title">Vendosja e Produkteve</h1>
      <input class="form-input" name="desc" type="text" placeholder="pershkrimi" required>
      <input class="form-input" name="pdPhoto" accept="image/*" type="file" value="Foto Produktit" required>
      <input class="finput" name="cmimiPd" type="text" placeholder="Qmimi i Produktit" required>
      <input class="button" type="submit" value="Shtoni Produktin" name='shtoProd'>
    </form>
  </div>
</body>

</html>