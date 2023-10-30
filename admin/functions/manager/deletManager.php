<?php

    require "../connect.php";

    $id      =   $_GET['id'];
    $delete  =   "DELETE FROM managers WHERE id = '$id'";
    $query   =   $conn -> query($delete);
    if ($query) {
        header("location:../../manager.php");
    } else {
        echo $conn -> error;
    }