<?php

session_start();
    $nam  = $_SESSION['name'];
    $id  = $_SESSION['login'];
    require_once "../connect.php";
    $sel  = "SELECT * FROM $nam  WHERE  id = $id";
    $query = $conn -> query($sel);
    $name  = $query -> fetch_assoc();

    $id         =   $_GET['id'];
    $delet    =   "DELETE FROM pharmacy WHERE id = '$id'";
    $query      =   $conn -> query($delet);
    if ($query) {
        header("location:../../services.php?id=" . $name['hospital_name_id']);
    } else {
        echo $conn -> error;
    }