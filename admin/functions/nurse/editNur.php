<?php

    session_start();
    $nam  = $_SESSION['name'];
    $id  = $_SESSION['login'];
    require_once "../connect.php";
    $sel  = "SELECT * FROM $nam  WHERE  id = $id";
    $query = $conn -> query($sel);
    $name  = $query -> fetch_assoc();

    $id       =   $_POST['id'];
    $age      =   $_POST['age'];
    $address  =   $_POST['address'];
    $phone    =   $_POST['phone'];

    // require "../connect.php";

    $update   =   "UPDATE nurses
    SET
    age     =   '$age',
    address =   '$address',
    phone   =   '$phone'
    
    WHERE

    id      = '$id'
    ";

    $query  = $conn -> query($update);

    if ($query) {
        header("location:../../nurses.php?id=". $name['hospital_name_id']);
    } else {
        echo $conn -> error;
    }