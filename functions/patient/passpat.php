<?php

  session_start();
  $nam  = $_SESSION['name'];
  $id  = $_SESSION['login'];
  require_once "../connect.php";
  $sel  = "SELECT * FROM $nam  WHERE  id = $id";
  $query = $conn -> query($sel);
  $name  = $query -> fetch_assoc();

$id = $_POST['id'];
$password = $_POST['password'];

// require_once "../connect.php";

if(!empty($password)){
    $pass = md5($password);
    $updatepass = "UPDATE patients SET password = '$pass' WHERE id = '$id'";
    $qpass = $conn -> query($updatepass);
}

// print_r($_POST);
// exit();

if ($qpass) {
    header ("location: ../../patient/profile-patient.php?id=" . $name['id']);
} else {
    echo $conn -> error;
}