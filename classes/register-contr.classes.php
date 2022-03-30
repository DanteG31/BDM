<?php
include "../classes/register.classes.php";
class RegisterContr extends Register{

    private $email;
    private $pwd;
    private $confirm;
    private $name;
    private $surname;
    private $profile_pic;
    private $phone;
    private $user_alias;

    public function __construct($email, $pwd, $name, $confirm, $surname, $profile_pic, $phone, $user_alias){
        $this->email = $email;
        $this->pwd = $pwd;
        $this->name = $name;
        $this->surname = $surname;
        $this->profile_pic = $profile_pic;
        $this->phone = $phone;
        $this->user_alias = $user_alias;
        $this->confirm = $confirm;
    }

    public function registerUser(){
        
        $this->register($this->email, $this->pwd, $this->name, $this->surname, $this->profile_pic, $this->phone, $this->user_alias);
    }

    public function registerReporter(){
        
        $this->registerRep($this->email, $this->pwd, $this->name, $this->surname, $this->profile_pic, $this->phone, $this->user_alias);
    }

    public function registerReporterNP(){
        
        $this->registerRepNP($this->email, $this->name, $this->surname, $this->profile_pic, $this->phone, $this->user_alias);
    }

    public function checkUserEmail(){
        return $this->checkEmail($this->email);
    }

    private function matchPwd(){
        $result;
        if($this->pwd !== $this->confirm){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }

    private function emptyInputs(){
        $result;
        if( empty($this->email) || empty($this->pwd) || empty($this->confirm) ){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }
}