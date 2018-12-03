<?php
//Переменная $this и Self. Для чего нужны?
//$this - специальная переменная, искользуется для доступа к объекту класса изнутри самого класса
//$this - фактически содержит ссылку на объект класса
//Для каждого экземпляра класса $this будет разной
class User {
    public $name = 'Имя';
    public $password = 'Пароль';
    public $email = 'Email';
    public $city = 'Город';

    public function getName () {
        echo $this->name;
        $this->test();
        echo "<br>";
    }

    public function test () {
        echo 'Test';
    }
}
$user1 = new User();
$user1 -> name = "Alexey";
$user1 -> getName();

$user2 = new User();
$user2 -> name = "Andrey";
$user2 -> getName();

?>