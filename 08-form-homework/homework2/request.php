<!DOCTYPE html>
<html>
<head lang="en">
        
</head>
 
 <style>
	form{
		font-size: 25px;
		border: 5px solid red;
		padding: 10px;
		margin:20px;
	}
	form > div {
		margin-bottom: 8px;
	}
</style>
<form action="08_Form_Homework_02 _2.php?submit=true&test=2" method="POST">
    Потребителско име: <input type="text" name="name" />
    <br />
    Парола:
    <input type="password" name="pass" />
	<br/>
	Повторете паролата:
	<input type="password" name="pass" /> 
	<br />
	Таен въпрос: 
	<input type="password" name="pass" />
	<br />
	Таен отговор: 
	<input type="password" name="pass" />
	<br />
	 Email: <input type="text" name="mail" />
    <br />
    Име:
	<input type="password" name="pass" />
	<br />
	Фамилия:
	<input type="password" name="pass" />
	 
    <br />
    Пол:
                Мъж <input type="radio" name="gender" value="Male" /> 
                Жена <input type="radio" name="gender" value="Famale" /> 
				Не искам да кажа <input type="radio" name="gender" value="blank" checked />  
    <br />
    
	
	Рожденна дата:
	Ден:
    <select>
       <option value=> 1</option>
       <option value=FR> 2</option>
       <option value=RU> 3</option>
       <option value=RU> 4</option>
       <option value=RU> 5</option>
       <option value=RU> 6</option>
       <option value=RU> 7</option>
       <option value=RU> 8</option>
       <option value=RU> 9</option>
       <option value=RU> 10</option>
       <option value=RU> 11</option>
       <option value=RU> 12</option>
       <option value=RU> Russland</option>
       <option value=RU> Russland</option>
       <option value=RU> Russland</option>
       <option value=RU> Russland</option>
       <option value=RU> Russland</option>
       <option value=RU> Russland</option>
       <option value=RU> Russland</option>
       <option value=RU> Russland</option>
       <option value=RU> Russland</option>
       <option value=RU> Russland</option>
       <option value=RU> Russland</option>
       <option value=RU> Russland</option>
       <option value=RU> Russland</option>
       <option value=RU> Russland</option>
       <option value=RU> Russland</option>
       <option value=RU> Russland</option>
       <option value=RU> Russland</option>
       <option value=RU> Russland</option>
       <option value=RU> Russland</option>
       <option value=RU> Russland</option>
       <option value=RU> Russland</option>
       <option value=RU> Russland</option>
	</select>
	<br />
	Месец:
	<select>
       <option value=> 1</option>
       <option value=FR> 2</option>
       <option value=RU> 3</option>
	</select>
	<br />
	Година: 
	<select>
       <option value=> 1255</option>
       <option value=FR> France</option>
       <option value=RU> Russland</option>
	</select>
	<br />
	
	
	<input type="submit" value="Изпрати"/>
	<br />
</form>	

</body>
</html>