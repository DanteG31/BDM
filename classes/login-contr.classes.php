<?php 
include "../classes/login.classes.php";
class LoginContr extends Login{

   private $email;
   private $pwd;

   public function __construct($email,$pwd){
        $this->email = $email;
        $this->pwd = $pwd;
   }

   public function loginUserC(){
       return $this->loginUser($this->email,$this->pwd);
   }

}
?>