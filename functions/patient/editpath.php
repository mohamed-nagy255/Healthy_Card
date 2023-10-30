<?php

    session_start();
    $nam  = $_SESSION['name'];
    $id  = $_SESSION['login'];
    require_once "../connect.php";
    $sel  = "SELECT * FROM $nam  WHERE  id = $id";
    $query = $conn -> query($sel);
    $name  = $query -> fetch_assoc();

    @$gn         = $_GET['qr_gn'];
    @$id         = $_POST['id'];
    @$pat_name   = $_POST['pat_name_id'];
    @$path       = $_POST['path_case'];

    $select_path = "SELECT * FROM path_cases WHERE id = '$id'";
    $pathcase  = $conn -> query($select_path);
   
    if ($pathcase -> num_rows > 0){

        $update = "UPDATE path_cases
        SET
        path_case = '$path'
        WHERE
        id = '$id'
        ";
        $query = $conn -> query($update);

    } elseif ($pathcase -> num_rows == 0) {
    
        $insert  =  "INSERT INTO
        path_cases
        (pat_name_id, path_case)
        VALUE
        ('$pat_name' , '$path')
        ";
        $query  =  $conn -> query($insert);

    }

    if ($query) {
        header("location:../../services.php?id=" . $name['hospital_name_id'] . "&qr_gn=" . $gn);
    } else {
        echo $conn -> error;
    }