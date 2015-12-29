<?php

    $pin = $_POST['pin'];
	$password  = $_POST['password'];

	$cn = mysql_connect('localhost', 'root', '');

	mysql_select_db('bank');

	$query = sprintf("
				SELECT
					*
				FROM
					registration
				WHERE
					pin = '%s' AND password = '%s'",
						$pin,$password
					);

	$result = mysql_query($query, $cn);

	$num_row = mysql_num_rows($result);

	session_start();

	if( $num_row > 0 )
	{
		$_SESSION['logged_in']=1;

		header('location:yes.php');
	}
	else
	{
		$_SESSION['logged_in']=0;
		header('location:no.php');
	}


 ?>