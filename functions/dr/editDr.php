<?php

$id = $_POST['id'];
$name = $_POST['username'];
$age = $_POST['age'];
$phone = $_POST['phone'];
$address = $_POST['address'];


require_once "../connect.php";

// print_r($_POST);


$update     =   "UPDATE drs
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
        header("location:../../dr/profile-dr.php");
    } else {
        echo $conn -> error;
    }