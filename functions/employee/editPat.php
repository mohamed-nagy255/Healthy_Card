<?php

    session_start();
    $nam  = $_SESSION['name'];
    $id  = $_SESSION['login'];
    require_once "../connect.php";
    $sel  = "SELECT * FROM $nam  WHERE  id = $id";
    $query = $conn -> query($sel);
    $name  = $query -> fetch_assoc();
    $hospital    =   $name['hospital_name_id'];

    $id          =   $_POST['id'];
    $age         =   $_POST['age'];
    $phone       =   $_POST['phone'];
    $address     =   $_POST['address'];
    $name        =   $_POST['username'];

    // print_r($_POST);
    // exit();

    $update         =   "UPDATE patients
    SET

    age                  =   '$age',
    phone                =   '$phone',
    address              =   '$address',
    username             =   '$name'

    WHERE

    id      =   '$id'
    
    ";
    // exit();
   
    $query      =   $conn -> query($update);

    if ($query) {
        header("location:../../services.php?id=" . $hospital);
    } else {
        echo $conn -> error;
    }