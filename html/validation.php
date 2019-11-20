<?php
    session_start();
    $con = mysqli_connect("localhost","root","");
    mysqli_select_db($con,"climatechange");

    $name = $_POST['name'];
    $password = $_POST['password'];

    
    $s = " select * from register where name = '$name' && password = '$password'";
    $result = mysqli_query($con,$s);
    $num = mysqli_num_rows($result);
    
    if($num == 1){
        echo"success";
    }
    else
    {
        echo"FAILED";   
    }


?>