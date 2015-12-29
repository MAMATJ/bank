
<html>
<head>
	<title>HTML PAGE</title>
</head>
<body bgcolor="#C3FDB8">
	 <table width="100%" align="center" border="1" cellpadding="3"  bgcolor="#C3FDB8">
<tr>
<td align="center"><a href="home.php"><font size="4px" color="green">Home</font></a></td>
<td align="center"><a href="about.php"><font size="4px" color="green">About us</font></a></td>
<td align="center"><a href="achieve.php"><font size="4px" color="green">Achievement</font></a></td>
<td align="center"><a href="innov.php"><font size="4px" color="green">Innovation</font></a></td>
<td align="center"><a href="glance.php"><font size="4px" color="green">At Glance</font></a></td>
<td align="center"><a href="service.php"><font size="4px" color="green">Product&Service</font></a></td>
<td align="center"><a href="contact.php"><font size="4px" color="green">Contact us</font></a></td>
<td align="center"><a href="register.php"><font size="4px" color="green">Registration</font></a></td>
<td align="center"><a href="login.php"><font size="4px" color="green">Login</font></a></td>
</tr>
</table><br/>
<center><img src="pigy.jpg" width="25%" height="34%"></center>
<body><br/>
	<h2 align="center"><font color="green">ADMIN ENTRY</font></h2>

	<form method="post" action="submit.php">
		<table border="5px" align="center" height="23%" width="20%">
			<tr>
				<td><font color="green" size="4px">Admin Name</font></td>
				<td><input type="text" name="user_name" placeholder="Username"></td>
			</tr>
			<tr>
				<td><font color="green" size="4px">Password</font></td>
				<td><input type="password" name="password" placeholder="Password"></td>
			</tr>
			<tr>
				<td><font color="green" size="4px">Click Entry</font></td>
				<td ><input type="submit" value="ENTRY"></td>
			</tr>
		</table>
	</form><br/><br/><br/>

<center><h2><a href="home.php"><font color="green">Back to Home</font></a></h2></center>
</body><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<?php require_once('footer.php'); ?>
</html>