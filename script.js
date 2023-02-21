 searchForm = document.querySelector('.search-form');

 document.querySelector('#search-btn').onclick = () =>{
     searchForm.classList.toggle('active');
    //  shoppingCart.classList.remove('active');
     loginForm.classList.remove('active');
     navbar.classList.remove('active');
 }
 
 
//  let loginForm = document.querySelector('.login-form');
 
//  document.querySelector('#login-btn').onclick = () =>{
//      loginForm.classList.toggle('active');
//      searchForm.classList.remove('active');
//     //  shoppingCart.classList.remove('active');
//      navbar.classList.remove('active');
//  }
 

  //slider
 var imageno =1;
        displayimg(imageno);

        function nextimg(n){
            displayimg(imageno += n)
        }

        function currentSlide(n){
            displayimg(imageno = n)
        }

        function displayimg(n){
            var i;
            var image = document.getElementsByClassName("image");
            var dots = document.getElementsByClassName("dot");

            if(n > image.length){
                imageno = 1;
            }

            if(n < 1){
                imageno = image.length;
            }

            for(i=0; i < image.length; i++){
                image[i].style.display = "none";
            }

            for(i=0; i < dots.length; i++){
                dots[i].className = dots[i].className.replace(" active", "");
            }

            image[imageno - 1].style.display ="block";
            dots[imageno - 1].className += " active";

        }

        // var nameError = document.getElementById('name-error');
        // var phoneError = document.getElementById('phone-error');
        // var emailError = document.getElementById('email-error');
        // var messageError = document.getElementById('message-error');
        // var submitError = document.getElementById('submit-error');

        // function validateName(){
        //     var name = document.getElementById ('contact-name').value;
        //     if(name.length == 0){
        //         nameError.innerHTML = 'Name is required';
        //         return false;
        //     }
        //     if(!name.match(/^[a-zA-Z]+ [a-zA-Z]+$/)){ // Check if name is written in full 
        //         nameError.innerHTML = 'Write full name';
        //         return false;
        //     }
        //     nameError.innerHTML = '<i class = "fas fa fa-check-circle"></i>';
        //     return true;
        // } function validatePhone (){
        //     var phone = document.getElementById ('contact-phone').value;
        //     if (phone.length == 0){
        //         phoneError.innerHTML = 'Phone no is required';
        //         return false;
        //     }
        //     if(phone.length !== 9){
        //         phoneError.innerHTML = 'error';
        //         return false;
        //     }
        //     if(!phone.match(/^[0-9]{9}$/)){
        //         phoneError.innerHTML = 'Wrong input';
        //         return false;
        //     }
        //     phoneError.innerHTML = '<i class = "fas fa fa-check-circle"></i>';
        //     return true;
        // }
        // function validateEmail (){
        //     var email = document.getElementById('contact-email').value;
        //     if(email.length == 0){
        //         emailError.innerHTML = 'Email required';
        //         return false;
        //     }
        //     if(!email.match(/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/)){
        //         emailError.innerHTML = 'Invalid email';
        //         return false;
        //     }
        //     emailError.innerHTML = '<i class = "fas fa fa-check-circle"></i>';
        //     return true;
        // }

        // function validateMessage (){
        //     var message = document.getElementById('contact-message').value;
        //     var required = 30;
        //     var left = required - message.length;
        //     if(left>0){
        //         messageError.innerHTML = left + 'more characters needed';
        //         return false;

        //     }
        //     messageError.innerHTML = '<i class = "fas fa fa-check-circle"></i>';
        //     return true;
        // }
        // function validateForm(){
        //     if(!validateName() || !validatePhone() || !validateEmail() || !validateMessage() ){
        //         submitError.style.display = 'block';
        //         submitError.innerHTML = 'Please correct your information!';
        //     setTimeout(function() {submitError.style.display = 'none';}, 3000); 
        //         return false;
        //     }
          
        // }
        //validate name
function validateName() {
    var name = document.getElementById("contact-name");
    var nameError = document.getElementById("name-error");
    if (name.value == "") {
      nameError.innerHTML = "*Name cannot be blank";
      return false;
    }
    else {
      nameError.innerHTML = "";
      return true;
    }
  }
  
  //validate phone
  function validatePhone() {
    var phone = document.getElementById("contact-phone");
    var phoneError = document.getElementById("phone-error");
    if (phone.value == "") {
      phoneError.innerHTML = "*Phone number cannot be blank";
      return false;
    }
    else {
      phoneError.innerHTML = "";
      return true;
    }
  }
  
  //validate email
  function validateEmail() {
    var email = document.getElementById("contact-email");
    var emailError = document.getElementById("email-error");
    if (email.value == "") {
      emailError.innerHTML = "*Email cannot be blank";
      return false;
    }
    else {
      emailError.innerHTML = "";
      return true;
    }
  }
  
  //validate message
  function validateMessage() {
    var message = document.getElementById("contact-message");
    var messageError = document.getElementById("message-error");
    if (message.value == "") {
      messageError.innerHTML = "*Message cannot be blank";
      return false;
    }
    else {
      messageError.innerHTML = "";
      return true;
    }
  }
  
  //validate form
  function validateForm() {
    var nameError = validateName();
    var phoneError = validatePhone();
    var emailError = validateEmail();
    var messageError = validateMessage();
    var submitError = document.getElementById("submit-error");
  
    if (nameError && phoneError && emailError && messageError) {
      submitError.innerHTML = "Form submitted successfully";
      return true;
    }
}

