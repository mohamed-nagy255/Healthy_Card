<?php

    session_start();
    $nam  = $_SESSION['name'];
    $id  = $_SESSION['login'];
    require_once "../connect.php";
    $sel  = "SELECT * FROM $nam  WHERE  id = $id";
    $query = $conn -> query($sel);
    $name  = $query -> fetch_assoc();

    $nur_name   =   $_POST['username'];
    $email      =   $_POST['email'];
    $password   =   md5($_POST['password']);
    $age        =   $_POST['age'];
    $address    =   $_POST['address'];
    $phone      =   $_POST['phone'];
    $gender     =   $_POST['gender'];
    $idcard     =   $_POST['idcard'];
    $hos_name   =   $_POST['hospital_name_id'];
    $priv   =   $_POST['priv'];

    // require "../connect.php";

    $insert     =   "INSERT INTO
    nurses
    (username, email, password, age, address, phone, gender, idcard, hospital_name_id, priv)
    VALUE
    ('$nur_name' , '$email' , '$password' , '$age' , '$address' , '$phone' , '$gender' , '$idcard' , '$hos_name' , '$priv')
    ";

    $query      =   $conn -> query($insert);

    if ($query) {
        header("location:../../nurses.php?id=". $name['hospital_name_id']);
    } else {
        echo $conn -> error;
    }
