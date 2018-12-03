<?php
//Конструкторы и деструкторы. Магические методы.
//Вызывают метод при создании каждого нового свойства объекта
//Конструктор помогает избавиться от дублирования кода
//Как аргументы в конструкторе используются переменные, которые будут использоваться
class User {
    public $name;
    public $password;
    public $email;
    public $city;

    function  __construct($name, $password, $email, $city) {
        $this -> name = $name;
        $this -> password = $password;
        $this -> email = $email;
        $this -> city = $city;
    }
    function getInfo () {
        return "{$this->name}"."<br>"."{$this->password}"."<br>"."{$this->email}"."<br>"."{$this->city}";
    }
}

$user1 = new User ("Alex", "123456", "alexey@gmail.com", "Kiev");
//Обращаемся при помощи экземпляра класса $user1 к функции getInfo
print $user1->getInfo();
//Диструктор - разрушает и удаляет объекты
?>