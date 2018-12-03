<?php

class User {
    public $name = 'Имя';
    public $password = 'Пароль';
    public $email = 'Email';
    public $city = 'Город';
}
// Экземпляр клаасса Admin
$admin = new User ();
//echo $admin->name;

//новый экземпляр класса
$user1 = new User();

$admin -> name ='Alexey'.'<br>';
$user1 -> name = 'Andrey';

echo $admin -> name;
echo $user1 -> name;

$user1 -> surename = 'Ivanov';
echo ' ';
echo $user1 -> surename;
?>
