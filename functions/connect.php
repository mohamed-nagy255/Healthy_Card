<?php

    // $dsn  = 'mysql:host=localhost;dbname=cloude';
    // $user = 'root';
    // $pass = '';

    // $conn = new PDO($dsn, $user, $pass);


    @define ('HOST' , 'localhost');
    @define ('USER' , 'root');
    @define ('PASS' , '');
    @define ('DBNAME' , 'healthy_card');


    $conn = new mysqli(HOST, USER, PASS, DBNAME);

    $conn -> set_charset('utf8');

    // if ($conn->connect_error) {
    //     die("connection fialed:" . $conn->connect_error);
    // }



    // if(isset($conn)) {
    //     echo "TRUE";
    // } else {
    //     echo $conn -> erorr;
    // }