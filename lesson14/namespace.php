<?php
require_once 'less14.php';
$obj = new \Home\User("Alexey ", "123456789 ", "alexey123@gmail.com ", "Odessa");
echo $obj->getInfo();
//Импорт namespace
use newClass\Home as Home;
?>