<!DOCTYPE html>

<?php
//error_reporting(0);
//login part
session_start();
$host="localhost";
$user="root";
$password="";
$db="dresscode";


$con=mysqli_connect($host,$user,$password,$db);


if(isset($_POST['username'])){
    $uname=$_POST['username'];
    $password=$_POST['password'];
    
    $sql="select * from login where email='".$uname."'AND password='".$password."' limit 1";
    
    $result=mysqli_query($con,$sql);
    
    if(mysqli_num_rows($result)==1)
    {
        $_SESSION["username"] = $uname;
      
         $query1=mysqli_query($con,"select email,username,password from login where email='".$_SESSION["username"]."' ");
    {
        $row=mysqli_fetch_assoc($query1);
 
        $_SESSION["email"] = $row["email"];
        $_SESSION["username"] = $row["username"];
        $_SESSION["password"] = $row["password"];
        
        
    }

        echo "<script> window.location.assign('logout.php'); </script>";
        exit();
        
    }
    
    else
    {
         echo "<script>alert('Invalid User Credentials'); window.location.assign('LogIn.php'); </script>";
        exit();
        
    }
    
}

?>


<html>

<head>
  
  <link href="https://fonts.googleapis.com/css?family=Helvatica Neue" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <title>LOG IN</title>

  <style>
  	body {
        background-color:black;
        font-family: 'Helvatica Neue', sans-serif;
    }


.main {
        background-color: white;
        width: 400px;
        height: 400px;
        margin: 7em auto;
        border-radius: 1.5em;
        box-shadow: 0px 11px 35px 2px rgba(0, 0, 0, 0.14);
    }
    
    .sign {
        padding-top: 35px;
        color: black;
        font-family: 'Helvatica Neue', sans-serif;
        font-weight: bold;
        font-size: 25px;
    }
    
    .un {
    width: 76%;
    color: rgb(38, 50, 56);
    font-weight: 700;
    font-size: 14px;
    letter-spacing: 1px;
    background: rgb(255,255,255);
    padding: 10px 20px;
    border-radius: 20px;
    outline: none;
    box-sizing: border-box;
    border: 2px solid grey;
    margin-bottom: 50px;
    margin-left: 46px;
    text-align: center;
    margin-bottom: 27px;
    font-family: 'Helvatica Neue', sans-serif;
    }

    
    
    form.form1 {
        padding-top: 40px;
    }
    
    .pass {
            width: 76%;
    color: rgb(38, 50, 56);
    font-weight: 700;
    font-size: 14px;
    letter-spacing: 1px;
    background: rgb(255,255,255);
    padding: 10px 20px;
    border-radius: 20px;
    outline: none;
    box-sizing: border-box;
    border: 2px solid grey;
    margin-bottom: 50px;
    margin-left: 46px;
    text-align: center;
    margin-bottom: 27px;
    font-family: 'Helvatica Neue', sans-serif;
    }
    
   
    .un:focus, .pass:focus {
        border: 2px solid rgba(0, 0, 0, 0.18) !important;
        
    }
    
    .submit {
      cursor: pointer;
        border-radius: 5em;
        color: #fff;
        background: linear-gradient(to right,black,grey);
        border: 0;
        padding-left: 40px;
        padding-right: 40px;
        padding-bottom: 10px;
        padding-top: 10px;
        font-family: 'Helvatica Neue', sans-serif;
        margin-left: 35%;
        font-size: 15px;
        box-shadow: 0 0 20px 1px rgba(0, 0, 0, 0.04);

    }
    
    .register {
        text-shadow: 0px 0px 3px rgba(117, 117, 117, 0.12);
        color: grey;
        padding-top: 15px;
    }

    
    a {
        text-shadow: 0px 0px 3px rgba(117, 117, 117, 0.12);
        color: black;
        text-decoration: none
    }
  </style>>
</head>

<body>
  <div class="main">
    <p class="sign" align="center">LOG IN</p>
    <form class="form1" method="POST" action="#">
      <input class="un " name="username" type="text" align="center" placeholder="Email">
      <input class="pass" name="password" type="password" align="center" placeholder="Password">
      <button class="submit" align="center" >LOG IN</button>
      <p class="register" align="center"><a href="SignUp.php"><u>Not a user?Sign UP.</u></a></p>
      </form>    
                
    </div>
     
</body>

</html>