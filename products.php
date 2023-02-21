
<?php



require_once('produktiCRUD.php');



$produktiCRUD = new produktiCRUD();


$products = $produktiCRUD->shfaqTeGjithaProduktet();

?>

<!DOCTYPE html>

<html lang="en">

<head>

    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" /> <!-- CDN per logo te shoping  -->



    <title>Timberland</title>

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

            </nav>

        </div>

        <div class="icons">

            <div class="fas fa-search" id="search-btn"></div>

            <div class="fas fa-shopping-cart" id="cart-btn"></div>

            <a href="login.php">

                <div class="fas fa-user"></div>

            </a>

        </div>



        <form action="" class="search-form">

            <input type="search" id="search-box" placeholder="search here...">

            <label for="search-box" class="fas fa-search"></label>

    </header>




    <section class="products" id="products">

        <h1 class="heading"><span>Our products</span></h1>

        <br><br><br>

        <h1 style="font-size: 30px; text-align: center; background-color: black; height: 40px; color: white;">
            Our Products</h1>

        <?php

        ?>
        <div class="prodi">
            <?php
            foreach ($products as $products) {

                ?>

                    <div class="card">

                        <img src="<?php echo $products['image'] ?>" style="width:100%">

                        <h1></h1>

                        <p class="price">
                            <?php echo $products['price'] .'$' ?>
                        </p>

                        <p class="description">
                            <?php echo $products['description'] ?>
                        </p>

                        <p><button>Add to Cart</button></p>

                    </div>

                <?php

            }
            ?>
        </div>


    </section>




    <footer>

        <div class="col">

            <!--<img class="logo" src="img/Logo/couturely1.png" alt="">-->

            <h4>Contact</h4>

            <p><strong>Address:</strong> Rr.Agim Ramadani", Nr.11, 10000 Prishtinë</p>

            <p><strong>Phone:</strong> +38344123123 / +38349123123</p>

            <p><strong>Hours:</strong> 10:00-20:00 Mon-Sat</p>

            <div class="follow">

                <h4>Follow Us</h4>

                <div class="icons">

                    <i class="fab fa-facebook-f"></i>

                    <i class="fab fa-instagram"></i>

                    <i class="fab fa-twitter"></i>

                    <i class="fab fa-tiktok"></i>

                </div>

            </div>

        </div>

        <div class="col">

            <h4>About</h4>

            <a href="aboutus.html">About Us</a>

            <a href="#">Delivery Information</a>

            <a href="#">Privacy Policy</a>

            <a href="#">Terms & Conditions</a>

            <a href="contact.html">Contact Us</a>

        </div>

        <div class="col">

            <h4>My Account</h4>

            <a href="signup.html">Sign In</a>

            <a href="cart.html">View Carts</a>

            <a href="cart.html">My Wishlist</a>

            <a href="#">Track My Order</a>

            <a href="contact.html">Help</a>

        </div>

    </footer>

</body>

</html>