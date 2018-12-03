<?php
//Интерфейсы в ООП
//Интерфесы - это структуры, которые указывают какие именно константы и методы должен содержать класс, который будет реализовывать интерфейс
//В интерфейсе можно объявить только сами методы
//Ключевое слово interface
//Определяется так же как и класс
//Для интерфейса так же как для абстрактного класса не могут быть заданы экземпляры объектов

interface FirstInterFace {
    public function getName();
}

interface SecondInterFace {
    public function getStatus();
}

interface ThirdInterFace extends FirstInterFace, SecondInterFace {
    public function getStatus();
}
//Для реализации интерфейса используем ключевое слово implements
//Класс имплементирует интерфейс
//В классе обязательно должна быть реализция всех методов, перечисленных в интерфейсе, иначе вернёт ошибку

class Test implements FirstInterFace, SecondInterFace {
    //Задаём свойство класса
    public $name = "Alexey";
    public $status = "Admin";
    //Реализация метода, заданного в интерфейсе, в классе
    public function getName() {
        echo $this->name;
    }

    public function getStatus() {
        echo $this->status;
    }
    //Один класс может реализовывать несколько интерфейсов, для этого после ключевого слова implements записываем названия интерфейсов через запятую

}
//Создаём экземпляр класса
$user1 = new Test;
$user1->getStatus();
$user1->getName();
//Интерфейсы поддерживают наследование, а так же множественное наследование

?>