<?php  
 session_start();
 session_unset();
 session_destroy();
 ?>
 <?php
 header("Loaction:userlogin.php");

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Logout_page</title>
 </head>
 <body bgcolor = "grey">
 <h1>You are Logout now so,please Login again</h1>
 <a href="userlogin.php"> Go to Login form
 </a>
 </body>
 </html>