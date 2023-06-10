<?php 
$DATABASE_HOST= 'localhost';
$DATABASE_USER= 'root';
$DATABASE_PASS= '';
$DATABASE_NAME='online education system';
$conn = mysqli_connect($DATABASE_HOST,$DATABASE_USER,$DATABASE_PASS,$DATABASE_NAME);
if(mysqli_connect_error()){
    exit('Error connecting to the database'.mysqli_error());
}

  if(!isset($_POST['username'],$_POST['password'],$_POST['email'],$_POST['address'],$_POST['contact'],$_POST['syllabus'])){

      exit('Empty field(s)');
  }

  if(empty($_POST['username']) || empty($_POST['password']) || empty($_POST['email'])  || empty($_POST['address']) || empty($_POST['contact']) || empty($_POST['syllabus'])){
 exit('Values Empty');
  }
if($stmt = $conn->prepare('SELECT id,password FROM teachers WHERE user_name=?')){

    $stmt->bind_param('s',$_POST['username']);
    $stmt->execute();
    $stmt->store_result();

    if($stmt->num_rows>0){
        echo 'Username already Exists/ Trt';
    }
    else {

        if($stmt = $conn->prepare('INSERT INTO teachers(user_name,password,email,address,contact,syllabus) VALUES (?,?,?,?,?,?)')){
        $password = Password_hash($_POST['password'],PASSWORD_DEFAULT);        
        $stmt->bind_param('ssssss',$_POST['username'], $password, $_POST['email'],$_POST['address'],$_POST['contact'],$_POST['syllabus']);
        $stmt->execute();
        echo 'Succesfully registered';
        header("Location: teacher_login.php");
        

        
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

?>