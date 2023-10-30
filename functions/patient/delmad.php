<?php

    session_start();
    $nam  = $_SESSION['name'];
    $id  = $_SESSION['login'];
    require_once "../connect.php";
    $sel  = "SELECT * FROM $nam  WHERE  id = $id";
    $query = $conn -> query($sel);
    $name  = $query -> fetch_assoc();

    $gn = $_GET['qr_gn'];
    $id         =   $_GET['id'];
    $delet    =   "DELETE FROM mad_pat WHERE id = '$id'";
    $query      =   $conn -> query($delet);
    if ($query) {
        header("location:../../services.php?id=" . $name['hospital_name_id'] . "&qr_gn=" . $gn);
    } else {
        echo $conn -> error;
    }