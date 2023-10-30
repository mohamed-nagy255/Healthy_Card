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

    // print_r($_POST);
    // exit();
    

    $update = "UPDATE drs
        
        SET
        age           =  '$age',
        address       = '$address',
        phone         = '$phone'

        WHERE
        id  =   '$id'

        ";

        $query  =  $conn -> query($update);

    //    print_r($_POST);
    //     exit();

        if ($query) {
            header("location:../../DRs.php?id=". $name['hospital_name_id']);
        } else {
            echo $conn -> error;
        }

        