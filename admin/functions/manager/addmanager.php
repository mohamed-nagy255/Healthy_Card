<?php

    $username    =  $_POST['username'];
    $email       =  $_POST['email'];
    $pass        =  md5($_POST['password']);
    $phone       =  $_POST['phone'];
    $address     =  $_POST['address'];
    $hospital    =  $_POST['hospital_name_id'];
    $priv    =  $_POST['priv'];


    require_once "../connect.php";

    $insert  =  "INSERT INTO 
    managers
    (username, email, password, phone, address, hospital_name_id, priv)
    VALUE
    ('$username' , '$email' , '$pass' , '$phone' , '$address' , '$hospital' , '$priv')
    ";

    // print_r($_POST);

    $query  =  $conn -> query($insert);

    if ($query) {
        header('location: ../../manager.php');
    } else {
        echo $conn -> error;
    }