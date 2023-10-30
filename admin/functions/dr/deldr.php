<?php


    session_start();
    $nam  = $_SESSION['name'];
    $id  = $_SESSION['login'];
    require_once "../connect.php";
    $sel  = "SELECT * FROM $nam  WHERE  id = $id";
    $query = $conn -> query($sel);
    $name  = $query -> fetch_assoc();
    // require "../connect.php";

    $id         =   $_GET['id'];
    $deletdr    =   "DELETE FROM drs WHERE id = '$id'";
    $query      =   $conn -> query($deletdr);
    if ($query) {
        header("location:../../DRs.php?id=". $name['hospital_name_id']);
    } else {
        echo $conn -> error;
    }