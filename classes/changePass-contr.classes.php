<?php 
include ("../classes/changePass.classes.php");
class ChangePassContr extends ChangePass{
    private $email;
    private $pwd;

    public function __construct($email, $pwd){
        $this->email = $email;
        $this->pwd = $pwd;
    }

    public function changePassC(){
       return $this->changePass($this->email, $this->pwd);
    }
}
?>