<?php 
 
 include ("config.php");

 if(isset($_POST['sumbit'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];

 }

 $sql = 'INSERT INTO `pageview`(firstname,lastname,password,email,gender) VALUES ('.$firstname.', '.$lastname.','.$password.','.$email.', '.$gender.')';
 $result =  $conn->query($sql);
 if($result == TRUE){
     echo 'New recorded succesfully';
 }
 else 
 {
     echo 'Error'.$sql."<br>". $conn->error;
 }

$conn->close();


?>
 




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Singup form</title>
</head>
<body>

<form action="<?php $_PHP_SELF ?>" method = "POST">

<fieldset>
    <legend>Personal Information</legend>
    First Name: <br>
    <input type="text" name = "firstname"> <br>
    Last Name: <br>
    <input type="text" name = "lastname"> <br>
    Password: <br>
    <input type="password" name = "password"> <br>
    Email_id: <br>
    <input type="email" name = "email"> <br>
    Gender: <br>
    <input type="radio" name = "gender" value = "Male"> Male
    <input type="radio" name = "gender" value = "Female"> Female
    <br> <br>
    <input type="submit" name = "submit" value = "submit">

</fieldset>


</form>
    
</body>
</html>