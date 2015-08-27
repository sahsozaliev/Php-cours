<?php
class Person

{
    public static $name = 3;
    public $age;
    private $mail;


    public function __construct($name,$age,$mail)
    {
         $this->name = $name;
         $this->age = $age;
         $this->mail = $mail;
    }

       public function getName ()
    {
        return $this->name;
    }

    public function  getAge()
    {
        return $this->age;
    }

    public static function getPeopleCount(){
        return self::$people;
    }

}
