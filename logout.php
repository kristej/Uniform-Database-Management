<!DOCTYPE html>
<?php

session_start();
$host="localhost";
$user="root";
$password="";
$db="dresscode";


$con=mysqli_connect($host,$user,$password,$db);

if(isset($_GET['submit']))
{   
   $email=$_GET['email'];
   $message=$_GET['message'];

     $query="INSERT INTO feedback VALUES('$email','$message');";
    
    $data=mysqli_query($con,$query);
     
    if($data)
    {
        
     echo "<script> alert('Thankyou!!'); window.location.assign('logout.php'); </script>"; 
        exit();
    }
      
    
   else
    {
       echo "<script>
alert('error');
</script>";
    }
  }


?>

<html lang="en">
<head>
  <title>Logout</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <link rel="stylesheet" href="Styles.css">
   <link rel="stylesheet" href="footer2.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="footer.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
  <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">

<style>
.intro-message {
    position: relative;
    padding-top: 20%;
    padding-bottom: 25%;
}

.intro-divider {
    text-align: center;;
    border-top: 1px solid #f8f8f8;
    border-bottom: 1px solid rgba(0,0,0,0.2);
}

.intro-message > h1 {
    margin: 0;
    text-shadow: 2px 2px 3px rgba(0,0,0,0.6);
    font-size: 5em;
}
.intro-message > h3 {
    text-shadow: 2px 2px 3px rgba(0,0,0,0.6);
}
</style>
</head>

<body>

<nav class="navbar navbar-inverse  navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><img src="images/D.png"/></a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="#home">Home</a></li>
      <li><a href="#about">About</a></li>
      <li><a href="#contact">Contact</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="Profile.php"><span class="glyphicon glyphicon-user"></span>Profile</a></li>
      <li><a href="Landing.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
  </div>
</nav>
  

  <!-- Header -->
    <a name="home"></a>
    <div class="intro-header">
                    <div class="intro-message">
                        <h1>DRESSCODE</h1>
                        <h2>We organize your messy measurements</h2>
                        <h3>An easy way to store all your data</h3>
                        <hr class="intro-divider">
                        
                   </div>
    </div>
 <!-- /.intro-header -->

 <!-- Page Content -->
<!-- /.content-section-a -->
        <a  name="about"></a>
        <div class="content-section-a">
             <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-sm-6">
                        <hr class="section-heading-spacer">
                         <div class="clearfix"></div>
                        <h2 class="section-heading">Dresscode<br>Saves the day</h2>
                        <h3>Losing data sheets and spending money$ on sheets is not a problem anymore.</h3>
                        <h3>You can directly enter data into the tables and keep them organized.</h3>
                    </div>
                    <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                        <img class="img-responsive" src="images/paperstack.jpg" height="200" width="400" alt="Img not found">
                    </div>
                </div>
            </div>
        </div>
 <!--content-section-a-->

<!--content-section-b-->
        <div class="content-section-b">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
                        <hr class="section-heading-spacer">
                        <div class="clearfix"></div>
                        <h2 class="section-heading">Dresscode<br>Saves your time</h2>
                        <h3>Taking all day to write down all the measurements?</h3>
                        <h3>We got you covered!</h3>
                    </div>
                    <div class="col-lg-5 col-sm-pull-6  col-sm-6">
                        <img class="img-responsive" src="images/clock.jpg"  height="200" width="400" alt="Img not found">
                    </div>
                </div>
    
            </div>
        </div>
 <!--content-section-b-->

<!--content-section-c-->
        <div class="content-section-a">
             <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-sm-6">
                        <hr class="section-heading-spacer">
                         <div class="clearfix"></div>
                        <h2 class="section-heading">Dresscode<br>Hard copies made easier</h2>
                        <h3>You can retrieve your database by taking copies whenever you need them.</h3>
                    </div>
                    <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                        <img class="img-responsive" src="images/printer.jpg" height="200" width="400" alt="Img not found">
                    </div>
                </div>
            </div>
        </div>
 <!--content-section-c-->

 <!--content-section-d-->
        <div class="content-section-b">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
                        <hr class="section-heading-spacer">
                        <div class="clearfix"></div>
                        <h2 class="section-heading">Dresscode<br>Is portable</h2>
                        <h3>You can access your data from anywhere!</h3>
                        <h3>All you need to do is Login and do your work.</h3>
                    </div>
                    <div class="col-lg-5 col-sm-pull-6  col-sm-6">
                        <img class="img-responsive" src="images/devices.jpg"  height="200" width="400" alt="Img not found">
                    </div>
                </div>
    
            </div>
        </div>
 <!--content-section-d-->
<a name="contact"/>
<footer class="footer-distributed">

			<div class="footer-left">

				<h3>DRESSCODE</h3>

				<p class="footer-links">
					<a href="#home">Home</a>
					·
					<a href="#about">About</a>
					·
					<a href="#contact">Contact</a>
				</p>
                
				<p class="footer-company-name">Dresscode &copy; 2018</p>

				<div class="footer-icons">

					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-github"></i></a>

				</div>

			</div>

			<div class="footer-right">

				<p>Contact Us</p>

				<form action="#" method="GET">

					<input style="color: black" type="text" name="email" placeholder="Email" />
					<textarea style="color: black" name="message" placeholder="Message"></textarea>
					<button type="submit" name="submit" style="  background-color:  red;" >Send</button>

				</form>

			</div>
</footer>
 


</body>
</html>
