<?php
include "../classes/dbh.classes.php";
class ChangePass extends Dbh{

    protected function changePass($email, $pwd){
        $stmt = $this->connect()->prepare('CALL UPDATE_USER_PASS(?,?);');
        $hashPwd = password_hash($pwd,PASSWORD_DEFAULT);
        $check;
        if(!$stmt->execute(array($email, $hashPwd))){
            $stmt = null;
            $check = false;
        }
        else{
            session_start();
            $stmt = null;
            $check = true;
            $_SESSION["pwd"] = $hashPwd;
        }
        return $check;
    }

}
?>