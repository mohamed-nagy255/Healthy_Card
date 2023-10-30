<?php


require "../connect.php";

$id      =   $_GET['id'];
$delete  =   "DELETE FROM uner WHERE id = '$id'";
$query   =   $conn -> query($delete);


if ($query) {
    header("location:../../ouner.php");
} else {
    echo $conn -> error;
}