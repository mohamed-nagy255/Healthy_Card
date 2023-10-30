<?php


    require_once "connect.php";

    $id         =   $_GET['id'];
    $deletdr    =   "DELETE FROM reservations WHERE id = '$id'";
    $query      =   $conn -> query($deletdr);
    if ($query) {
        header("location:../reservations.php");
    } else {
        echo $conn -> error;
    }
