<?php
session_start();
if(isset($_SESSION['esp']))
{
?>
<!DOCTYPE html>
<html>
<head>
	<title>BOOK CREPPERS</title>
	<style>
.cse {
    width: 100%;
    border: 1px solid gray;
}

header {
    padding: 1em;
    color: white;
    width: 100%;
    background-color: black;
    clear: left;
    text-align: center;
}
footer{
    padding: 1em;
    color: white;
     position:absolute;
    bottom:0;
    width:100%;
    height:10px;  
    background-color: black;
    clear: left;
    text-align: center;
}
.topnav {
  overflow: hidden;
  background-color: orange;
}

.topnav a {
  float: left;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: yellow;
  color: black;
}
.topnav a.active {
  background-color: #4CAF50;
  color: white;
}
.topnav a.dropbtn {
    background-color: yellow;
	float:right;
}

article {

    margin-left:170px;
position: absolute;
width :100%;
    border-left:1px solid gray;
    padding: 1em;
    overflow: hidden;
  }
  
  
</style>
</head>

<body>
<div class="topnav">
  <header><h1>Book creepers</h1></header>
  <h3 style="color: red">3 year</h3>
  <a href="pdfs.html">Notes</a>
  <a href="https://drive.google.com/file/d/11CXPbUnFDcEWHwml9tnvIRYLZD2M6iTe/view?usp=sharing">mid1</a>
  <a href="index1.php">attendence</a>
  <a href=#>semister1</a>
  <a href=#>semister2</a>
  <form   action="index.php", method="POST" style="float: right;" > 
    <input  type="submit" value="logout">
  </form>
</div>
<article><p>This page is meant for students who are pursing their b.tech and try to achieve a good marks</p> 
	<p> all the best</p></article>
 
 
 
	<footer>copyrights &copy  Bookcreepers</footer>

</body>
</html>
<?php
}
else
{
  echo "please fill proper details";
  header("refresh:2;url=index.php");
}

?>