<html>
<body bgcolor="#C3FDB8">
<form name='register' action='insert.php'  method='post'> 
<h2 align="center"><font color="green"><strong>Please register your account with us to take the benefits...</strong></h2><h3 align="center"><strong>Register Account:</strong></h2>
<input type='hidden' name='submitted' id='submitted' >
<table align=center border=2 cellpadding='2' width=30% >

<tr><td><label for='username' ><font color="green">User Name:</font></label>
<input type='text' name='username' id='username' required type="required" placeholder="Username" maxlength="50" size=30 /></td></tr>

<tr><td><label for='password' ><font color="green">Password:</font> </label>
<input type='password' name='password' id='password' required type="required" placeholder="Password" maxlength="50" size=30 /></td></tr>

<tr><td><label for='email' ><font color="green"> Email:</font></label>
<input type='Email' name='email' id='email' required type="required" placeholder="Email" maxlength="50" size=30/></td></tr>


<tr><td><label for='phone' ><font color="green">Phone No:</font></label>
<input type='text' name='phone' id='phone' required type="required" placeholder="Phone" maxlength="50" size=30 /></td></tr>
  <tr>
            <td width="120" height="30"><label for="gender"><font color="green">Gender:</label></td>
            <td height="30">
			  <select name="gender" id="gender" required type="required"><font color="green">
					<option value="">Please select your gender</option>
					<option value="Male">Male</option>
					<option value="Felame">Female</option></font>
			  </select></tr>

<tr><td><label for='bdate' ><font color="green">Date of Birth:</font></label>
<input type='text' name='bdate' id='bdate' required type="required" placeholder="Date of Birth" maxlength="50" size=30/></td></tr>
<tr><td><label for='address' ><font color="green">Address:</font> </label>
<input type='address' name='address' id='address' required type="required" placeholder="Address" maxlength="50" size=30 /></td></tr>

<tr><td><label for='city' ><font color="green">City:</font> </label>
<input type='city' name='city' id='city' required type="required" placeholder="city" maxlength="50" size=30 /></td></tr>

<tr><td><label for='state' ><font color="green">State:</font> </label>
<input type='state' name='state' id='state' required type="required" placeholder="State" maxlength="50" size=30 /></td></tr>

<tr><td><label for='zipcode' ><font color="green">Zipcode:</font> </label>
<input type='zipcode' name='zipcode' id='zipcode' required type="required" placeholder="Zipcode" maxlength="50" size=30 /></td></tr>

<tr><td><label for='country' ><font color="green">Country:</font> </label>
<input type='country' name='country' id='country' required type="required" placeholder="Country" maxlength="50" size=30 /></td></tr>
  <tr>
            <td width="120" height="30"><label for="type"><font color="green">Account Type:</label></td>
            <td height="30">
			  <select name="type" id="type" required type="required">
					<option value="">Please select Account Type</option>
					<option value="CA">Checking Account</option>
					<option value="SA">Saving Account</option>
					<option value="FDA">Fixed deposit Account</option>
			  </select></tr>

<tr><td><label for='pin' ><font color="green">Account pin:</font> </label>
<input type='pin' name='pin' id='pin' required type="required" placeholder="account pin" maxlength="50" size=30 /></td></tr>
<br/>
<tr><td><input type='submit' name='Submit' value='Register' /></td></tr>

</table>
</form>
<h2 align="center"><a href="home.php"><font color="green">Back to Home</font></a></h2>
</body><br/><br/><br/><br/><br/>
<?php require_once('footer.php'); ?>	

</html>

