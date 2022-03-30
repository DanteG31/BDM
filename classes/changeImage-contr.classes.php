<?php 
include ("../classes/changeImage.classes.php");
class ChangePicContr extends ChangePic{
    private $email;
    private $profilePic;

    public function __construct($email, $profilePic){
        $this->email = $email;
        $this->profilePic = $profilePic;
    }

    public function changePicC(){
       return $this->changePic($this->email, $this->profilePic);
    }
}
?>