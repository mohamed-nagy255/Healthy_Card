<?php

    session_start();
    $nam  = $_SESSION['name'];
    $id  = $_SESSION['login'];
    require_once "../connect.php";
    $sel  = "SELECT * FROM $nam  WHERE  id = $id";
    $query = $conn -> query($sel);
    $name  = $query -> fetch_assoc();

    @$gn         = $_GET['qr_gn'];
    @$med        = $_POST['mad_name'];   
    @$pat_name   = $_POST['pat_name_id'];
    @$time       = $_POST['times'];
    @$note       = $_POST['note'];

    // print_r($_POST);
    // exit();
    $insert  =  "INSERT INTO 
    mad_pat
    (mad_name, pat_name_id, times, note)
    VALUE
    ('$med' , '$pat_name' , '$time' , 'note')
    ";
    $query = $conn -> query($insert);

    if ($query) {
        header("location:../../services.php?id=" . $name['hospital_name_id'] . "&qr_gn=" . $gn);
    } else {
        echo $conn -> error;
    }