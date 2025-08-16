<?php

include "connection.php";

if (isset($_POST['register'])){
    
    $name= $_POST ['name'];
    $email= $_POST ['email'];
    $pass= $_POST ['pass'];
}

$query = mysqli_query($con, " INSERT INTO register (Name,Email,password) VALUES('$name','$email','pass')");

if($query){
    echo "<script>
    alert('data inserted succesfully');
    location.assign('form_handling.php')
    </script>";
}

?>