<?php

    session_start();
    $nam  = $_SESSION['name'];
    $id  = $_SESSION['login'];
    require_once "connect.php";
    $sel  = "SELECT * FROM $nam  WHERE  id = $id";
    $query = $conn -> query($sel);
    $name  = $query -> fetch_assoc();
    $hospital    =   $name['hospital_name_id'];
    
    $name  = $_POST['username'];
    $report  = $_POST['report'];
    $hospital  = $_POST['hospital_name_id'];

    // require_once "connect.php";

    $insert  =  "INSERT INTO 
    report
    (username, report, hospital_name_id)
    VALUE
    ('$name' , '$report' , '$hospital')
    ";

    // print_r($_POST);
    // exit();

    $query  =  $conn -> query($insert);

    if ($query) {
        header("location: ../services.php?id=" . $hospital);
    } else {
        echo $conn -> error;
    }