<?php
echo "<pre>";
var_dump($_GET);
echo "</pre>";


echo "POST <pre>",print_r ($_POST,true),"</pre>\n<br/>";

   

function isValid ($name) 
{   	
	if (mb_strlen ($name,"UTF-8")> 3)
	{
		return true;
	}
	return false;
}

if (count($_POST) >0)
{
	$name = $_POST["name"];
	$name = strip_tags($name,'<br>');
	$name = trim($name);
	$name = htmlspecialchars($name);
	?>
	
	<textarea><?=$name?></textarea>
	<?php
	
	if (isValid($name))
	{
		echo "Успешна смяна";
	}
	else 
	{
		echo "Грешка";
	}
}

?>