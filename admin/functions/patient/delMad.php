<?php

    require "../connect.php";

    $id         =   $_GET['id'];
    $deletpat    =   "DELETE FROM mad_pat WHERE id = '$id'";
    $query      =   $conn -> query($deletpat);
    if ($query) {
        header("location:../../patients.php"); 
    } else {
        echo $conn -> error;
    }