<?php
    session_start();
    $con = mysqli_connect("localhost","root","");
    mysqli_select_db($con,'climatechange');

    $name = $_POST['your-name'];
    $mail = $_POST['your-email'];
    $message = $_POST['your-message'];

    $s = "SELECT * from contact_us where mail = '$mail'";

    $result = mysqli_query($con,$s);
    $num = mysqli_num_rows($result);
    if($num == 1){
        echo"Duplicate entry";
    }
    else{
        $reg = "INSERT INTO `contact_us`(`name`, `mail`, `message`) VALUES ('$name','$mail','$message')";
        mysqli_query($con,$reg);
        header('location:../index.html');
    }


?>