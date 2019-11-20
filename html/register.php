<?php

session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'climatechange');

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

    $s = " select * from register where name = '$name'";
    
    $result = mysqli_query($con,$s);
    
    $num = mysqli_num_rows($result);
    
    if($num == 1){
        echo"Username already taken";
    }
    else
    {
        $reg = "insert into register(name,email,password) values ('$name','$email','$password')";
    
        mysqli_query($con,$reg);
        header('location:./blogs.html');
    }

    ?>