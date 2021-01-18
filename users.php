<?php
class Users{
  public $name;
  public $lastname;
  public $age;
  public $email;
  function __construct($_name, $_lastname, $_age, $_email){
    $this->name = $_name;
    $this->lastname = $_lastname;
    $this->age = $_age;
    $this->email = $_email;
  }
  public function getName(){
    return $this->name;
  }
  public function getLastname(){
    return $this->lastname;
  }
  public function getAge(){
    return $this->age;
  }
  public function getEmail(){
    return $this->email;
  }

}



//$user1 = new Users("Francesco","Bello","20","francesco@icloud.com");
//echo $user1->getName() . "<br>";
//echo $user1-> getLastname(). "<br>";
//echo $user1->getAge(). "<br>";
//echo $user1->getEmail(). "<br>";



 ?>
