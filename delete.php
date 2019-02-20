<?php  

 $connect = mysqli_connect("localhost", "root", "", "dresscode"); 

 $sql = "DELETE FROM studentdetails WHERE studentid = '".$_POST["studentid"]."'";  
 if(mysqli_query($connect, $sql))  
 {  
      echo 'Data Deleted';  
 }
   
 ?>