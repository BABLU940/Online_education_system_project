<?php 
$DATABASE_HOST= 'localhost';
$DATABASE_USER= 'root';
$DATABASE_PASS= '';
$DATABASE_NAME='online education system';
$conn = mysqli_connect($DATABASE_HOST,$DATABASE_USER,$DATABASE_PASS,$DATABASE_NAME);
if(mysqli_connect_error()){
    exit('Error connecting to the database'.mysqli_error());
}

  if(!isset($_POST['username'],$_POST['password'],$_POST['email'],$_POST['address'])){

      exit('Empty field(s)');
  }

  if(empty($_POST['username']) || empty($_POST['password']) || empty($_POST['email'])  || empty($_POST['address'])){
 exit('Values Empty');
  }
if($stmt = $conn->prepare('SELECT id,password FROM input1 WHERE user_name=?')){

    $stmt->bind_param('s',$_POST['username']);
    $stmt->execute();
    $stmt->store_result();

    if($stmt->num_rows>0){
        echo 'Username already Exists/ Trt';
    }
    else {

        if($stmt = $conn->prepare('INSERT INTO input1(user_name,password,email,address) VALUES (?,?,?,?)')){
        $password = Password_hash($_POST['password'],PASSWORD_DEFAULT);        
        $stmt->bind_param('ssss',$_POST['username'], $password, $_POST['email'],$_POST['address']);
        $stmt->execute();
        echo 'Succesfully registered';
        header("Location: index.php");
        

        
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