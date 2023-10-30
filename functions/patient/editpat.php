<?php

$nam  = $_SESSION['name'];
$id  = $_SESSION['login'];
require_once "../functions/connect.php";
$sel  = "SELECT * FROM $nam  WHERE  id = $id";
$query = $conn -> query($sel);
$name  = $query -> fetch_assoc();

$id = $_POST['id'];
$name = $_POST['username'];
$age = $_POST['age'];
$phone = $_POST['phone'];
$address = $_POST['address'];


require_once "../connect.php";

// print_r($_POST);


$update     =   "UPDATE patients
    SET
    username      =   '$name',
    age      =   '$age',
    address  =   '$address',
    phone   =   '$phone'

    WHERE

    id  =   '$id'
    
    ";

    $query  = $conn -> query($update);

    if ($query) {
        header("location:../../patient/profile-patient.php?id=" . $name['id']);
    } else {
        echo $conn -> error;
    }