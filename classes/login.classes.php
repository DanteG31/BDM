<?php
include "../classes/dbh.classes.php";
class Login extends Dbh{

    protected function loginUser($email, $password){
        $stmt = $this->connect()->prepare('CALL CHECK_USER(?);');
        if(!$stmt->execute(array($email))){
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }
        $check;
        if($stmt->rowCount() > 0){
            $pwdHashed = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $checkPwd = password_verify($password,$pwdHashed[0]["PASS"]);
            $alias = $pwdHashed[0]["USER_ALIAS"];
            $type = $pwdHashed[0]["USER_TYPE_ID"];

            if($checkPwd){
                session_start();
                $stmt = null;
                $_SESSION["email"] = $email;
                $_SESSION["alias"] = $alias;
                $_SESSION["type"] = $type;
                $_SESSION["pwd"] = $pwdHashed[0]["PASS"];
                $check = "true";
            }
            else{
                $check = "false";
                $stmt = null;
            }
        }else{
            $stmt = null;
            $check = "NE";
        }
        $stmt = null;
        return $check;
    }

}
?>