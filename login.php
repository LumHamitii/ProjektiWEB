<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />  <!-- CDN per logo te shoping  -->
  <link rel ="stylesheet" href="log.css"></link>
  <title>Login-register</title>
</head>
<body>
  <div class="container">
    <div class="form">
      <h1>Sign Up</h1>
      <form action="">
        <div class="form-input">
      <i class='fa-solid fa-user'></i>
      <input type="text" placeholder="Name">
      <span class="bar"></span>
        </div>
        <div class="form-input">
      <i class='fa-solid fa-envelope'></i>
            <input type="email" placeholder="Email">
      <span class="bar"></span>
        </div>
        <div class="form-input">
      <i class='fa-solid fa-phone'></i>
            <input type="tel" placeholder="Number">
      <span class="bar"></span>
        </div>
        <div class="form-input">
      <i class='fa-solid fa-lock'></i>
            <input type="password" placeholder="Password">
      <span class="bar"></span>
        </div>
        <button type="submit" class="submit-btn">Sign up</button>
        <span class="switch-login">Already Have an account. <a href="#login">Login</a></span>
      </form>
    </div>
  </div>
</body>
</html>