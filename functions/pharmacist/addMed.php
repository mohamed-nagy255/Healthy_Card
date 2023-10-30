<?php

session_start();
    $nam  = $_SESSION['name'];
    $id  = $_SESSION['login'];
    require_once "../connect.php";
    $sel  = "SELECT * FROM $nam  WHERE  id = $id";
    $query = $conn -> query($sel);
    $name  = $query -> fetch_assoc();

    $medname  = $_POST['med_name'];
    $hos  = $_POST['hospital_name_id'];
    $num  = $_POST['number'];

    // require_once "../connect.php";

       $select = "SELECT * FROM pharmacy WHERE med_name='$medname'";
        $querysel = $conn -> query($select);
        $phar  =  $querysel -> fetch_assoc();
        $quan = $phar['number'];
        $med = $phar['med_name'];
        $id = $phar['id'];

    if (isset($medname) == $med) {
        
        $num + $quan;
        $insert  =  "UPDATE  pharmacy SET number = '$num' + '$quan' WHERE id = '$id'";
    } else {
        $insert  =  "INSERT INTO 
        pharmacy
        (med_name, number, hospital_name_id)
        VALUE
        ('$medname' , '$num' , '$hos')
        ";
    }

    // print_r($_POST);
    // exit();

    $query = $conn -> query($insert);

    if ($query) {
        header("location: ../../services.php?id=" . $name['hospital_name_id']);
    } else {
        echo $conn -> error;
    }
