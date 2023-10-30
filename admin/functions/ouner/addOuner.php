<?php

    $username  = $_POST['username'];
    $email     = $_POST['email'];
    $password  = md5($_POST['password']);
    $priv  = $_POST['priv'];

    require_once "../connect.php";

    $insert     =   "INSERT INTO
    
    uner
    (username, email, password, priv)
    VALUE
    ('$username' , '$email' , '$password' , '$priv')
    ";

    $query  = $conn -> query($insert);

    if ($query) {
        header("location: ../../ouner.php");
    } else {
        echo $conn -> error;
    }