<?php
//Терейты php.
//Объединение общих методов для использования в последующих классах
//Ключевое слово Trait, после которого идёт название трейта
//Для использования тейта в каком-либо классе используется ключевое слово use

trait Hello {
    public function sayHello() {
        echo "Hello ";
    }

}
trait World {
    public function sayWorld() {
        echo "World";
    }
}
class myHelloWorld {
    use Hello, World;
}
//Теперь можно создать экземпляр класса myHelloWorld()
$obj = new myHelloWorld();
$obj->sayHello();
$obj->sayWorld();

?>