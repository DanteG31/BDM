<?php
include "../classes/dbh.classes.php";
class Register extends Dbh{

    protected function checkEmail($email){
        $stmt = $this->connect()->prepare('CALL CHECK_EMAIL(?);');
        if(!$stmt->execute(array($email))){
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }
        $check;
        if($stmt->rowCount() > 0){
            $stmt = null;
            $check = false;
        }else{
            $stmt = null;
            $check = true;
        }
        return $check;
    }

    protected function register($email, $passw, $name, $surname, $profile_pic, $phone, $user_alias){
        $stmt = $this->connect()->prepare('CALL INSERT_USER(?,?,?,?,?,?,?,?)');
        
        $hashPwd = password_hash($passw,PASSWORD_DEFAULT);

        if(!$stmt->execute(array($email,$hashPwd,$name,$surname,$profile_pic,$phone,$user_alias,0))){
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }
        $stmt = null;
    }

    protected function registerRep($email, $passw, $name, $surname, $profile_pic, $phone, $user_alias){
        $stmt = $this->connect()->prepare('CALL INSERT_REPORTER(?,?,?,?,?,?,?,?)');
        
        $hashPwd = password_hash($passw,PASSWORD_DEFAULT);

        if(!$stmt->execute(array($email,$hashPwd,$name,$surname,$profile_pic,$phone,$user_alias,1))){
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }
        $stmt = null;
    }

    protected function registerRepNP($email, $name, $surname, $profile_pic, $phone, $user_alias){
        $stmt = $this->connect()->prepare('CALL INSERT_REPORTER(?,?,?,?,?,?,?,?)');
        
        $hashPwd = password_hash("CHANGEIT",PASSWORD_DEFAULT);

        if(!$stmt->execute(array($email,$hashPwd,$name,$surname,$profile_pic,$phone,$user_alias,1))){
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }
        $stmt = null;
    }
}
?>