<?php

$servername = "localhost";
$username = "phpcourseUser";
$password = "SomeHardPassword1";
$dbname = "kindergarder";

$connection = mysqli_connect($servername, $username, $password, $dbname);

if (!$connection) {
	die('Connect Error (' . mysqli_connect_errno() . ') '.mysqli_connect_error() );
} 
			
mysqli_set_charset($connection, "utf8");

$action = "delete";

if ($action=="insert")
{
	$kindergarden = "Test";
	$phone = 123;


	$sql = "INSERT INTO kindergarder (Name, Phone)".
				   "VALUES ('$kindergarden', '$phone')";
			   
	$queryReselt = mysqli_query($connection, $sql);
	
	if ($queryReselt === TRUE) {
		$insertedId =  mysqli_insert_id($connection);
		echo "Успешно въведен резултат с id = " .  $insertedId;
	} else {
		echo "Възникна грешка със заявката: " . $sql . "<br>" . $connection->error;
	}
}
else if ( $action == "select")
{
	$sql = "SELECT * FROM  kindergarder ";
  
	$result = mysqli_query($connection, $sql);
	 
	if (mysqli_affected_rows($connection) > 0) {
	
		while ($row = mysqli_fetch_assoc($result)) {
			$id = $row["KinderGarderID"];
			$name = $row["Name"];
			$phone = $row["Phone"];
			
			echo "$id";
			echo "$name";
			echo "$phone";
			echo "<br />";
		}
	} else {
		echo "Няма Резултати";
	}
}
 else if ($action == "delete")
{
	$id = 12;
	$sql = "DELETE FROM kindergarder.kindergarder ".
		   "WHERE KinderGarderID=$id;";
		   
	$queryResult = mysqli_query($connection, $sql);
	
	if ($queryResult === TRUE) {
		echo "Успешно изтрит резултат с id = " .  $id;
	} else {
		echo "Възникна грешка със заявката: " . $sql . "<br>" . $connection->error;
	}
}
?>