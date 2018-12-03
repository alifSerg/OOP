<?php
// Методы классов
// Методы - функции, которые объявляются внутри класса
// Для методов так же задаётся область видимости
class User {
    public $name = 'Имя';
    public $password = 'Пароль';
    public $email = 'Email';
    public $city = 'Город';

//    public function Hello () {
//        echo "Hello {$this->name}";
//    }

    function getInfo () {
        return "{$this->name}"."{$this->surename}";
    }
}
$admin = new User ();
$admin -> name = 'Alexey';
$admin -> surename = 'Ivanov';
//$admin -> Hello ();
echo "Пользователь: {$admin->getInfo()}";

?>