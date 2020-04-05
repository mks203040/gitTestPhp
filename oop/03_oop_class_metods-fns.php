<?php

class User {
  public $name = "Имя";
  public $password = "Пароль";
  public $email = "Емайл";
  public $city = "Город";

//  public function Hello() {
//      echo "Hello {$this->name}";
//  }

  function getInfo() {
    return "{$this->name}". "{$this->surname}";
  }

}

$admin = new User();
$admin->name="Alexey ";
$admin->surname="Ivanov";
echo "Пользователь: {$admin->getInfo()}";

//$admin = new User();
//$user1 = new User();

//$admin->name="Alexey";
//$user1->name="Andrey";

//echo "$admin->name";
//echo "$user1->name";

//$user1->surname = "Ivanov";
//echo $user1->surname;

?>
