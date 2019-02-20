<?php
//error_reporting(0);
//login part
session_start();
$host="localhost";
$user="root";
$password="";
$db="dresscode";


$con=mysqli_connect($host,$user,$password,$db);
  if(isset($_POST['submit']))
  {

    $studentid=$_POST['Student_Id'];
    $name=$_POST['First_Name'];
    $mobile=$_POST['Mobile_Number'];
    $gender=$_POST['Gender'];
    $shirtcolour=$_POST['Shirt_Colour'];
    $shirtsize=$_POST['Shirt_Size'];
    $shirtquantity=$_POST['Shirt_Quantity'];
    $pantcolour=$_POST['Pant_Colour'];
    $pantsize=$_POST['Pant_Size'];
    $pantquantity=$_POST['Pant_Quantity'];
    $badgecolour=$_POST['Badge_Colour'];
    $badgequantity=$_POST['Badge_Quantity'];
    $shoecolour=$_POST['Shoe_Colour'];
    $shoesize=$_POST['Shoe_Size'];
    $shoequantity=$_POST['Shoe_Quantity'];
    $dob=$_POST['Birthday_Day'].'/'.$_POST['Birthday_Month'].'/'.$_POST['Birthday_Year'];


     $sql="INSERT INTO studentdetails (studentid,name,dob,mobile,gender,user) VALUES ('$studentid','$name','$dob','$mobile','$gender','$_SESSION[username]')";
    if(!mysqli_query($con,$sql))
    {
      echo "error:" .mysqli_error($con);
    }


    echo "<script> alert('Dtabase has been updated'); window.location.assign('form1.php'); </script>";

    $sql="INSERT INTO shirt (studentid,shirtcolour,shirtsize,shirtquantity) VALUES ('$studentid','$shirtcolour','$shirtsize','$shirtquantity')";

    if(!mysqli_query($con,$sql))
    {
      echo "error:" .mysqli_error($con);
    }
    echo "<script> alert('Dtabase has been updated'); window.location.assign('form1.php'); </script>";

    $sql="INSERT INTO pant (studentid,pantcolour,pantsize,pantquantity) VALUES ('$studentid','$pantcolour','$pantsize','$pantquantity')";

    if(!mysqli_query($con,$sql))
    {
      echo "error:" .mysqli_error($con);
    }
    echo "<script> alert('Dtabase has been updated'); window.location.assign('form1.php'); </script>";

    $sql="INSERT INTO badge (studentid,badgecolour,badgequantity) VALUES ('$studentid','$badgecolour','$badgequantity')";

    if(!mysqli_query($con,$sql))
    {
      echo "error:" .mysqli_error($con);
    }
    echo "<script> alert('Dtabase has been updated'); window.location.assign('form1.php'); </script>";

    $sql="INSERT INTO shoes (studentid,shoecolour,shoesize,shoequantity) VALUES ('$studentid','$shoecolour','$shoesize','$shoequantity')";
  
    if(!mysqli_query($con,$sql))
    {
      echo "error:" .mysqli_error($con);
    }
    echo "<script> alert('Dtabase has been updated'); window.location.assign('form1.php'); </script>";
    //header("Location: Profile.php");

}


?>