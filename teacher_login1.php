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
      header ("Location: teacher_login.php?error=User Name is reqired");
      exit();
  }
  else if(empty($password)){
      header("Location: teacher_login.php?error=Password is reqired");
      exit();
  }
  
  else  {
//   else
//   {
//       header("Location: home.php");
//       exit();
//   }

   $sql = "SELECT * FROM teachers WHERE user_name='$username' AND password='$password'";

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
     }
    
    else{

        header("Location: teacher_login.php?error=Incorect User name or password 1");

        exit();

    }
}
else{

header("Location: teacher_login.php?error=Incorect  User name or password 2");

exit(); 
   }
 }
}
else{
    header("Location:teacher_login.php");
    exit();
}
?>
