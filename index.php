<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title >DVR STUDENT LOGIN</title>
</head>
<body style="text-align: center;" background="dvr.jpg " >
<div class="dvrcetlogo" style= "background-color:darklategray" align="center">

<b><HEADER style="color:#669999"><font size="8" > DVRCET</font></HEADER></b>
<img  src="Dvrlogo1.jpg">
</div>
<form  method="POST" action="login.php" >
<table width="200" border="1px" align="center" style="background-color:#336699;"  >
<tr ><td> <p style="color: white">Userid</p> </td>
<td> <input type="text" name="userid"></td></tr>
<tr><td><p style="color:white"> Password </p></td>
<td><input type="password" name="password"></td></tr>
<tr> <td><input type="submit" value="Login"></td></tr>
</table>
</form>
</body>
</html>

<?php
session_destroy();
?>
