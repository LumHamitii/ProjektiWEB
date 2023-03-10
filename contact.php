<?php

 


require_once('contactFormCRUD.php');

 


$contactFormCRUD = new contactFormCRUD();

 


if (!isset($_SESSION)) {

  session_start();

}

 


if (isset($_POST['submit'])) {


  $contactFormCRUD->setName($_POST['cName']);

  $contactFormCRUD->setPhone($_POST['cPhone']);

  $contactFormCRUD->setEmail($_POST['cEmail']);

  $contactFormCRUD->setMsg($_POST['cMsg']);


 


  $contactFormCRUD->insertM();

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
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
        </nav>
        </div>
       
    </header>
    <br><br><br>
    <section class="conform" id="contact">

        <div class="container2">
            <form action="" method="post" name="contact" >
                <h1 class="heading1"><span>Contact us</span></h1>
              <i class="fas fa-paper-plane"></i>
    
              <div class="input-group">
                <label>Full Name</label>
                <input type="text" placeholder="Enter your name" id="contact-name" onkeyup="validateName()" name="cName" required>
                <span id="name-error"></span>
              </div>
    
              <div class="input-group">
                <label>Phone No.</label>
                <input type="tel" placeholder="123 456 789"id="contact-phone" onkeyup="validatePhone()" name="cPhone" required>
                <span id="phone-error"></span>
              </div>
    
              <div class="input-group">
                <label>Email Id</label>
                <input type="email" placeholder="Enter Email" id="contact-email" onkeyup="validateEmail()" name="cEmail"required>
                <span id="email-error"></span>
              </div>   
    
              <div class="input-group">
                <label>Your Message</label>
                <textarea rows="5" placeholder="Enter your message" id="contact-message" onkeyup="validateMessage()" name="cMsg"required></textarea>
                <span id="message-error"></span>
              </div>
    
              <button onclick="validateForm()" type="submit" name="submit">Submit</button>
           <span id="submit-error"></span>
          </form>
    
          </div>
    
    </section>
  <footer>
    <div class="col">
      
        <h4>Contact</h4>
        <p><strong>Address:</strong> Rr.Agim Ramadani", Nr.11, 10000 Prishtin??</p>
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
        <a href="#">Sign In</a>
        <a href="#">View Carts</a>
        <a href="#">My Wishlist</a>
        <a href="#">Track My Order</a>
        <a href="contact.html">Help</a>
    </div>
  </footer>
    <script src="script.js"></script>
</body>
</html>