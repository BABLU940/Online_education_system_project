<!-- <?php 
    session_start();
    include "db_conn.php";     
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "online education system";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
    $username = $_POST['username'];  
    $password = $_POST['password'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select *from login where username = '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<h1><center> Login successful </center></h1>";  
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        } 
?> -->


<?php
  session_start();
  include "db_conn.php";

  if (isset($_POST['username']) && isset($_POST['password'])){

      function validate($data) {
          $data = trim($data);
          $data = stripcslashes($data);
          $data = htmlspecialchars($data);
          return $data;
      }
      $username = validate($_POST['username']);
      $password = validate($_POST['password']);
  
  if(empty($username)){
      header ("Location: index.php?error=User Name is reqired");
      exit();
  }
  else if(empty($password)){
      header("Location: index.php?error=Password is reqired");
      exit();
  }
  
//   else  {
//   else
//   {
//       header("Location: home.php");
//       exit();
//   }

   $sql = "SELECT * FROM input1 WHERE user_name='$username' AND password='$password'";
   echo "<h1><center> Login successful </center></h1>"; 

    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) === 1){
    $row = mysqli_fetch_assoc($result);
    if($row['user_name'] === $username && $row['password'] === $password) {

        echo "Logged in!";

        $_SESSION['user_name'] = $row['user_name'];

        $_SESSION['name'] = $row['name'];

        $_SESSION['id'] = $row['id'];

        header("Location: home.php");

        exit();
        // echo "<h1><center> Login successful </center></h1>"; 
     }
    
    else{

        header("Location: index.php?error=Incorect User name or password 1");

        exit();

    }
}
else{

header("Location: index.php?error=Incorect  User name or password 2");

exit(); 
   }
   }

else{
    header("Location:index.php");
    exit();
}
// echo "<h1><center> Login successful </center></h1>"; 
?>