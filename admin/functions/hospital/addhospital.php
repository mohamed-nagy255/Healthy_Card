<?php

    $hospital_name  =   $_POST['hospital_name'];
    $address        =   $_POST['address'];
    $phone        =   $_POST['phone'];
    $number        =   $_POST['em_number'];

    require "../connect.php";

    $insertho       =   "INSERT INTO
    
    hospital
    (hospital_name, address, phone, em_number)
    VALUE
    ('$hospital_name' , '$address' , '$phone' , '$number')
    ";

    $query  =   $conn -> query($insertho);

    if ($query) {
        header("location:../../hospitals.php");
    } else {
        echo $conn -> error;
    }