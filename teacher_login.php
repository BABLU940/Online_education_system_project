<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher_Login_form</title>
    <link rel="stylesheet" type ="text/css"  href ="login1.css">
</head>
<body>
     <form action="login1.php" method="post">
         <h2>Login_Form for teachers</h2>
         <?php
          if(isset($_GET['error'])){ ?>
             <p class ="error"> <?php echo $_GET['error']; ?></p> 
          <?php } ?>

          <label for="">User Name:</label>
          <input type="text" name="username" id="username" placeholder="Enter your User name">
          <label for="">Passwod:</label>
          <input type="password" name="password" id="password" placeholder="Enter your Password ">
          <button type="submit">Teacher_Login</button> <br>
          <button type="submit"  ><a href="teacher.html">Teacher_Singup</a> </button>
      </form>
</body>
</html>  