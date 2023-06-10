<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <style>
    head{
    
    background-image:  url("download.jpg");
    height: 100px;
    width: 200px;
    text-align: left;
    
}

 .head h1{
    margin:0;
    padding:0;
  display: inline;
    text-shadow: antiquewhite;
    text-transform: lowercase;
    text-overflow: inherit;
    text-align: center;
    color: antiquewhite;
}
.head h1 marquee{
    margin:0;
    padding:0;
  display: inline;
  text-shadow: antiquewhite;
  text-transform: lowercase;
  text-overflow: inherit;
  text-align: center;
  color: antiquewhite;
}

h1{
    text-shadow: antiquewhite;
    text-transform: lowercase;
    text-overflow: inherit;
    text-align: left;
    color: skyblue;
}

a:link{
  color:blue;
  background-color: brown;
  border: 2px dashed yellow;
}

a:visited{
    color:yellow;
    background-color:pink;
    border: 2px dashed yellow;
    
}
a:hover{
  background-color: salmon;
}

a:active{
  background-color:purple;
  color:yellow;
}
    </style>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- <link rel ="stylesheet" type= "text/css" href = " login1.css"> -->
</head>
<body bgcolor = "grey">
<div class='head'>
<img src="download.jpg" alt="" height = 100px>
  <h1> <marquee direction ="left">Online Smart Learning System</marquee></h1>

</div>
     <div class="w3-bar w3-light-grey">
    <a href="home.php" class="w3-bar-item w3-button">Home</a>
    <a href="tutorials.php" class="w3-bar-item w3-button">Tutorials</a>
    <a href="contact.php" class="w3-bar-item w3-button">Contact Us</a>
    <a href="assignment.php" class="w3-bar-item w3-button">Assignment</a>
    <a href="question.php" class="w3-bar-item w3-button">Question paper</a>
    <a href="result.php" class="w3-bar-item w3-button">Result Card</a>

    <div class="w3-dropdown-hover">
      <button class="w3-button">User Panel</button>
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="profile.php" class="w3-bar-item w3-button">Profile</a>
        <a href="submit.php" class="w3-bar-item w3-button">Submit request</a>
        <a href="service.php" class="w3-bar-item w3-button"> Service Status</a>
        <a href="userlogout.php" class="w3-bar-item w3-button"> UserLogout</a>
      </div>
    </div>
    <div class="w3-dropdown-hover">
      <button class="w3-button">Admin Panel</button>
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="dashboard.php" class="w3-bar-item w3-button">Dashboard</a>
        <a href="wordsummary.php" class="w3-bar-item w3-button">Wordsummary</a>
        <a href="request.php" class="w3-bar-item w3-button"> Request</a>
        <a href="userlogout.php" class="w3-bar-item w3-button"> UserLogout</a>
      </div>
    </div>
    <a href="logout1.php" class="w3-bar-item w3-button">Logout</a>
    <a href="userlogin.php" class="w3-bar-item w3-button"> teacher's/student's Login</a>
  </div>
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validation form</title>
</head>

<style>
    .error{color:green;}
    </style>
<body>
<?php
$fullnameErr  = $emailErr = $genderErr = $websiteErr = "";
$fullname = $email = $gender = $comment = $website = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST['fullname'])){
        $fullnameErr = "Please enter a valid fullname";
    }
    else 
    {
        $fullname = text_input($_POST['fullname']);
        if(!preg_match("/^[a-zA-Z-']*$/",$fullname)){
            $fullnameErr = "only letters and white space  allowed";
        }
    }
}
  
if(empty($_POST['email'])){
    $emailErr= 'Valid Email address';
}
else {
    $email= text_input($_POST['email']);
if(!filter_var($email, FILTER_VALIDATE_EMAIL));{
    $emailErr = "The email is incorrect";
}
  }

  if (empty($_POST['gender'])){
    $emailErr = 'please select a valid genger';
}
else {
    $email = text_input($_POST['gender']);
}

  if(empty($_POST['website'])){

    $websiteErr = "";
  }
  else {
      $website = text_input($_POST['website']);
      if(!preg_match("/\b(?:(:https?|ftp):\/\/www\,)[-a-z0-9+&#@\/%?=~_|!:,.;]*[-a-z0-9+&#@\/%=~_|]/i",$website)){
          $websiteErr ="Enter a valid website URL";
      }
  }
if(empty($_POST['comment'])){
    $comment =" ";
}
else {
    $comment = text_input($_POST['comment']);
}
function text_input($data){
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
 <h2>PHP form vlaidation Example</h2>
 <p> <span class ='error'>*required field </span> </p>
 <form action="<?php $_PHP_SELF ?>" method = "POST">
Full_name: <input type="text" name = "fullname"> <br> <br>
Email: <input type="text" name = "email"> <br> <br>
Gender: <input type="radio" name="gender" id="" value ="male">Male
<input type="radio" name = "gender"  value = "female">Female <br> <br>
Website: <input type="text" name = "website"> <br> <br>
Comment: <textarea name="comment" id="" cols="30" rows="10">Enter your comment </textarea> <br> <br>
<input type="submit" name="Click here" value = "Click here" id="">
</form>
<?php

echo "<h2> Your Input: </h2>";
echo $fullname;
echo "<br>";
echo $email;
echo "<br>";
echo $gender;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
?>
</body>
</html>

</body>
</html>


