<?php

require_once "../connect.php";

    $id    =   $_POST['id'];
    $pat_name   =  $_POST['pat_name_id'];
    $mad_name  =  $_POST['mad_name'];
    $times  =  $_POST['times'];
    $note  =  $_POST['note'];

    // print_r($_POST);
    // exit();

    
    $insert  =  "INSERT INTO
    mad_pat
    (pat_name_id, mad_name, times, note)
    VALUE
    ('$pat_name' , '$mad_name' , '$times' , '$note')
    ";

    

    $query  =  $conn -> query($insert);

    if ($query) {
        header ('location: ../../patients.php');
    } else {
        echo $conn -> error;    
    }