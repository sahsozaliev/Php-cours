<?php
require_once(dirname(__FILE__).'/12_homework_1_Person.php');

$name = ('Иван Тодоров');
$age = (33);
$mail = (horr@.abv.bg);

$name->greet();
$age->greet();
$mail->greet();

echo "<br />";
echo $name->getName();
echo  "<br/>";
echo $age->getAge();
echo  "<br/>";
echo $mail->getMail();
?>