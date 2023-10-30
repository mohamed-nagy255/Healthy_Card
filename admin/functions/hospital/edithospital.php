<?php

    $id         =   $_POST['id'];
    $hos_name   =   $_POST['hospital_name'];
    $phone   =   $_POST['phone'];
    $number   =   $_POST['em_number'];
    
    require "../connect.php";
    $address    =   $_POST['address'];

    $update = "UPDATE hospital
    SET
    hospital_name   =   '$hos_name',
    address =   '$address',
    phone =   '$phone',
    em_number =   '$number'
    
    WHERE
    id  = '$id'
    ";

    $query  =  $conn -> query($update);

    if ($query) {
        header("location:../../hospitals.php");
    } else {
        echo $conn -> error;
    }