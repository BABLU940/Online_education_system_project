<?php
include "config.php";
if(isset($_POST['update'])){
    $firstname = $_POST['firstname'];
    $id = $_POST['id'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $password = $_POST['password'];

    $sql = "UPDATE `pageview` SET 'firstname' ='$firstname','lastname' = '$lastname', 'password' = '$password','email'= '$email','gender'= '$gender','id'='$id' ";
    $result = $conn->query($sql);
    if ($result == TRUE ){
        echo "Record Updated Successfully";
    }
    else {
        echo "Error".$sql."<br>".$conn->error;
    }

}

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $sql = "SELECT * FROM 'pageview' WHERE 'id'='$id'";

    $result = $conn->query($sql);


    if($result->num_rows >0){
        while($row = $result->fetch_assoc()){
            $firstname =$row['firstname'];
            $lastname = $row['lastname'];
            $password = $row['password'];
            $email = $row['email'];
            $gender = $row['gender'];
            $id = $row['id'];
        }

        ?>

        <h2>User Updates form</h2>

        <form action="wordsummary.php" method = "POST">



        <fieldset>
    <legend>Personal Information</legend>
    First Name: <br>
    <input type="text" name = "firstname"  value= "<?php echo $first_name;?>"> <br>
    <input type="hidden" name = "id"  value= "<?php echo $id;?>"> <br>
    Last Name: <br>
    <input type="text" name = "lastname" value= "<?php echo $lastname;?>"> <br>
    Password: <br>
    <input type="password" name = "password" value= "<?php echo $password;?>"> <br>
    Email_id: <br>
    <input type="email" name = "email" value= "<?php echo $email;?>"> <br>
    Gender: <br>
    <input type="radio" name = "gender" value = "Male" <?php if($gender == 'Male'){echo "checked";}?>> Male
    <input type="radio" name = "gender" value = "Female" <?php if($gender == 'Female'){echo "checked";}?>> Female
    <br> <br>
    <input type="submit" name = "update" value = "update">

</fieldset>
        </form>
<?php
    }

    else {
        header("Location:wordsummary.php");
    }
}


?>