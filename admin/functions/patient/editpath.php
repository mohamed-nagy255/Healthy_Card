<?php

session_start();
$nam  = $_SESSION['name'];
$id  = $_SESSION['login'];
require_once "../connect.php";
$sel  = "SELECT * FROM $nam  WHERE  id = $id";
$query = $conn -> query($sel);
$name  = $query -> fetch_assoc();

    $id  =  $_POST['id'];
    $path = $_POST['path_case'];

    require_once "../connect.php";

    $update =  "UPDATE path_cases
    SET
    path_case = '$path'
    WHERE
    id = '$id'
    ";

    $query = $conn -> query($update);

    if ($query) {
        header('location: ../../patients.php?id='. $name['hospital_name_id']);
    } else {
        echo $conn -> error;
    }