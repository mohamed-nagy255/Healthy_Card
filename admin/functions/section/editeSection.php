<?php

session_start();
$nam  = $_SESSION['name'];
$id  = $_SESSION['login'];
require_once "../connect.php";
$sel  = "SELECT * FROM $nam  WHERE  id = $id";
$query = $conn -> query($sel);
$name  = $query -> fetch_assoc();

    $id    =  $_POST['id'];
    $sectionName    =   $_POST['section_name'];   
    $sectionManager    =   $_POST['section_manager']; 
    
    // require "../connect.php";

    $update     =   "UPDATE section

    SET
    
        section_name = '$sectionName',
        section_manager = '$sectionManager' 
    
    WHERE
    id  =   '$id';
    ";

    $query  =   $conn -> query($update);

    if ($query) {
        header("location:../../sections.php?id=". $name['hospital_name_id']);
    }else {
        echo $conn -> error;
    }