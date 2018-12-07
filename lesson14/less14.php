<?php
//Пространства имен/Name Space
//Позволяет организовать код проекта как файловую систему
//Изоляция классов констант и т.д.
//ключевое слово namespace и после, название
//namespace объявляется в самом верху кода, даже перед HTML кодом
//Можно записывать как namespace Home; но лучше заключить всё ниже написанное в {}
//Например namespace Home {
//}
namespace Home;
class User
{
    public $name;
    public $password;
    public $email;
    public $city;


    function __construct($name, $password, $email, $city)
    {
        $this->name = $name;
        $this->password = $password;
        $this->email = $email;
        $this->city = $city;
    }

    function getInfo()
    {

        $information = "{$this->name}" . "{$this->password}" . "{$this->email}" . "{$this->city}";

        return $information;

    }
}

$user1 = new User("Alex ", "123456 ", "alexey@gmail.com ", "Kiev ");
echo $user1->getInfo();

namespace newClass\Home2 {

}
?>