<html>
<head>
</head>
<style>
body {background-image: url(mm.jpg);
}
</style>
<?php

	$cn = mysql_connect('localhost', 'root', '');

	mysql_select_db('mydb');

$sql="INSERT INTO student (Name,,,balance)
VALUES
('$_POST[Name]','$_POST[]','$_POST[]','$_POST[]')";


if (!mysql_query($sql,$cn))
  {
  die('Error: ' . mysql_error());
  }
 
echo "<h1>INSERTION COMPLETE</h1>";
mysql_close($cn);
?>
<a href="home.php"><font size="5px">HOME</font></a><br>
<a href="register1.php"><font size="5px">INSERT AGAIN</font></a>
<?php require_once('footer.php'); ?>
</html>

 

  
 