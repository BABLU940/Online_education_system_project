<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment</title>
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
        <br> <br>
        <h2>Subject by Assignment List </h2>
        <table>
          <tr><td>Science</td>
           <td>Computer</td>
          <td>Commerce</td>
          <td>Art</td>
        </tr>
        <tr>
          <td><a href="">BCS</a><br>
          <a href="">BCS-nurse</a><br>
          <a href="">BCS-Mathematic</a>
          <a href="">BCS-Physics</a>
          <a href="">BCS-Chemistry</a>
          <a href="">MSC</a><br>
          <a href="">B-tech</a><br>
          <a href="">M-tech</a><br>
          <a href=""></a>
        </td>
        <td><a href="">BCA</a>
      <a href="">MCA</a>
      <a href="">Deploma-ID</a>
      <a href="">BSC-IT</a>
      <a href="">MSC-IT</a>
      <a href="">Fundational course</a>
      </td>
      <td><a href="">BCOM</a>
      <a href="'">BCOM-G</a>
      <a href="">BCOMCA</a>
      <a href="">MCOM</a>
      <a href="">MBA</a>
      <a href="">BBA</a>
      <a href="">BCOMCAA</a>
      </td>
      <td>
        <a href="">BA</a>
        <a href="">MA</a>
        <a href="">BA-HINDI</a>
        <a href="">BA-English</a>
      </td>
        </tr>
        </table>
       



</body>
</html>
