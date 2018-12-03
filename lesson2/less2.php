<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

// Область видимости
// Public - все свойства класса и объектов могут быть использованы вне скрипта
// Private - свойства методов объекта могут быть использованы только внутри этого же класса (закрыт от внешнего кода)
// Protected - все свойства класса могут быть использованы внутри класса или внутри дочернего класса
class Shop {
    Private $name;

    public function naming() {
        $this -> name = 'Adidas';
        echo $this->name;
    }
}

$product = new Shop;
//$product -> name 'Nike';
$product -> naming ();

?>
