<?php
include "./classes/dbh.classes.php";
class Profile extends Dbh{

    protected function getProfile($email){
        $stmt = $this->connect()->prepare('CALL GET_USER(?);');
        if(!$stmt->execute(array($email))){
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }
        $check;
        if($stmt->rowCount() > 0){
            $user = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $check = $user;
            $stmt = null;
        }else{
            $check = "NE";
            $stmt = null;
        }
        return $check;
    }

}
?>