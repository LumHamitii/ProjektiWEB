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
        <!-- </form>
            <form name="LoginForm" class="login-form"  method="POST">
            <h3>login now</h3>
            <input type="txt" placeholder="Username" class="box">
            <input type="password" placeholder="Password" class="box">
            <p>forgot your password? <a href="#">click here</a></p>
            <p>don't have an account? <a href="login.php">create now </a></p>
            <input type="submit" value="login now" class="btn">
        </form> -->
    </header>
    <section class="home" id="home" style="background-color:#5A5A5A;">
        <div class="container">
            <div class="image">
                <img src="images/wallpaper.jpg" alt="">
            </div>
            <div class="image">
                <img src="images/timbs.jpg" alt="">
            </div>
            <div class="image">
                <img src="images/beeline.jpg" alt="">
            </div>
            <div class="image">
                <img src="images/collection.jpg" alt="">
            </div>
    
            <div class="button">
                <a onclick="nextimg(-1)" class="prev">&#10094;</a>
                <a onclick="nextimg(1)" class="next">&#10095;</a>
            </div>
          
    
            <div class="dots">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
                <span class="dot" onclick="currentSlide(4)"></span>>
            </div>
          </section>
          <section></section>
           <div class="offers" id="offers">
            <div class="o1" >
                <br><br><br><br><img src="images/torange.jpg" alt="" style="height: 500px; " >
            </div>
            <div class="o1" >
                <br><br><br><br><img src="images/SALE.jpg" alt="" style="height: 500px; " >
               <span class="butoni"><button class="button-style">Apply here</button></span> 
            </div>
            
            <div class="o1">
                <br><br><br><br> <img src="images/ora.jpg" alt="" style="height: 500px;">
            </div>
           
           </div>
        </div>
        </section>
       
    

  
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<footer>
  <div class="col">

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