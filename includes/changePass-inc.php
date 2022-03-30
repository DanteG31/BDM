<?php
include "../classes/changePass-contr.classes.php";
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];

    if(isset($_POST["action"])){
        $profile = new ChangePassContr($email, $pwd);
        if($profile->changePassC()){
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