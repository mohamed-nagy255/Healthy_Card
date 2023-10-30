<?php

 session_start();
 $nam  = $_SESSION['name'];
 $id  = $_SESSION['login'];
 require_once "../connect.php";
 $sel  = "SELECT * FROM $nam  WHERE  id = $id";
 $query = $conn -> query($sel);
 $name  = $query -> fetch_assoc();
 $hospital    =   $name['hospital_name_id'];


            // =========================================
            // =============    QR CODE     ============
            // =========================================
            include_once "../../phpqrcode/qrlib.php";
            $file = '';
            // if (isset($_POST['sub'])) {
            $name = $_POST['id_qr'];
            $file = "qr/".uniqid().'.png';
            QRcode::png($name, $file);
            // if (QRcode == $name) {
            //     header('location:../../services.php?id=' . $name['hospital_name_id']);
            // }
            // }
            //=========================================
            //=============    QR CODE     ============
            //========================================= 


    $username = $_POST['username'];
    $email    = $_POST['email'];
    $pass     = md5($_POST['password']);
    $gender   = $_POST['gender'];
    $idcard   = $_POST['idcard'];
    $age      = $_POST['age'];
    $address  = $_POST['address'];
    $phone    = $_POST['phone'];
    $status   = $_POST['status'];
    $blood    = $_POST['blood_type'];
    $section  = $_POST['section_id'];
    $priv     = $_POST['priv'];
    $hospital = $_POST['hospital_name_id'];
    $id_qr    = $_POST['id_qr'];
    $qr_gn    = $_POST['qr_gn'];
    
    $insert    =    "INSERT INTO
    patients
    (username, email, password, age, phone, address, gender, status, idcard, blood_type, section_id, hospital_name_id, priv, id_qr, qr_gn, qr)
    VALUE
    ('$username' ,
     '$email' ,
     '$pass' ,
     '$age' ,
     '$phone' ,
     '$address' ,
     '$gender' ,
     '$status' ,
     '$idcard' ,
     '$blood' ,
     '$section' ,
     '$hospital' ,
     '$priv' ,
     '$id_qr' ,
     '$qr_gn' ,
     '$file')
    ";

    $query  =   $conn -> query($insert);
    // print_r($_POST);
    // exit();

    if ($query) {
        if ($_SESSION['priv'] == 500) {
            header("location:../../services.php?id=" . $hospital);
        } elseif ($_SESSION['priv'] == 200) {
            header("location: ../../admin/patients.php?id=" . $hospital);
        }
    } else {
        echo $conn -> error;
    }

