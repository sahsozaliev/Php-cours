<?php

$UserInfo = array (
  "name" => "Sasho",
  "username" => "sahsozaliev"
  ); 
  
  echo "<p> username = ".$UserInfo ['username']. "<p>"; 
  echo "<p> Name = ".$UserInfo ['name'].  "<p>"; 

  
 
  
  
$UserInfo = array (
  "name" => "Sasho",
  "username" => "sahsozaliev"
  ); 
  
  foreach ($UserInfo as $key => $value)
  {
	echo $key ."<p> username = ". $value . "<p>"; 
  }
  

?> 

 die(); 