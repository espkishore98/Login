<?php
$userid=$_POST['userid'];//username
$Password=$_POST['Password'];
session_start();                                

$con=mysqli_connect("localhost","root","","csea");//mysqli("localhost","username of database","password of database","database name")
$result=mysqli_query($con,"SELECT * FROM `attendence` WHERE `userid`='$userid' ");
?>
<html>  
      <head>  
           
      </head>  
      <body>  
           <br />  
            
                     <table class="table table-striped" align="center" border="1px solid black">  
                          <tr>  
                               <th>userid</th>  
                               <th>attendence</th>  
                                 
                          </tr>  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                          ?>  
                          <tr>  
                               <td><?php echo $row["userid"]; ?></td>  
                               <td><?php echo $row["attendence"];?></td>   
                          </tr>  
                          <?php  
                          }  
                          ?>  
                     </table>  
                  
           
           <br />
            
      </body>  
 </html>  
 