<?php

    session_start();
    $nam  = $_SESSION['name'];
    $id  = $_SESSION['login'];
    require_once "../connect.php";
    $sel  = "SELECT * FROM $nam  WHERE  id = $id";
    $query = $conn -> query($sel);
    $name  = $query -> fetch_assoc();
    $hospi =  $name['hospital_name_id'];
   

    $pat_name   =  $_POST['pat_name_id'];
    $path_case  =  $_POST['path_case'];

    // print_r($_POST);
    // exit();

    
    $insert  =  "INSERT INTO
    path_cases
    (pat_name_id, path_case)
    VALUE
    ('$pat_name' , '$path_case')
    ";

    $query  =  $conn -> query($insert);

    if ($query) {
        header ('location: ../../patients.php?id=' . $hospi);
        // echo "true";
    } else {
        echo $conn -> error;
    }