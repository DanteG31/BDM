<?php 
include ("../classes/changeProfile.classes.php");
class ChangeProfileContr extends ChangeProfile{
    private $email;
    private $name;
    private $surname;
    private $phone;
    private $alias;

    public function __construct($email, $name, $surname, $phone, $alias){
        $this->email = $email;
        $this->name = $name;
        $this->surname = $surname;
        $this->phone = $phone;
        $this->alias = $alias;
    }

    public function changeProfileC(){
       return $this->changeProfile($this->email, $this->name, $this->surname, $this->phone, $this->alias);
    }
}
?>