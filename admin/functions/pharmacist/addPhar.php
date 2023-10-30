<?php

    session_start();
    $nam  = $_SESSION['name'];
    $id  = $_SESSION['login'];
    require_once "../connect.php";
    $sel  = "SELECT * FROM $nam  WHERE  id = $id";
    $query = $conn -> query($sel);
    $name  = $query -> fetch_assoc();

    $username   = $_POST['username'];
    $email      = $_POST['email'];
    $password   = md5($_POST['password']);
    $age        = $_POST['age'];
    $gender     = $_POST['gender'];
    $address    = $_POST['address'];
    $phone      = $_POST['phone'];
    $idcard     = $_POST['idcard'];
    $ho_name    = $_POST['hospital_name_id'];
    $priv       = $_POST['priv'];

    // require "../connect.php";

    // if (isset($conn)) {
    //     echo "true";
    // } else {
    //     echo $conn -> error;
    // }

    // if (isset($age)) {
    //     echo "true";
    // } else {
    //     echo $conn -> error;
    // }

    $insert = "INSERT INTO
    pharmacist
    (username, email, password, age, gender, address, phone, idcard, hospital_name_id, priv)
    VALUE
    ('$username' , '$email' , '$password' , '$age' , '$gender' , '$address' , '$phone' , '$idcard' , '$ho_name' , '$priv')
    ";

    $query  = $conn -> query($insert);

    if ($query) {
        header("location:../../pharmacist.php?id=". $name['hospital_name_id']);
    } else {
        echo $conn -> error;
    }