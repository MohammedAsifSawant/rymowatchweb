<?php
   session_start();
   if(isset($_SESSION['username']) && isset($_SESSION['password']))
   {
   

   $con = mysqli_connect('localhost','root','','rymowatch');
   mysqli_select_db($con, 'rymowatch');
   if(isset($_POST['send']))
   {
      $name = $_POST['name'];
      $email = $_POST['email'];
      $address = $_POST['address'];
      $phone = $_POST['phone'];
      $city = $_POST['city'];
      $state = $_POST['state'];
      $zipcode = $_POST['zipcode'];
      //.
      $cardna = $_POST['cardna'];
      $cardno = $_POST['cardno'];
      $expmon = $_POST['expmon'];
      $expyear = $_POST['expyear'];   // values from back pages as name
      $cvvno = $_POST['cvvno'];
      $wname=$_POST['h1'];
      $wprice=$_POST['h2'];
  
      
      $insert=
      "insert into book_form(name , email , address , phone , city , state , zipcode , cardna ,cardno , expmon , expyear , cvvno , wname , wprice)  
      values
      ('$name','$email','$address','$phone','$city','$state','$zipcode',' $cardna',' $cardno','$expmon',' $expyear','$cvvno' , '$wname' , '$wprice')";
      
      mysqli_query($con, $insert);
   }
   else
   {
      echo 'something went wrong please try again!';
   }
}
else 
{ 
  echo '<script language = "javascript">'; 
  echo 'alert("Fail login")'; 
  echo '</script>'; 
  echo "<script>window.location.assign('login.php')</script>"; 
  die();
}
?>

<!DOCTYPE html>
<html lang='en'>

<head>
  <meta charset='UTF-8' />
  <meta http-equiv='X-UA-Compatible' content='IE=edge' />
  <meta name='viewport' content='width=device-width, initial-scale=1.0' />
  <title>Document</title>
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css'
    integrity='sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO' crossorigin='anonymous'>

  <link rel='stylesheet' type='text/css'
    href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css'>

  <link rel='stylesheet' href='style.css' />
</head>

<body>

  <!-- Navbar -->

  <nav class='navbar navbar-expand-lg navbar-light 
      py-3 fixed-top'>
    <div class='container'>
      <img src='images/logo1.png' alt='logo'>
      <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarSupportedContent'
        aria-controls='navbarSupportedContent' aria-expanded='true' aria-label='Toggle navigation'>
        <span class='bar'><i class='navbar-toggler-icon'></i></span>
      </button>
      <div class='collapse navbar-collapse' id='navbarSupportedContent'>
        <ul class='navbar-nav ml-auto '>

          <li class='nav-item'>
            <a class='nav-link ' href='index.php'>Home</a>
          </li>
          <li class='nav-item'>
            <a class='nav-link' href='shop.php'>Shop</a>
          </li>
          <li class='nav-item'>
            <a class='nav-link' href='blog.php'>Blog</a>
          </li>
          <li class='nav-item'>
          <a class='nav-link' href='logout.php'>Logout</a>
          </li>
          
          <!-- <i class='fa-solid fa-user'></i> -->
          
          <li class='nav-item'>
            <i id='theme-toggle' class='fas fa-sun'></i>
            <!-- <i class='fa-solid fa-magnifying-glass' onkeyup='searchwatch()' type='text' id='myInput'></i> -->
            <!-- <i class='fa-solid fa-bag-shopping'></i>  -->
          </li>
      </div>
    </div>
  </nav>

  

  <script src='https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js'
    integrity='sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3'
    crossorigin='anonymous'></script>

  <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js'
    integrity='sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V'
    crossorigin='anonymous'></script>
</body>
  </html>