<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
//Магические методы get,set,clone
//Clone отвечает за клонирование объектов в php
//Функция Clone будет автоматически вызвана, если она определена в соответствующем классе
//Магические методы всегда начинаются с __
//Метод Clone работает со скопированным объектом, а не с исходным

class User {

    private $name;
    private $city;
    private $id;

    function __construct($name, $city) {
        $this->name = $name;
        $this->city = $city;
    }
    //Функция, где будет задаваться индитификатор
    function setId ($id) {
        $this->id = $id;
    }
    //При помощи функции, в каждом экземпляре индитификатор будет = 0;
    public function __clone() {
        $this->id = 0;
    }
}
//Клонирование экземпляров
$user1 = new User ("Alexey", "Kiev");
$user1->setId(5662);
$user2 = clone $user1;
var_dump($user1);
echo "<br>";
var_dump($user2);
echo "<br>";
echo "<br>";
//магические методы get и set
//если переменная класса закрыта, то обращение к ей возможно только через открытые методы
class GetSet {
    private $number = 1;
    //Функция для работы с магическм методом get
    //В аргументах записываем переменную, к которой удет обращаться функция
    public function __get ($name) {
        echo "You get {$name}";
    }
    //Функция для работы с магическим методом set
    //Указываем имя переменной и значение переменной
    private function __set ($name, $value) {
        echo "You set {$name}";
    }
}
//Создаём экземпляр класса
$obj = new GetSet();
echo $obj->number;
echo "<br>";
echo $obj->number = 689;
?>