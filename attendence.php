<?php
$userid=$_POST['userid'];//username
$password=$_POST['password'];//password 
session_start();

$con=mysqli_connect("localhost","root","","csea");//mysqli("localhost","username of database","password of database","database name")
$result=mysqli_query($con,"SELECT * FROM `csea` WHERE `userid`='$userid' && `password`='$password'");
$count=mysqli_num_rows($result);
if($count==1 )
{
	
 echo "<br>";
	echo "\n";

	$_SESSION['esp']=1;
	while($row = mysqli_fetch_array($result))  
                          {  
                          	  echo "userid:";
                          	  
                             echo $row["userid"]; 
                               echo "<br>";
                               echo "\n";
                              
                          	  
                                echo "attendence:";
                          
                               echo $row["attendence"];
                           
}
}
else
{
	echo "please enter proper details ";
	header("refresh:2;url=index.php");// it takes 2 sec to go index page
}


?>
<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
<button style=" float: right;"><a href="index.php" >logout</a></button>

</body>
</html>