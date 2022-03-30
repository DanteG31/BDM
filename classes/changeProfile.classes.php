<?php
include "../classes/dbh.classes.php";
class ChangeProfile extends Dbh{

    protected function changeProfile($email, $name, $surname, $phone, $alias){
        $stmt = $this->connect()->prepare('CALL UPDATE_USER(?,?,?,?,?);');
        $check;
        if(!$stmt->execute(array($email, $name, $surname, $phone, $alias))){
            $stmt = null;
            $check = false;
        }
        else{
            $stmt = null;
            $check = true;
            $_SESSION["alias"] = $alias;
        }
        return $check;
    }

}
?>