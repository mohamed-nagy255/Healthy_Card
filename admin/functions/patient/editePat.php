<?php

session_start();
$nam  = $_SESSION['name'];
$id  = $_SESSION['login'];
require_once "../connect.php";
$sel  = "SELECT * FROM $nam  WHERE  id = $id";
$query = $conn -> query($sel);
$name  = $query -> fetch_assoc();

    $id             =   $_POST['id'];
    $age            =   $_POST['age'];
    $phone          =   $_POST['phone'];
    $address        =   $_POST['address'];
    @$hos_booking   =   $_POST['hospital_booking'];
    $section        =   $_POST['section_id'];

    // require "../connect.php";

    $update         =   "UPDATE patients
    SET

    age                  =   '$age',
    phone                =   '$phone',
    address              =   '$address',
    hospital_booking     =   '$hos_booking',
    section_id              =   '$section'

    WHERE

    id      =   '$id'
    
    ";
    // exit;

    $query      =   $conn -> query($update);

    if ($query) {
        header("location: ../../patients.php?id=". $name['hospital_name_id']);
    } else {
        echo $conn -> error;
    }