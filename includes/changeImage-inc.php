<?php
include "../classes/changeImage-contr.classes.php";
    $email = $_POST["email"];
    $profilePic = $_POST["profile_pic"];

    if(isset($_POST["action"])){
        $profile = new ChangePicContr($email, $profilePic);
        if($profile->changePicC()){
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