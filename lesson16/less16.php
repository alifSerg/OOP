<?php
//Исключения (Exceptions)
//Исключения это действия, которые не укладываются в работу приложения
//Используют в той части коа где точно может быть ошибка
$file = 'namespace2.php';

//Бросить исключение
try{
    if (!file_exists($file)) {
        //Как параметр выводим сообщение
        throw new Exception('File not found');
    }
}
//Поймать исключение
catch (Exception $e) {
        echo $e->getMessage();
    }
//Наследование класса исключения
class newException extends Exception {

}
?>