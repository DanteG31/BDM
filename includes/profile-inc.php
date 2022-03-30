<?php
include "./classes/profile-contr.classes.php";
    echo $_GET["email"];
    if(isset($_GET["email"])){
        $email = $_GET["email"];

        $profile = new ProfileContr($email);
        $data = $profile->getProfileC($email);
    }
?>