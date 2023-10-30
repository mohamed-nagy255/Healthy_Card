<?php

    require_once "../connect.php";

    $id         =   $_GET['id'];
    $delet      =   "DELETE FROM contact_us WHERE id = '$id'";
    $query      =   $conn -> query($delet);
    if ($query) {
        header("location:../../contact.php");
    } else {
        echo $conn -> error;
    }