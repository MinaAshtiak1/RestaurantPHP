<?php
session_start();
if(isset($_SESSION['user'])){
    header('location:profile.php');
    exit();
}
if(isset($_POST['submit'])){
include 'conn-db.php';
   $name=filter_var($_POST['name'],FILTER_SANITIZE_STRING);
   $password=filter_var($_POST['password'],FILTER_SANITIZE_STRING);
   $email=filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);

   $errors=[];
   // validate name
   if(empty($name)){
       $errors[]="يجب كتابة الاسم";
   }elseif(strlen($name)>100){
       $errors[]="يجب ان لايكون الاسم اكبر من 100 حرف ";
   }

   // validate email
   if(empty($email)){
    $errors[]="يجب كتابة البريد الاكترونى";
   }elseif(filter_var($email,FILTER_VALIDATE_EMAIL)==false){
    $errors[]="البريد الاكترونى غير صالح";
   }

   $stm="SELECT email FROM users WHERE email ='$email'";
   $q=$conn->prepare($stm);
   $q->execute();
   $data=$q->fetch();

   if($data){
     $errors[]="البريد الاكترونى موجود بالفعل";
   }


   // validate password
   if(empty($password)){
        $errors[]="يجب كتابة  كلمة المرور ";
   }elseif(strlen($password)<6){
    $errors[]="يجب ان لايكون كلمة المرور  اقل  من 6 حرف ";
}



   // insert or errros 
   if(empty($errors)){
      // echo "insert db";
      $password=password_hash($password,PASSWORD_DEFAULT);
      $stm="INSERT INTO users (name,email,password) VALUES ('$name','$email','$password')";
      $conn->prepare($stm)->execute();
      $_POST['name']='';
      $_POST['email']='';

      $_SESSION['user']=[
        "name"=>$name,
        "email"=>$email,
      ];
      header('location:profile.php');
   }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">     
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Restaurant</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">

    <style>

/* Slideshow container */
.slideshow-container 
{
max-width: 1000px;
position: relative;
margin: auto;
}

/* Number text (1/4 etc) */
.numbertext  
{
color: #f2f2f2;
font-size: 12px;
padding: 8px 12px;
position: absolute;
top: 0;
}

/* The dots/bullets/indicators */
.dot 
{
height: 15px;
width: 15px;
margin: 0 2px;
background-color: #bbb;
border-radius: 50%;
display: inline-block;
transition: background-color 0.6s ease;
}

/* Fading animation */
.fade 
{
animation-name: fade;
animation-duration: 1.5s;
}

@keyframes fade 
{
from {opacity: .4} 
to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) 
{
.text {font-size: 11px}
}
</style>
</head>
<body>
<header>
  <nav id="header-nav" class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <a href="C:\Users\minaa\Desktop\Mina Restaurant\index.php" class="pull-left visible-md visible-lg">
                <div id="logo-img" alt="Logo image"></div>
            </a>
                    <div class="navbar-brand">
	                       <a href=".\images\jumbotron_1200.jpg"><h1>Mina Restaurant</h1></a>
                                <p>
                                    <img src="./index_files/star-k-logo.png" alt="Mina Certification"> <!-- 5as bal K  -->
                                        <span>Mina Certification</span>
                                </p>
                    </div>
        </div>
                                              <div id="collapsable-nav" class="collapse navbar-collapse">
                                                <ul id="nav-list" class="nav navbar-nav navbar-right">
                                                <li>
                                                    <a href="Aboutn.html">
                                                      <span class="glyphicon glyphicon-info-sign"></span><br class="hidden-xs"> About
                                                    </a>
                                                  </li>
                                                  <li id="phone" class="hidden-xs">
                                                    <a href="tel:1283634687">
                                                      <span>202-01283634687</span>
                                                    </a>
                                                    <div>* We Deliver</div>
                                                  </li>
                                                </ul><!-- #nav-list -->
                                              </div><!-- .collapse .navbar-collapse -->
    </div>
  </nav>
</header>
                <div id="call-btn" class="visible-xs">
                    <a class="btn" href="tel:202-1283634687">
                        <span class="glyphicon glyphicon-earphone"></span>
                        202-1283634687
                    </a>
                </div>
  <center>
    <font size="10" face="arial" color="#557c3e" bold="100">Sign Up</font>
    <hr size="10" width="400">
      <p >
        <font  color="#557c3e">
            <form action="register.php" method="POST">
              <?php 
                if(isset($errors))
                {
                  if(!empty($errors))
                  {
                    foreach($errors as $msg)
                    {
                      echo $msg . "<br>";
                    }
                  }
                }
              ?>
                User name : <input type="text" name="name" value="<?php if(isset($_POST['name'])){echo $_POST['name'];} ?>" placeholder="name">
                <br>
                E-mail : <input type="email" value="<?php if(isset($_POST['email'])){echo $_POST['email'];} ?>" name="email" placeholder="email">
                <br>
                Password : <input type="password" name="password" placeholder="password">
                <br>
                <input type="submit" name="submit" value="Register">
                <br>
                </form>
                Already a member? <a href="login.php">Log In</a>
            
      </font>
  </center>
  <div id="xs-deliver" class="text-center visible-xs">* We Deliver</div>
  <div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 4</div>
  <img src="1.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 4</div>
  <img src="5.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 4</div>
  <img src="6.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">4 / 4</div>
  <img src="4.jpg" style="width:100%">
</div>
</div>
<br>

<div style="text-align:center">
<span class="dot"></span> 
<span class="dot"></span> 
<span class="dot"></span> 
<span class="dot"></span> 
</div>

<script>
let slideIndex = 0;
showSlides();

function showSlides() 
{
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) 
  {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) 
    {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) 
  {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

</body>
</html>