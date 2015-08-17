<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>HTML Форми</title>
</head>
 
<form action="data.php?submit=true&test=2" method="POST">
    Име: <input type="text" name="name" />
    <br />
    Email: <input type="text" name="mail" />
    <br />
     Парола:
     <input type="password" name="pass" />
    <br />
    Пол:
                <input type="radio" name="gender" value="Male" /> Мъж
                <input type="radio" name="gender" value="Famale" /> Жена
        <br />
    
	Избор на стана:
	<select name = countries[] multiple = Yes>
       <option value=US> USA</option>
       <option value=FR> France</option>
       <option value=RU> Russland</option>
	</select>
	
	Изпрати ми бюлетин: 
	<input type="checkbox" name="subscribe" />
    <br />
	<input type="submit" value="Изпрати"/>
	
</form>	

</body>
</html>