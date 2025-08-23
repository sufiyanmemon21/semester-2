<?php
$con = mysqli_connect ("localhost","root","","file_uploading");
if(isset($POST["image-upload"])){
    $image_name = $_FILES ["image"]["name"];
    $image_size = $_FILES ["image"]["size"];
    $image_name = $_FILES ["image"]["tmp_name"];
    $image_type = pathinfo($iamge_name,PATHINFO_EXTENSION);

    // echo "<pre>";
    // var_dump($_FILES ["image"]);
    // print_r($_FILES ["image"]);
    // echo "<pre/>";


    // move_uploaded_file ($tmp_name,$destination);

    if($image_size <= 400000){
        if
    }
    else{
        echo "<script>"
        alert ("file format not supported")
        "</script>"
    }
}
?>