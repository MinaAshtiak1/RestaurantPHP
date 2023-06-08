<?php
session_start();
if(!isset($_SESSION['user'])){
    header('location:login.php');
    exit();
}
?>
<!DOCTYPE html>
<html>
 <head>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">     
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Menu Categories</title>
            <link rel="stylesheet" href="css/bootstrap.min.css">
            <link rel="stylesheet" href="css/styles.css">
        <style>
          #button{
                  padding:10px;
                  background-color:#f6b319;
                  font-size:15px;
                  border-radius:10px;
                  font-weight:bolder;
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
	                       <a href="images/jumbotron_1200.jpg"><h1>Mina Restaurant</h1></a>
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
        <div id="xs-deliver" class="text-center visible-xs">* We Deliver</div> 
 <div id="main-content" class="container">
   <div >
     <form>
       <center>
         <font size="20" color="#E7E7E7"  face="Arial" >The Soup</font>
         <hr size="1" color=" #255" width="250">
           <img src="images/menu/A/A1.jpg" alt="The Soup" >
           <input type="button" value="Soup details " onclick="alert('Sea Food \nThis soup costs 150 pounds') " id="button" > <a ></a>
           <img src="images/menu/A/A2.jpg" alt="The Soup" >
           <input type="button" value="Soup details " onclick="alert('Chicken Cream\nThis soup costs 100 pounds')" id="button">
           <img src="images/menu/A/A3.jpg" alt="The Soup" >
           <input type="button" value="Soup details " onclick="alert('Lentil soup\nThis soup costs 65 pounds')" id="button"> 
       </center>
       <br>
       <center>
           <img src="images/menu/A/A4.jpg" alt="The Soup" >
           <input type="button" value="Soup details " onclick="alert('Shrimp Soup\nThis soup costs 100 pounds')" id="button"> 
           <img src="images/menu/A/A5.jpg" alt="The Soup" >
           <input type="button" value="Soup details " onclick="alert('Cream Of Mushroom Soup\nThis soup costs 65 pounds')" id="button"> 
           <img src="images/menu/A/A6.jpg" alt="The Soup" >
           <input type="button" value="Soup details " onclick="alert('This soup costs 300 pounds')" id="button"> 
       </center>
       <br>
       <center>
           <img src="images/menu/A/A7.jpg" alt="The Soup" >
           <input type="button" value="Soup details " onclick="alert('Vegetables Soup\nThis soup costs 80 pounds')" id="button"> 
           <img src="images/menu/A/A8.jpg" alt="The Soup" >
           <input type="button" value="Soup details " onclick="alert('This soup costs 150 pounds')" id="button"> 
           <img src="images/menu/A/A9.jpg" alt="The Soup" >
           <input type="button" value="Soup details " onclick="alert('This soup costs 150 pounds')" id="button"> 
       </center>
       <br>
       <center>
           <img src="images/menu/A/A10.jpg" alt="The Soup" >
           <input type="button" value="Soup details " onclick="alert('Broccoli soup\nThis soup costs 80 pounds')" id="button">
           <img src="images/menu/A/A11.jpg" alt="The Soup" >
           <input type="button" value="Soup details " onclick="alert('Meat and onion soup\NThis soup costs 100 pounds')" id="button">
           <hr size="10" color="blue">
       </center>
       <br>
       <center>
         <font size="20" color="#E7E7E7"  face="Arial" >The Maine Plate</font>
         <hr size="1" color=" #222" width="400">
           <img src="images/menu/B/B1.jpg" alt="The Maine Plate" >
           <input type="button" value="Plate details " onclick="alert('This Plate costs 100 pounds')" id="button">
           <img src="images/menu/B/B2.jpg" alt="The Maine Plate" >
           <input type="button" value="Plate details " onclick="alert('This Plate costs 100 pounds')" id="button">
           <img src="images/menu/B/B3.jpg" alt="The Maine Plate" >
           <input type="button" value="Plate details " onclick="alert('This Plate costs 100 pounds')" id="button">
       </center>
       <br>
       <center>
           <img src="images/menu/B/B4.jpg" alt="The Maine Plate" >
           <input type="button" value="Plate details " onclick="alert('This Plate costs 65 pounds')" id="button">
           <img src="images/menu/B/B5.jpg" alt="The Maine Plate" >
           <input type="button" value="Plate details " onclick="alert('This Plate costs 80 pounds')" id="button">
           <img src="images/menu/B/B6.jpg" alt="The Maine Plate" >
           <input type="button" value="Plate details " onclick="alert('This Plate costs 100 pounds')" id="button">
       </center>
       <br>
       <center>
           <img src="images/menu/B/B7.jpg" alt="The Maine Plate" >
           <input type="button" value="Plate details " onclick="alert('This Plate costs 75 pounds')" id="button">
           <img src="images/menu/B/B8.jpg" alt="The Maine Plate" >
           <input type="button" value="Plate details " onclick="alert('This Plate costs 80 pounds')" id="button">
           <img src="images/menu/B/B9.jpg" alt="The Maine Plate" >
           <input type="button" value="Plate details " onclick="alert('This Plate costs 55 pounds')" id="button">
       </center>
       <br>
       <center>
           <img src="images/menu/B/B10.jpg" alt="The Maine Plate" >
           <input type="button" value="Plate details " onclick="alert('This Plate costs 70 pounds')" id="button">
           <img src="images/menu/B/B11.jpg" alt="The Maine Plate" >
           <input type="button" value="Plate details " onclick="alert('This Plate costs 45 pounds')" id="button">
           <img src="images/menu/B/B12.jpg" alt="The Maine Plate" >
           <input type="button" value="Plate details " onclick="alert('This Plate costs 60 pounds')" id="button">
       </center>
       <br>
       <center>
           <img src="images/menu/B/B13.jpg" alt="The Maine Plate" >
           <input type="button" value="Plate details " onclick="alert('This Plate costs 100 pounds')" id="button">
           <img src="images/menu/B/B14.jpg" alt="The Maine Plate" >
           <input type="button" value="Plate details " onclick="alert('This Plate costs 125 pounds')" id="button">
           <img src="images/menu/B/B15.jpg" alt="The Maine Plate" >
           <input type="button" value="Plate details " onclick="alert('This Plate costs 150 pounds')" id="button">
       </center>
       <br>
       <center>
           <img src="images/menu/c/c1.jpg" alt="The Maine Plate" >
           <input type="button" value="Plate details " onclick="alert('This Plate costs 100 pounds')" id="button">
           <img src="images/menu/c/c2.jpg" alt="The Maine Plate" >
           <input type="button" value="Plate details " onclick="alert('This Plate costs 75 pounds')" id="button">
           <img src="images/menu/c/c3.jpg" alt="The Maine Plate" >
           <input type="button" value="Plate details " onclick="alert('This Plate costs 100 pounds')" id="button">
       </center>
       <br>
       <center>
           <img src="images/menu/c/c4.jpg" alt="The Maine Plate" >
           <input type="button" value="Plate details " onclick="alert('This Plate costs 100 pounds')" id="button">
           <img src="images/menu/c/c5.jpg" alt="The Maine Plate" >
           <input type="button" value="Plate details " onclick="alert('This Plate costs 125 pounds')" id="button">
           <img src="images/menu/c/c6.jpg" alt="The Maine Plate" >
           <input type="button" value="Plate details " onclick="alert('This Plate costs 70 pounds')" id="button">
       </center>
       <br>
       <center>
           <img src="images/menu/c/c7.jpg" alt="The Maine Plate" >
           <input type="button" value="Plate details " onclick="alert('This Plate costs 100 pounds')" id="button">
           <img src="images/menu/c/c8.jpg" alt="The Maine Plate" >
           <input type="button" value="Plate details " onclick="alert('This Plate costs 150 pounds')" id="button">
           <img src="images/menu/c/c9.jpg" alt="The Maine Plate" >
           <input type="button" value="Plate details " onclick="alert('This Plate costs 100 pounds')" id="button">
       </center>
       <br>
       <center>
           <img src="images/menu/CM/CM1.jpg" alt="The Maine Plate" >
           <input type="button" value="Plate details " onclick="alert('This Plate costs 150 pounds')" id="button">
           <img src="images/menu/CM/CM2.jpg" alt="The Maine Plate" >
           <input type="button" value="Plate details " onclick="alert('This Plate costs 125 pounds')" id="button">
           <img src="images/menu/CM/CM3.jpg" alt="The Maine Plate" >
           <input type="button" value="Plate details " onclick="alert('This Plate costs 150 pounds')" id="button">
       </center>
       <br>
       <center>
           <img src="images/menu/CM/CM4.jpg" alt="The Maine Plate" >
           <input type="button" value="Plate details " onclick="alert('This Plate costs 150 pounds')" id="button">
           <img src="images/menu/CM/CM5.jpg" alt="The Maine Plate" >
           <input type="button" value="Plate details " onclick="alert('This Plate costs 125 pounds')" id="button">
           <img src="images/menu/CU/CU21.jpg" alt="The Maine Plate" >
           <input type="button" value="Plate details " onclick="alert('This Plate costs 100 pounds')" id="button">
       </center>
       <br>
       <center>
           <img src="images/menu/CU/CU22.jpg" alt="The Maine Plate" >
           <input type="button" value="Plate details " onclick="alert('This Plate costs 150 pounds')" id="button">
           <img src="images/menu/CU/CU23.jpg" alt="The Maine Plate" >
           <input type="button" value="Plate details " onclick="alert('This Plate costs 125 pounds')" id="button">
           <img src="images/menu/D/D1.jpg" alt="The Maine Plate" >
           <input type="button" value="Plate details " onclick="alert('This Plate costs 100 pounds')" id="button">
       </center>
       <br>
       <center>
           <img src="images/menu/D/D2.jpg" alt="The Maine Plate" >
           <input type="button" value="Plate details " onclick="alert('This Plate costs 150 pounds')" id="button">
           <img src="images/menu/D/D3.jpg" alt="The Maine Plate" >
           <input type="button" value="Plate details " onclick="alert('This Plate costs 125 pounds')" id="button">
           <img src="images/menu/D/D4.jpg" alt="The Maine Plate" >
           <input type="button" value="Plate details " onclick="alert('This Plate costs 100 pounds')" id="button">
       </center>
       <br>
       <center>
           <img src="images/menu/D/D5.jpg" alt="The Maine Plate" >
           <input type="button" value="Plate details " onclick="alert('This Plate costs 150 pounds')" id="button">
           <img src="images/menu/D/D6.jpg" alt="The Maine Plate" >
           <input type="button" value="Plate details " onclick="alert('This Plate costs 125 pounds')" id="button">
           <img src="images/menu/D/D7.jpg" alt="The Maine Plate" >
           <input type="button" value="Plate details " onclick="alert('This Plate costs 100 pounds')" id="button">
       </center>
       <br>
       <center>
           <img src="images/menu/D/D8.jpg" alt="The Maine Plate" >
           <input type="button" value="Plate details " onclick="alert('This Plate costs 150 pounds')" id="button">
           <img src="images/menu/D/D9.jpg" alt="The Maine Plate" >
           <input type="button" value="Plate details " onclick="alert('This Plate costs 125 pounds')" id="button">
           <img src="images/menu/D/D10.jpg" alt="The Maine Plate" >
           <input type="button" value="Plate details " onclick="alert('This Plate costs 100 pounds')" id="button">
       </center>
       <br>
       <center>
           <img src="images/menu/D/D11.jpg" alt="The Maine Plate" >
           <input type="button" value="Plate details " onclick="alert('This Plate costs 200 pounds')" id="button">
           <img src="images/menu/D/D12.jpg" alt="The Maine Plate" >
           <input type="button" value="Plate details " onclick="alert('This Plate costs 155 pounds')" id="button">
           <img src="images/menu/D/D13.jpg" alt="The Maine Plate" >
           <input type="button" value="Plate details " onclick="alert('This Plate costs 100 pounds')" id="button">
       </center>
       <br>
       <center>
           <img src="images/menu/D/D14.jpg" alt="The Maine Plate" >
           <input type="button" value="Plate details " onclick="alert('This Plate costs 150 pounds')" id="button">
           <img src="images/menu/D/D15.jpg" alt="The Maine Plate" >
           <input type="button" value="Plate details " onclick="alert('This Plate costs 125 pounds')" id="button">
           <img src="images/menu/D/D16.jpg" alt="The Maine Plate" >
           <input type="button" value="Plate details " onclick="alert('This Plate costs 100 pounds')" id="button">
       </center>
       <br>
       <center>
           <img src="images/menu/D/D17.jpg" alt="The Maine Plate" >
           <input type="button" value="Plate details " onclick="alert('This Plate costs 150 pounds')" id="button">
           <img src="images/menu/D/D18.jpg" alt="The Maine Plate" >
           <input type="button" value="Plate details " onclick="alert('This Plate costs 125 pounds')" id="button">
           <img src="images/menu/DK/DK1.jpg" alt="The Maine Plate" >
           <input type="button" value="Plate details " onclick="alert('This Plate costs 100 pounds')" id="button">
       </center>
       <br>
       <center>
           <img src="images/menu/DK/DK2.jpg" alt="The Maine Plate" >
           <input type="button" value="Plate details " onclick="alert('This Plate costs 150 pounds')" id="button">
           <img src="images/menu/DK/DK3.jpg" alt="The Maine Plate" >
           <input type="button" value="Plate details " onclick="alert('This Plate costs 125 pounds')" id="button">
           <img src="images/menu/F/F1.jpg" alt="The Maine Plate" >
           <input type="button" value="Plate details " onclick="alert('This Plate costs 100 pounds')" id="button">
       </center>
       <br>
       <center>
           <img src="images/menu/F/F2.jpg" alt="The Maine Plate" >
           <input type="button" value="Plate details " onclick="alert('This Plate costs 150 pounds')" id="button">
           <img src="images/menu/F/F3.jpg" alt="The Maine Plate" >
           <input type="button" value="Plate details " onclick="alert('This Plate costs 125 pounds')" id="button">
           <img src="images/menu/F/F4.jpg" alt="The Maine Plate" >
           <input type="button" value="Plate details " onclick="alert('This Plate costs 100 pounds')" id="button">
       </center>
       <br>
       <center>
           <img src="images/menu/F/F5.jpg" alt="The Maine Plate" >
           <input type="button" value="Plate details " onclick="alert('This Plate costs 150 pounds')" id="button">
           <img src="images/menu/F/F6.jpg" alt="The Maine Plate" >
           <input type="button" value="Plate details " onclick="alert('This Plate costs 200 pounds')" id="button">
           <img src="images/menu/F/F7.jpg" alt="The Maine Plate" >
           <input type="button" value="Plate details " onclick="alert('This Plate costs 100 pounds')" id="button">
           <hr size="10" color="blue">
       </center>
       <br>
       <center>
         <font size="20" color="#E7E7E7"  face="Arial" >Dessert</font>
         <hr size="1" color=" #222" width="200">
           <img src="images/menu/CSR/CSR1.jpg" alt="The Maine Plate" >
           <input type="button" value="Dessert " onclick="alert('This Dessert costs 100 pounds')" id="button">
           <img src="images/menu/CSR/CSR2.jpg" alt="The Maine Plate" >
           <input type="button" value="Dessert " onclick="alert('This Dessert costs 100 pounds')" id="button">
           <img src="images/menu/CSR/CSR3.jpg" alt="The Maine Plate" >
           <input type="button" value="Dessert " onclick="alert('This Dessert costs 100 pounds')" id="button">
       </center>
       <br>
       <center>
           <img src="images/menu/CSR/CSR4.jpg" alt="The Maine Plate" >
           <input type="button" value="Dessert " onclick="alert('This Dessert costs 100 pounds')" id="button">
           <img src="images/menu/DS/DS1.jpg" alt="The Maine Plate" >
           <input type="button" value="Dessert " onclick="alert('This Dessert costs 100 pounds')" id="button">
           <img src="images/menu/DS/DS2.jpg" alt="The Maine Plate" >
           <input type="button" value="Dessert " onclick="alert('This Dessert costs 100 pounds')" id="button">
           <hr size="10" color="blue">
       </center>
       <br>
     </form>
   </div>

</body>
    </html>