<?php 
include "./classes/profile.classes.php";
class ProfileContr extends Profile{
    private $email;
    public function __construct($email){
        $this->email = $email;
    }

    public function getProfileC(){
       return $this->getProfile($this->email);
    }
}
?>