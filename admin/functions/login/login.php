<?php

    session_start();

    $username      =    $_POST['email'];
    $pass          =    md5($_POST['password']);

    require "../connect.php";

    // echo "<pre>";
    // print_r($_POST);
    // exit();

    $tables  =  ['uner', 'managers'];
    $i       =  0;


    foreach ($tables as $key) {


        $select     =   "SELECT * FROM  $tables[$i] WHERE email = '$username' AND password = '$pass' ";


        $query      =   $conn -> query($select);

        $user       =   $query -> fetch_assoc();

        $id         =   $user['id'];

        // var_dump($query -> num_rows);
        // exit();

        if ($query -> num_rows > 0) {

                if ($user['priv'] == 100) {

                $_SESSION['login'] = $id;
                $_SESSION['priv'] = $user['priv'];
                $_SESSION['name'] = 'uner';

                header("location: ../../index.php");

                  exit();

                } elseif ($user['priv'] == 200){

                    $_SESSION['login'] = $id;
                    $_SESSION['priv'] = $user['priv'];
                    $_SESSION['name'] = 'managers';


                    header("location: ../../index.php");

                    exit();


                }

            } else {

                header("location: ../../login.php");

            }


     $i++; };
