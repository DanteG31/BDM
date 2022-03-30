<?php
include "../classes/dbh.classes.php";
class ChangePic extends Dbh{

    protected function changePic($email, $profilePic){
        $stmt = $this->connect()->prepare('CALL UPDATE_USER_PIC(?,?);');
        $check;
        if(!$stmt->execute(array($email, $profilePic))){
            $stmt = null;
            $check = false;
        }
        else{
            $stmt = null;
            $check = true;
        }
        return $check;
    }

}
?>