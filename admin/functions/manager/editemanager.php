<?php

    $id       =   $_POST['id'];
    $pass      =   md5($_POST['password']);
    $address  =   $_POST['address'];
    $phone    =   $_POST['phone'];

    require "../connect.php";

    $update   =   "UPDATE managers
    SET
    password     =   '$pass',
    address =   '$address',
    phone   =   '$phone'
    
    WHERE

    id      = '$id'
    ";

    $query  = $conn -> query($update);

    if ($query) {
        header("location:../../manager.php");
    } else {
        echo $conn -> error;
    }