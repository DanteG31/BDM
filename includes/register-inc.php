<?php
include "../classes/register-contr.classes.php";
    $email = $_POST["email"];
    $pwd = $_POST["passw"];
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $phone = $_POST["phone"];
    $userAlias = $_POST["userAlias"];
    $profile_pic = $_POST["profile_pic"];

    if(isset($_POST["action"])){
        $register = new RegisterContr($email,$pwd, $name, $pwd, $surname, $profile_pic, $phone, $userAlias);
        if($register->checkUserEmail($email)){
            $register->registerUser();
            session_start();
            $_SESSION["email"] = $email;
            $_SESSION["pwd"] = password_hash($pwd, PASSWORD_DEFAULT);
            $_SESSION["name"] = $name;
            $_SESSION["surname"] = $surname;
            $_SESSION["phone"] = $phone;
            $_SESSION["alias"] = $userAlias;
            $_SESSION["type"] = 3;
            echo "true";
            exit;
        }
        else{
            echo "false";
            exit;
        }
        
    }
    else{
        echo "b";
        exit;
    }
?>