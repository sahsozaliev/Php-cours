<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>HTML Форми</title>
</head>
 
 <style>
	form{
		font-size: 19px;
		border: 2px solid red;
		padding: 10px;
		margin:20px;
	}
	
	form > div {
		margin-bottom: 8px;
	}
</style>
<form action="respons.php?submit=true&test=2" method="POST">
    
	
    Име: <input type="text" name="name" />
    <br />
    Стара парола <input type="text" name="oldpoass" />
    <br />
     
	Нова парола:     <input type="password" name="newpass" />
	<br/>
	
    Повторете новата парола <input type="password" name="againnewpass" />
	<br />
	
	Изпрати ми бюлетин: 
	<input type="checkbox" name="subscribe" />
    <br />
	<input type="submit" value="Изпрати"/>
	
</form>	