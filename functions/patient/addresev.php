<?php
    
    session_start();
    $nam  = $_SESSION['name'];
    $id  = $_SESSION['login'];
    require_once "../connect.php";
    $sel  = "SELECT * FROM $nam  WHERE  id = $id";
    $query = $conn -> query($sel);
    $name  = $query -> fetch_assoc();
    $hos = $name['hospital_name_id'];

    $name = $_POST['pat_name'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $section = $_POST['section_id'];
    $hospital = $_POST['hospital_name_id'];

    $insert = "INSERT INTO 
    reservations
    (pat_name, date, time, section_id, hospital_name_id)
    VALUE
    ('$name' , '$date' , '$time' , '$section' , '$hospital')
    ";


    if ($query) {
        header("location:../../services.php?id=" . $hos . "&qr_gn=" . $gn);
    } else {
        echo $conn -> error;
    }