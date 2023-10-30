<?php

session_start();
    $nam  = $_SESSION['name'];
    $id  = $_SESSION['login'];
    require_once "../connect.php";
    $sel  = "SELECT * FROM $nam  WHERE  id = $id";
    $query = $conn -> query($sel);
    $name  = $query -> fetch_assoc();

    $sectionName    =   $_POST['section_name'];
    $sectionManager    =   $_POST['section_manager'];
    $hospitalName    =   $_POST['hospital_name_id'];

    // require "../connect.php";

    $insertSection  =   "INSERT INTO
    section
    (section_name , section_manager , hospital_name_id)
    VALUE
    ('$sectionName' , '$sectionManager' , '$hospitalName')
    ";

    $query  =   $conn -> query($insertSection);

    if ($query) {
        header("location:../../sections.php?id=". $name['hospital_name_id']);
    } else {
        echo $conn -> error;
    }