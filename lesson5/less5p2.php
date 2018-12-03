<?php
//self - используется для обращения к внутреннему содержимому класса, обращение идёт не к переменной
//для обращения self нужно объявить статическую переменную или статический метод класса
// статические свойства определяются на уровне класса, а не объекта (экземпляра)
// работает при помощи оператора :: перед ним ставиться либо имя класса, либо ключевое слово self
class User {
//    public $name = 'Имя';
//    public $password = 'Пароль';
//    public $email = 'Email';
//    public $city = 'Город';

private static $name;

    public static function  setName($name1) {
        self::$name = $name1;
    }
    public static function getName() {
        return self::$name;
    }

}
User::setName('Ivan');
echo User::getName();
?>