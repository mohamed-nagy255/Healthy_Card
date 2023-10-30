<?php

    session_start();
    $nam  = $_SESSION['name'];
    $id  = $_SESSION['login'];
    require_once "../connect.php";
    $sel  = "SELECT * FROM $nam  WHERE  id = $id";
    $query = $conn -> query($sel);
    $name  = $query -> fetch_assoc();

    $id      = $_POST['id'];
    $age     = $_POST['age'];
    $address = $_POST['address'];
    $phone   = $_POST['phone'];


    // require_once "../connect.php";

    // if (isset($age)) {
    //     echo "TRUE";
    // } else {
    //     echo $conn -> error;
    //     echo "FALSE";
    // }
    

    $update = "UPDATE pharmacist
        
        SET
        age           =  '$age',
        address       = '$address',
        phone         = '$phone'

        WHERE
        id  =   '$id'

        ";

        $query  =  $conn -> query($update);

        if ($query) {
            header("location:../../pharmacist.php?id=". $name['hospital_name_id']);
        } else {
            echo $conn -> error;
        }

        