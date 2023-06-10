<?php 
$DATABASE_HOST= 'localhost';
$DATABASE_USER= 'root';
$DATABASE_PASS= '';
$DATABASE_NAME='online education system';
$conn = mysqli_connect($DATABASE_HOST,$DATABASE_USER,$DATABASE_PASS,$DATABASE_NAME);
if(mysqli_connect_error()){
    exit('Error connecting to the database'.mysqli_error());
}
  if(!isset($_POST['tusername'],$_POST['tpassword'],$_POST['taddress'],$_POST['temail'],$_POST['tcontact'],$_POST['tsyllabus'])){

      exit('Empty field(s)');
  }

  if(empty($_POST['tusername']) || empty($_POST['tpassword']) || empty($_POST['taddress']) || empty($_POST['temail']) || empty($_POST['tcontact']) || empty($_POST['tsyllabus'])){
 exit('Values Empty');
  }
if($stmt = $conn->prepare('SELECT requester_id,password FROM submitstatus WHERE requester_info=?')){

    $stmt->bind_param('s',$_POST['tusername']);
    $stmt->execute();
    $stmt->store_result();

    if($stmt->num_rows>0){
        echo 'Username already Exists/ Trt';
    }
    else {

        if($stmt = $conn->prepare('INSERT INTO submitstatus(requester_info,password,requester_email,requester_address,requester_contact,requester_syllabus) VALUES (?,?,?,?,?,?)')){
        $password = Password_hash($_POST['tpassword'],PASSWORD_DEFAULT);        
        $stmt->bind_param('ssssss',$_POST['tusername'], $tpassword, $_POST['temail'],$_POST['taddress'],$_POST['tcontact'],$_POST['tsyllabus']);
        $stmt->execute();
        echo 'Succesfully registered';
        header("Location: submit.html");
        

        
         }
    
    else
    {
        echo 'Error Eccured 1';
    }

    
    }
    
    $stmt->close();
}
else{
    echo 'Error Eccured';
}

$conn->close();

?>