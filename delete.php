<?php
include "config.php";

if(isset($_GET['id'])){
    $id = $_GET['id'];


    $sql = " DELETE FROM 'pageview'  WHERE  'id'= '$id'  ";

    $result = $conn->query($sql);
    if ($result == TRUE){
        echo "Record Deleted successfully";

    }
    else{
        echo "Error". $sql . "<br>". $conn->error;
    }
}

?>