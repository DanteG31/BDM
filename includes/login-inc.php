<?php
include "../classes/login-contr.classes.php";
    if(isset($_POST["action"])){
        $email = $_POST["email"];
        $pwd = $_POST["passw"];

        $login = new LoginContr($email,$pwd);
        echo $login->loginUserC();
    }
?>