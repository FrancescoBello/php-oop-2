<?php
  require "users.php";
  class SingleUser extends Users{
  }

  $single1 = new SingleUser("Francesco","Bello","20","francesco@icloud.com");
  echo $single1->getName() . "<br>";
  echo $single1-> getLastname(). "<br>";
  echo $single1->getAge(). "<br>";
  echo $single1->getEmail(). "<br>";

  $single2 = new Users("Luca", "Bianchi", "33", "luca@gmail.com");
  echo $single2->getName() . "<br>";
  echo $single2-> getLastname(). "<br>";
  echo $single2->getAge(). "<br>";
  echo $single2->getEmail(). "<br>";

  $single3 = new Users("Paolo", "Esposito", "45", "paolo@libero.it");
  echo $single3->getName() . "<br>";
  echo $single3-> getLastname(). "<br>";
  echo $single3->getAge(). "<br>";
  echo $single3->getEmail(). "<br>";


?>
