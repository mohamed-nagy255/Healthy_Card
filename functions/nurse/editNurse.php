<?php

$id = $_POST['id'];
$name = $_POST['username'];
$age = $_POST['age'];
$phone = $_POST['phone'];
$address = $_POST['address'];


require_once "../connect.php";

// print_r($_POST);
// exit();


$update     =   "UPDATE nurses
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
        header("location:../../nurse/profile-nurse.php");
    } else {
        echo $conn -> error;
    }