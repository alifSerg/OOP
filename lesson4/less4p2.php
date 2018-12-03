<?php
//Деструкторы
class DestructableClass {
    function __construct() {
        print "Конструктор";
        $this->name = "DestructableClass";
        echo '<br>';
    }

    function __destruct() {
        print "Уничтожение". $this->name;

    }
}
$obj = new DestructableClass ();

?>