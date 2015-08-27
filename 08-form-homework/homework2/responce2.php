<?php
echo "<pre>";
var_dump($_GET);
echo "</pre>";

echo "GET <pre>",print_r ($_GET,true),"</pre>\n<br/>";


function isValid ($name)
{


	if (mb_strlen ($name,"UTF-8")> 3,&& mb_strlen($password, "UTF-8") > 3 && $password == $repass)
	{
		return true;
	}
	return false;
}

if (count($_POST) >4)
{
	$name = $_POST["name"];
    $password = $_POST ["password"]
    $repass = $_POST ["repass"]
    $question = $_POST ["question"]


	<textarea><?=$name?></textarea>
	<?php

	if (isValid($name))
	{
		echo "Успешна регистрация";
	}
	else
	{
		echo "проблем с паролата";
	}
}

?>
