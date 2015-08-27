<?php
require_once(dirname(__FILE__).'/12_homework_1_Person.php');

$name = new Person ('Иван Тодоров',25);
$age = new Person ('Мария',33);

$ivan->greet();
$maria->greet();

echo "<br />";
echo $maria->getAge();
echo  "<br/>";
echo Person::getPeopleCount();
?>