<?php

    session_start();
    $nam  = $_SESSION['name'];
    $id  = $_SESSION['login'];
    require_once "../connect.php";
    $sel  = "SELECT * FROM $nam  WHERE  id = $id";
    $query = $conn -> query($sel);
    $name  = $query -> fetch_assoc();

    $medname  = $_POST['med_name'];
    $hos   = $_POST['hospital_name_id'];
    $num  = $_POST['number'];

       $select = "SELECT * FROM pharmacy WHERE id = $medname";
        $querysel = $conn -> query($select);
        $phar  =  $querysel -> fetch_assoc();
        $quan = $phar['number'];

    if (isset($medname) == $phar['id']) {
        
        $updat  =  "UPDATE  pharmacy SET number = ($quan) - ($num)  WHERE id = '$medname'";
        $query = $conn -> query($updat);

        } 
    
    if ($query) {
        // echo "True";
        header("location: ../../services.php?id=" . $name['hospital_name_id']);
    } else {
        // echo "False";
        echo $conn -> error;
    }
