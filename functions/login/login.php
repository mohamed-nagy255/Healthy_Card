<?php

    session_start();

    $username      =    $_POST['email'];
    $pass          =    md5($_POST['password']);

    require "../connect.php";

    // echo "<pre>";
    // print_r($_POST);
    // exit();

    $tables  =  ['uner', 'managers', 'drs', 'nurses', 'employees', 'patients' , 'pharmacist'];
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

                header("location: ../../admin/index.php");

                  exit();

                } elseif ($user['priv'] == 200){

                    $_SESSION['login'] = $id;
                    $_SESSION['priv'] = $user['priv'];
                    $_SESSION['name'] = 'managers';


                    header("location: ../../admin/index.php");

                    exit();

                }elseif ($user['priv'] == 300){

                    $_SESSION['login'] = $id;
                    $_SESSION['priv'] = $user['priv'];
                    $_SESSION['name'] = 'drs';



                    header("location: ../../index.php");

                    exit();

                }elseif ($user['priv'] == 400){

                    $_SESSION['login'] = $id;
                    $_SESSION['priv'] = $user['priv'];
                    $_SESSION['name'] = 'nurses';



                    header("location: ../../index.php");

                    exit();

                }elseif ($user['priv'] == 500){

                    $_SESSION['login'] = $id;
                    $_SESSION['priv'] = $user['priv'];
                    $_SESSION['name'] = 'employees';



                    header("location: ../../index.php");

                    exit();

                }elseif ($user['priv'] == 600){

                    $_SESSION['login'] = $id;
                    $_SESSION['priv'] = $user['priv'];
                    $_SESSION['name'] = 'patients';



                    header("location: ../../index.php");

                    exit();

                } elseif ($user['priv'] == 700){

                    $_SESSION['login'] = $id;
                    $_SESSION['priv'] = $user['priv'];
                    $_SESSION['name'] = 'pharmacist';



                    header("location: ../../index.php");

                    exit();

                }

            } else {

                header("location: ../../login.php");

            }
       


     $i++; };
