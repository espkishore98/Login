<?php
$db= mysqli_connect("localhost","root","","csea");
if (isset($_POST['submit']))
{
	$userid = $_POST['userid'];
	$password = $_POST['password'];
    $p = mysqli_query($db, "INSERT INTO csea(userid,password)VALUES('$userid','$password')");

if($p) {
	echo 'registered  successefully';
    header("refresh:2;url=index.php");
}
}?>

<div class="register" align="center">
<head><h> STUDENT REGISTER</h></head>
</div>
<body background="dvr.jpg">

	<div class="logo" align="center">
<img src="Dvrlogo1.jpg" align="center">
</div>
<form method="POST" align="center">
	<table align="center" width="200" border="1px" style="background-color: orange"><tr><td>
	userid:</tr></td>
<td><input type="text" name="userid"></td><br>
<tr><td>password:</td></tr>
<td><input type="password" name="password"></td><br>
<td><input type="submit" name="submit" value="submit"></td>
</form>
</body>
