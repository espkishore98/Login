<?php
$userid=$_POST['userid'];//username
$password=$_POST['password'];//password 
session_start();

$con=mysqli_connect("localhost","root","","csea");//mysqli("localhost","username of database","password of database","database name")
$result=mysqli_query($con,"SELECT * FROM `csea` WHERE `userid`='$userid' && `password`='$password'");
$count=mysqli_num_rows($result);
if($count==1)
{
	echo "Login success";
	$_SESSION['esp']=1;
	header("refresh:2;url=book creepers.php");

}
else
{
	echo "please enter proper details ";
	header("refresh:2;url=index.php");// it takes 2 sec to go index page
}


?>