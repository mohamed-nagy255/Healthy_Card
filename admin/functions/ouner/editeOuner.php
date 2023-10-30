<?php

    $id  = $_POST['id'];
    $pass  = md5($_POST['password']);

    require_once "../connect.php";

    $update  =  "UPDATE uner
    SET
    password  =  '$pass'

    WHERE
    id  =  '$id'
    ";

    $query   =   $conn -> query($update);
    // exit();

    if ($query) {
        header("location: ../../ouner.php");
    } else {
        echo $conn -> error;
    }
