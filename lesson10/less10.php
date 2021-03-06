<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
//Абстрактные классы
//Абстракный класс - класс, для которого не могут быть созданы его экземпляры
//Ключевое слово Abstract
//Абстрактныеклассы дают возможность более точно моделировать сущьности класса

abstract class User {
    //Внутри абстрактного класса можно создавать свойства
    public $name;
    public $status;
    //Внутри абстрактного класса можно создавать методы
    //Определение метода как абстрактного
    abstract public function getStatus() {

    }
}
//При попытке создать экземпляр объекта класса получим ошибку
$user1 = new User;
//Определение класса Admin как дочерний от класса User для того чтобы расширить класс User с пока не известным экземпляром "User"
//В дочернем классе абстрактного класса можно создавать виртуальный\абстрактный метод без тела самого метода
//Это означает что этот медод обязательно должен быть реализован в дочернем классе
class Admin extends User {
    public function getStatus() {
        echo "Admin";
    }
}
//В дочернем классе теперь можно создавать экземпляры класса
$user1 = new Admin;
$user1->getStatus();
//При создании экземпляра класса User в дочернем классе Admin мы так же получим ошибку


?>