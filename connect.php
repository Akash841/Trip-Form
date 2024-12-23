<?php
    $sername='localhost';
    $username='root';
    $password='password';
    $database='college';


    $con=mysqli_connect($sername,$username,$password,$database);

    if($con){
        echo "";

    }else{
        die(mysqli_error($con));
    }
?>