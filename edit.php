<?php 

 $connect = mysqli_connect("localhost", "root", "", "dresscode");  

 $id = $_POST["id"];  
 $text = $_POST["text"];  

 $column_name = $_POST["column_name"];

 $table_name = $_POST["table_name"];  
 $sql = "UPDATE " . $table_name . " SET ".$column_name."='".$text."' WHERE studentid='".$id."'";  

 if(mysqli_query($connect, $sql))  
 {  
    echo $column_name.' ';  
 	echo 'Updated the database successfully';
 }  
 ?>





