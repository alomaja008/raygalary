<?php

    session_start();
    require_once 'database.php';

    if (isset($_POST['register'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $skill = $_POST['skill'];
        $level = $_POST['level'];


        $checkEmail = $conn->query("SELECT email FROM `rayweb` WHERE email = '$email'");
        if ($checkEmail->num_rows > 0){
            $_SESSION['register_error'] = '<b>Alert</b><br><big>EMAIL Already Exist, please choose Another Email!.</big>';
            $_SESSION['active_form'] = 'Register.php';
        }else{
            $conn->query("INSERT INTO rayweb (name, email, password, phone, address, skill, level) VALUES ('$name',  '$email', '$password', '$phone', '$address', '$skill', '$level')");
        }
        header("Location: login.php");
        exit();
    }


    if (isset($_POST['Login'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $result = $conn->query("SELECT * FROM `rayweb` WHERE email = '$email'");
        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            if(password_verify($password, $user['password'])) {
                $_SESSION['name'] = $user['name'];
                $_SESSION['email'] = $user['email'];
                $_SESSION['password'] = $user['password'];
                $_SESSION['phone'] = $user['phone'];
                $_SESSION['address'] = $user['address'];
                $_SESSION['skill'] = $user['skill'];
                $_SESSION['level'] = $user['level'];
                $_SESSION['reg day and time'] = $user['reg day and time'];


                header("Location: index1.php");
                exit();
            }
            else{
                header("Location: login.php"); 
            }
           
        }else{
                 header("Location: error.php"); 
        }
    $_SESSION['login_error'] = '<big><b>Alert!!!</b><br>INVALID<b> EMAIL </b>Or <b>PASSWORD </b><sup>&times</sup></big> &#x2743;';
    exit();
    }


    if (isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

         $conn->query("INSERT INTO `msg` (name, email, message) VALUES ('$name',  '$email', '$message')");

        header("Location: thanks.php");
        exit();
    }else{
         header("Location: error.php"); 
    }
    exit();
?>