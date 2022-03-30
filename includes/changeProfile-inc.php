<?php
include "../classes/changeProfile-contr.classes.php";
    $email = $_POST["email"];
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $phone = $_POST["phone"];
    $userAlias = $_POST["userAlias"];

    if(isset($_POST["action"])){
        $profile = new ChangeProfileContr($email, $name, $surname, $phone, $userAlias);
        if($profile->changeProfileC()){
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