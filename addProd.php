<?php

 


require_once('produktiCRUD.php');

 


$produktiCRUD = new produktiCRUD();

 


if (!isset($_SESSION)) {

  session_start();

}

 


if (isset($_POST['shtoProd'])) {


  $produktiCRUD->setDescription($_POST['desc']);

  $produktiCRUD->setPrice($_POST['cmimiPd']);


  $produktiCRUD->setImage($_POST['pdPhoto']);

 


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

 