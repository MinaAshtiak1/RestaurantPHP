<?php
session_start();
if(!isset($_SESSION['user'])){
    header('location:login.php');
    exit();
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
            <a href="C:\Users\minaa\Desktop\Mina Restaurant\index.html" class="pull-left visible-md visible-lg">
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
                                                    <a href="categories.php">
                                                      <span class="glyphicon glyphicon-cutlery"></span><br class="hidden-xs"> Menu
                                                    </a>
                                                  </li>
                                                  <li>
                                                    <a href="About.php">
                                                      <span class="glyphicon glyphicon-info-sign"></span><br class="hidden-xs"> About
                                                    </a>
                                                  </li>
                                                  <li id="phone" class="hidden-xs">
                                                    <a href="tel:1283634687">
                                                      <span>202-01283634687</span>
                                                    </a>
                                                    <div>* We Deliver</div>
                                                  </li>
                                                  <li>
                                                  <div class="col-md-4 col-sm-12 col-xs-12">
                                                    <a href="https://goo.gl/maps/qV15mgtWs8QrNbZu7" target="_blank">
                                                      <div id="map-tile">
                                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3453.5854598390006!2d31.466359215115155!3d30.04874848188068!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14582298a0c9e4b5%3A0xa9e139c0533b833d!2sCairo%20Higher%20Institute%20for%20Engineering%2C%20Computer%20Science%20and%20Management!5e0!3m2!1sen!2seg!4v1609177577301!5m2!1sen!2seg" width="40" height="40" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                                                        <span>map</span>
                                                      </div>
                                                    </a>
                                                  </div> 
                                                </li>
                                                  <li>
                                                  <a href="logout.php">
                                                    <span class="glyphicon glyphicon-info-sign"></span><br class="hidden-xs"> Logout
                                                  </a>
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
    <font size="10" face="arial" color="#557c3e" bold="100">Mina Restaurant</font>
    <hr size="10" width="400">
      <p >
        <font  color="yellow">
          Welcome to Mina Restaurant.
          Mina Restaurant was established in 2022 by the most distinguished engineers and architects
          Mina Restaurant offers a menu of instant dishes, which have a traditional and modern touch, in addition to serving a range of fresh juices,
          various cocktails and cold drinks.
          It is the ideal place to meet up with family, friends and co-workers to have fun.                                             
        </font>
      </p> 
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