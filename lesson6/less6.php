<?php
//Наследование. Конструкторы в наследовании. Свойство protected.
//Наследование - это определение класса, который имеет те же свойства и методы что и базовый (родительский класс), а так же дополнительные свойства и методы
//Унаследованный класс называют дочерним классом, он расширяет родительский класс дополнительным функционалом и свойстваими
//Спецификатор Protected означает что свойства и метода класса могут использоваться только внутри класса и внутри его дочернего класса
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
        $information = "{$this->name}"."<br>"."{$this->password}"."<br>"."{$this->email}"."<br>"."{$this->city}";
        return $information;
    }

}

$user1 = new User ("Alex", "123456", "alexey@gmail.com", "Kiev");
print $user1->getInfo();
echo "<br>";
echo "<br>";

//Наследование реализовано при помощи ключевого слова extends
//Есть класс User, необходимо создать классы админа и модератора
//класс Moderator наследует класс User
//Получеие из родительского класса функции $information = parent::getInfo();
//Определение Final говорит о том что метод не будет использован в дочерних классах
class Moderator extends User {
    public $info;
    public $rights;

    function __construct($name, $password, $email, $city, $info, $rights) {
        parent::__construct($name, $password, $email, $city);
        $this -> info = $info;
        $this -> rights = $rights;
    }
    final function getInfo () {
        $information = parent::getInfo();
        $information .= "{$this->info}"."<br>"."{$this->rights}";
        return $information;
    }
}
$moder = new Moderator("Andrey", "654321", "andrey@gmail.com", "Odessa", "Moderator", "true");
echo $moder->getInfo();





/*
class Test {
    protected $info;
}
class Test2 extends Test {
    public function test() {
        $this->info = "info";
        echo $this ->info;

    }
}
$test2 = new Test2();
$test2->test();*/
?>