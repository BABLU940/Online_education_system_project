<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Requester</title>
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

$DATABASE_HOST= 'localhost';
$DATABASE_USER= 'root';
$DATABASE_PASS= '';
$DATABASE_NAME='project';
$conn = mysqli_connect($DATABASE_HOST,$DATABASE_USER,$DATABASE_PASS,$DATABASE_NAME);
if(mysqli_connect_error()){
    exit('Error connecting to the database'.mysqli_error());
}
$syllabus_nameErr  = $syllabus_teacherErr = $syllabus_timeErr ="";
$syllabus_name = $syllabus_teacher = $syllabus_time = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST['syllabusname'])){
        $syllabus_nameErr = "Please enter a valid syllabus";
    }
    else 
    {
        $syllabus_name = text_input($_POST['syllabusname']);
        if(!preg_match("/^[a-zA-Z-']*$/",$syllabus_name)){
            $syllabus_nameErr = "only letters and white space  allowed";
        }
    }
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
  if(empty($_POST['syllabusteacher'])){
      $syllabus_teacherErr = "Please enter a valid syllabusteacher";
  }
  else 
  {
      $syllabus_teacher = text_input($_POST['syllabusteacher']);
      if(!preg_match("/^[a-zA-Z-']*$/",$syllabus_teacherErr)){
          $syllabus_teacherErr = "only letters and white space  allowed";
      }
  }
}
  


  if (empty($_POST['syllabustime'])){
    $syllabus_timeErr = 'please select a valid syllabustime';
}
else {
    $syllabus_time = text_input($_POST['syllabustime']);
}

  
if($stmt = $conn->prepare('SELECT id,password FROM sss WHERE syllabus_info=?')){

  $stmt->bind_param('s',$_POST['sullabusname']);
  $stmt->execute();
  $stmt->store_result();

  if($stmt->num_rows>0){
      echo 'Username already Exists/ Trt';
  }
  else {

      if($stmt = $conn->prepare('INSERT INTO sss(syllabus_info,password,syllabus_teacher,syllaubs_time) VALUES (?,?,?,?)')){
      $password = Password_hash($_POST['password'],PASSWORD_DEFAULT);        
      $stmt->bind_param('ssss',$_POST['syllabusname'], $password, $_POST['syllabusteacher'],$_POST['syllaubstime']);
      $stmt->execute();
      echo 'Succesfully requester';
      header("Location: requester.php");
      

      
       }
  
  else
  {
      echo 'Error Eccured';
  }

  
  }
  
  $stmt->close();
}
else{
  echo 'Error Eccured';
}

$conn->close();



function text_input($data){
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;

}

?>
 <h2>student select subject form form</h2>
 <p> <span class ='error'>*required field </span> </p>

 <form action="<?php $_PHP_SELF ?>" method = "POST">

Syllabus_name: <input type="text" name = "syllabusname"> <br> <br>
Syllabus_teacher: <input type="text" name = "syllabusteacher"> <br> <br>
Syllabus_time: <input type="text" name="syllabustime" id="" >
<br> <br>
<input type="submit" name="Click here" value = "Click here" id="">
</form>
<?php

echo "<h2> Your Input: </h2>";
echo $syllabus_name;
echo "<br>";
echo $syllabus_teacher;
echo "<br>";
echo $syllabus_time;
echo "<br>";
?>
</body>
</html>
</body>
</html>
