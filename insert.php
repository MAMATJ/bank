<html>
<head>
</head>
<body bgcolor="#C3FDB8">
	<?php

	$cn = mysql_connect('localhost', 'root', '');

	mysql_select_db('bank');
$sql="INSERT INTO registration (username,password,email,phone,gender,bdate,address,city,state,zipcode,country,type,pin)
VALUES
('$_POST[username]','$_POST[password]','$_POST[email]','$_POST[phone]','$_POST[gender]','$_POST[bdate]','$_POST[address]','$_POST[city]','$_POST[state]','$_POST[zipcode]','$_POST[country]','$_POST[type]','$_POST[pin]')";

if (!mysql_query($sql,$cn))
  {
  die('Error: ' . mysql_error());
  }
 
echo "<h1 align=center>REGISTRATION COMPLETE</h1>";
mysql_close($cn);
?><br/>
<h2 align=center><a href="home.php">Back for log in</a><h2>

 
<body/>
<html/>
  
 