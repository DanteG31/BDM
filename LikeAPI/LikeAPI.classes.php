<?php
include "dbhAPI.classes.php";
class LikeApi extends DbhApi{

    protected function reportNotice($category, $initialDate, $finalDate){
        $stmt = $this->connect()->prepare('CALL GET_LIKE_REPORT_NOTICE(?,?,?);');
        $check;
        if($stmt->execute(array($category, $initialDate, $finalDate))){
            $check = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $stmt = null;
        }
        else{
            $stmt = null;
            $check = false;
        }
        return $check;
    }

    protected function reportCategory($category, $initialDate, $finalDate){
        $stmt = $this->connect()->prepare('CALL GET_LIKE_REPORT_CATEGORY(?,?,?);');
        $check;
        if($stmt->execute(array($category, $initialDate, $finalDate))){
            $check = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $stmt = null;
        }
        else{
            $stmt = null;
            $check = false;
        }
        return $check;
    }

}
?>