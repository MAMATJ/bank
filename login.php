<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<script type="text/JavaScript">
var picCount=0; 
var picArray=["b.jpg","1.jpg","File.png","2.png","5.jpg","4.jpg","pigy.jpg"]

function nextPic()
{ 

picCount=(picCount+1<picArray.length)? picCount+1:0;
var build='<img border="0" src="'+picArray[picCount]+'"width="550" height="350">';
document.getElementById("div2").innerHTML=build;
setTimeout('nextPic()',6000)
}
</script>
</head>
<style>
#div1{
      
      width: "100%";
      height: 1500px;
      background-color:white;
  }
#div2{ 
      position:absolute;
      top:10px;
       border: 0.5em #C3FDB8 solid;
        border: 2px green solid;
 }
</style>
<center>
<body onload="setTimeout('nextPic()',2000)"><div id="div1">
<div id="div2">
<img border="1" src="b.jpg" width="550" height="350">
</div><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/></br><br/></br></br>
<table width="100%" align="center"  cellpadding="3"  bgcolor="#C3FDB8">
<tr>
<td align="center"><a href="home.php"><font size="4px" color="green">Home</font></a></td>
<td align="center"><a href="about.php"><font size="4px" color="green">About us</font></a></td>
<td align="center"><a href="form.php"><font size="4px" color="green">Admin</font></a></td>
<td align="center"><a href="achieve.php"><font size="4px" color="green">Achievement</font></a></td>
<td align="center"><a href="glance.php"><font size="4px" color="green">At Glance</font></a></td>
<td align="center"><a href="innov.php"><font size="4px" color="green">Innovation</font></a></td>
<td align="center"><a href="contact.php"><font size="4px" color="green">Contact us</font></a></td>
<td align="center"><a href="service.php"><font size="4px" color="green">Product&service</font></a></td>
<td align="center"><a href="register.php"><font size="4px" color="green">Registration</font></a></td>
</tr>
</table><br/>
<table  width="100%" border="1" cellspacing="0" cellpadding="0" bgcolor="#C3FDB8" >
      <tr>
         <td weidth="250" height="100" align="left" >

<table border="5pix" align="left" cellpadding='20'width="320px" height="100px">
<h1 align="left"><font color="green">Log In:</font></h1>
<form action="log.php" method="post">
<tr><td><font color="green">Account pin</font>:<input type="password" name="pin" required type="required" placeholder="Account pin" value=""><br/></td></tr>
<tr><td><font color="green">Password</font>:<input type="password" required type="required" placeholder="password" name="password" value=""><br/></td></tr>
   <tr><td><center><input type="submit" value="Login"></center></td></tr></form></center></td></tr>
   </form>
   </table>
</br/></br></br></br></br></br></br></br></br></br></br>
<h2><a href="home.php"><font color="green">Back to Home</font></a></h2><br/><br/><br/><br/>
<br/><br/><br/><br/><br/><br/></div></center>
</td>
</table></div>
   <?php require_once('footer.php'); ?></body>

   </html>
   



