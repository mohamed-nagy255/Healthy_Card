  <?php

    session_start();
    $nam  = $_SESSION['name'];
    $id  = $_SESSION['login'];
    require_once "../connect.php";
    $sel  = "SELECT * FROM $nam  WHERE  id = $id";
    $query = $conn -> query($sel);
    $name  = $query -> fetch_assoc();

    $employeeName   =   $_POST['username'];
    $email          =   $_POST['email'];
    $password       =   md5($_POST['password']);
    $age            =   $_POST['age'];
    $address        =   $_POST['address'];
    $phone          =   $_POST['phone'];
    $gender         =   $_POST['gender'];
    $status         =   $_POST['status'];
    $idcard         =   $_POST['idcard'];
    $hospitalName   =   $_POST['hospital_name_id'];
    $priv   =   $_POST['priv'];
    // $imgname        =   $_FILES['img']['name'];
    // $tmpname        =   $_FILES['img']['tmp_name'];
    //
    // if ($_FILES['img']['error'] == 0 ) {
    //
    //     $extensions =  ['jpg' , 'gif' , 'png' , 'jpeg'];
    //     $ext        =  explode('.' , $imgname);
    //     $ex         =  end($ext);
    //
    //     if (in_array($ex, $extensions)) {
    //
    //         if ($_FILES['img']['size'] < 2000000) {
    //             $newname    =   md5(uniqid()) . '.' . $ex;
    //             // echo "$newname";
    //             // exit();
    //             move_uploaded_file($tmpname, "../../images/$newname");
    //         } else {
    //             echo "file is too big";
    //         }
    //
    //     } else {
    //         echo "wrong file extension";
    //     }
    //
    // } else {
    //     echo "you must uploud imag";
    // }

    // require "../connect.php";

    $insert     =   "INSERT INTO
    employees
    (username, email, password, age, address, phone, gender, status, idcard, hospital_name_id, priv)
    VALUE
    ('$employeeName' , '$email' , '$password' , '$age' , '$address' , '$phone' , '$gender' , '$status' , '$idcard' , '$hospitalName' , '$priv')
    ";


// print_r($_POST);
// exit();

    $query      =   $conn -> query($insert);

    if ($query) {
        header("location:../../employees.php?id=". $name['hospital_name_id']);
    } else {
        echo $conn -> error;
    }
