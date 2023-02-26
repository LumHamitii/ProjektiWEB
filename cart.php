<?php

    session_start();
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="cart.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />  <!-- CDN per logo te shoping  -->

    <title>Timberland-KS</title>
</head>
<body>
    <header class="header">

        <a href="#"> <img src="images/timberland.png" width="150" height="90"></a>   
        <div class="navv">
        <nav class="navbar">
        <a href="index.php">HOME</a>
         <a href="products.php">PRODUCTS</a>
         <a href="aboutus.php"> ABOUT US</a>
         <a href="findus.php">FIND US</a>
         <a href="contact.php">CONTACT</a>
        </div>
        <div class="icons">
            <div class="fas fa-search" id="search-btn"></div>
            <a href="cart.php">
            <div class="fas fa-shopping-cart" id="cart-btn"></div>
             </a>
            <a href="login.php">
                <div class="fas fa-user"></div>
            </a>
        </div>
    
        <form action="" class="search-form" >
            <input type="search" id="search-box" placeholder="search here...">
            <label for="search-box" class="fas fa-search"></label>
        
    </header>


    <div class="ct">
        <table class="tcart">
            <tr>
                <th>ID Produktit</th>
                <th>description</th>
                <th>Qmimi</th>
                
            </tr>
            <?php
           if (isset($_SESSION["cart"])) {
            $total=0;
                foreach ($_SESSION["cart"] as $keys => $products) {
                    ?>
                    <form action="addcart.php" method="post">
                       
                        <tr>
                        <td>
                                <?php echo $products["Id"]; ?>
                            </td>
                            <td>
                                <?php echo $products["description"]; ?>
                            </td>
                           
                            <td>
                                <?php echo $products["price"]; ?> €
                            </td>
                            <td><button name="Remove" class="btn btn btn-outline-danger">REMOVE</button></td>
                            <input type="hidden" name="id" value= <?php echo $products['Id'] ?>>
                           
                        </tr>
                        
                    </form>
                    <?php
                    $total = $total + (float)$products["price"];
                }
                ?>
                </table>
                <table>
                <tr>
                    <td colspan="4" >
                        <h2>Totali i Pergjithshem:</h2>
                    </td>
                    <td>
                        <h2>
                            <?php echo number_format($total); ?> €
                        </h2>
                    </td>
                    <td></td>
                </tr>
                <?php
            }else{ echo "error";}
                ?>

</table>
            </div>
            
            </body>
            </html>