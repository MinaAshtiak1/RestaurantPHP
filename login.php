<?php
session_start();
if(isset($_SESSION['user'])){
    header('location:profile.php');
    exit();
}
if(isset($_POST['submit'])){
 include 'conn-db.php';
   $password=filter_var($_POST['password'],FILTER_SANITIZE_STRING);
   $email=filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);

   $errors=[];
   

   // validate email
   if(empty($email)){
    $errors[]="يجب كتابة البريد الاكترونى";
   }


   // validate password
   if(empty($password)){
        $errors[]="يجب كتابة  كلمة المرور ";
   }



   // insert or errros 
   if(empty($errors)){
   
      // echo "check db";

    $stm="SELECT * FROM users WHERE email ='$email'";
    $q=$conn->prepare($stm);
    $q->execute();
    $data=$q->fetch();
    if(!$data){
       $errors[] = "خطأ فى تسجيل الدخول";
    }else{
         $password_hash=$data['password']; 
         
         if(!password_verify($password,$password_hash)){
            $errors[] = "خطأ فى تسجيل الدخول";
         }else{
            $_SESSION['user']=[
                "name"=>$data['name'],
                "email"=>$email,
              ];
            header('location:profile.php');

         }
    }
     
    
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
	                       <a href=".\images\jumbotron_1200.jpg"><h1>Mina Restaurant </h1></a>    
                           <p>
                                    <img src="./index_files/star-k-logo.png" alt="Mina Certification"> <!-- 5as bal K  -->
                                        <span>Mina Certification</span>
                                </p>
                    </div>
                </div>
                                              <div id="collapsable-nav" class="collapse navbar-collapse">
                                                <ul id="nav-list" class="nav navbar-nav navbar-right">
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
    <font size="10" face="arial" color="#557c3e" bold="100">Mina Restaurant</font>
    <hr size="10" width="400">
    <font  color="#557c3e">
            <form action="login.php" method="POST">
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
                E-mail : <input type="text" value="<?php if(isset($_POST['email'])){echo $_POST['email'];} ?>" name="email" placeholder="email">
                <br>
                Password : <input type="password" name="password" placeholder="password">
                <br>
                <input type="submit" value="Login" name="submit">
                <br>
                </form>
                Create A New Account <a href="register.php">Register</a>
            
    </font>
  </center>
  <br>
  
  
  
  
  <div id="xs-deliver" class="text-center visible-xs">* We Deliver</div>
 

</body>
</html>