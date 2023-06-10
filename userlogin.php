<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>userlogin</title>
    <style>

.userlogin{
   
    width: 200px;
    height: 100px;
    margin:50px;
    position: left ;
    float:center;
    
}
.userlogin  button{
  background-color: green;
  padding:20px;
  margin:50px;
  border-radius: 20px 20px;

}

.userlogin  a{
  background-color: green;
  padding:20px;
  margin:50px;
  border-radius: 20px 20px;

}
.userlogin  button a:hover{
  background-color:salmon;
  border-radius: 30px 30px;
}

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
        <a href="userlogout.php" class="w3-bar-item w3-button"> Logout</a>
      </div>
    </div>
    <div class="w3-dropdown-hover">
      <button class="w3-button">Admin Panel</button>
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="dashboard.php" class="w3-bar-item w3-button">Dashboard</a>
        <a href="wordsummary.php" class="w3-bar-item w3-button">Wordsummary</a>
        <a href="request.php" class="w3-bar-item w3-button"> Request</a>
        <a href="userlogout.php" class="w3-bar-item w3-button"> Logout</a>
      </div>
    </div>
    <a href="logout1.php" class="w3-bar-item w3-button">Logout</a>
    <a href="userlogin.php" class="w3-bar-item w3-button"> teacher's/student's Login</a>
  </div>

  <div  class ="userlogin">

   <button type="submit" name = "studentlogin" value = "studentlogin"><a href="student_login.php">Student_login</a></button>
   <br><br><button type="submit" name = "teacherlogin" value = "teacherlogin"><a href="teacher_login.php">Teacher_login</a></button>
   
   <!-- <div><img  class="image"src="th1.jpg" alt="error imgae found 1">
    <img  class ="image"src="th2.jpg" alt="error imgae found 2"></div> -->
  
   </div>

   
</body>
</html>
