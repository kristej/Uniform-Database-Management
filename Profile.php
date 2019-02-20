<!DOCTYPE html>
<?php
session_start();

 $host="localhost";
    $user="root";
    $password="";
    $db="dresscode";


    $con=mysqli_connect($host,$user,$password,$db);

    if(isset($_GET['btn_delete'])){
       
        $sql1 = mysqli_query($con," CALL `deleteuser`();");
    
        if($sql1){
            echo "<script> alert('User deleted');window.location.assign('SignUp.php');</script>";
    }
}
?>

<html>

<head>
   
  <link rel="stylesheet" href="css/btnstyle.css">
  <!--Import W3 Schools-->  
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">   
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <link rel="stylesheet" href="css/main1.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">    
  <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl"
    crossorigin="anonymous"></script>
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Profile</title>
    
    <style>
        
       
        /* Style the tab */
.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    -webkit-animation: fadeEffect 1s;
    animation: fadeEffect 1s;
}

/* Fade in tabs */
@-webkit-keyframes fadeEffect {
    from {opacity: 0;}
    to {opacity: 1;}
}

@keyframes fadeEffect {
    from {opacity: 0;}
    to {opacity: 1;}
}

.navbar-inverse .navbar-nav > li > a{
    color: white;
}


.navbar-inverse .navbar-nav > li > a:hover, .navbar-inverse .navbar-nav > li > a:focus {
    background-color: white;
    color: black;
}

.submit {
      cursor: pointer;
        border-radius: 5em;
        color: #fff;
        background: red;
        border: 0;
        padding-left: 40px;
        padding-right: 40px;
        padding-bottom: 10px;
        padding-top: 10px;
        font-family: 'Helvatica Neue', sans-serif;
        margin-left: 0%;
        font-size: 25px;
        box-shadow: 0 0 20px 1px rgba(0, 0, 0, 0.04);
    }

.register  {
        text-shadow: 0px 0px 3px rgba(117, 117, 117, 0.12);
        text-decoration: none;
        

    }


  .studenttable{
  font-family: Helvatica Neue; 
  color:white; 
  font-size: 11pt; 
  font-style: normal;
  font-weight: bold;
  text-align:left; 
  background-color: black; 
  border-collapse: collapse; 
  border: 2px solid white;
}
.studenttable.inner{
  border: 2px;
}
</style>
    
</head>

<body>

  <!-- Navbar -->
 <nav class="navbar navbar-inverse  navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><img src="images/D.png"/></a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="logout.php">Home</a></li>
      <li><a href="logout.php">About</a></li>
      <li><a href="logout.php">Contact</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="LogIn.php"><span class="glyphicon glyphicon-log-in"></span>Logout</a></li>
    </ul>
  </div>
</nav>
  

   <hr>
   <hr>



   <div class="tab">
  <button class="tablinks" onclick="openCity(event, 'MyProfile')"><b>My Profile</b></button>
  <button class="tablinks" onclick="openCity(event, 'Database')"><a href="database.php"><b>Database</b></button>
   </div>

<div id="MyProfile" class="tabcontent">
  
   <table class="striped">
      <tr>
         <td>
            <i class="medium material-icons black-text">account_circle</i><strong> NAME</strong>  
         </td>  
         <td>
           <?php
             echo  $_SESSION["username"];  
            ?>       
         </td>      
      </tr>
      <tr>
         <td>
            <i class="medium material-icons black-text">email</i><strong> EMAIL</strong>  
         </td>  
         <td>
            <?php
                echo  $_SESSION["email"]; 
            ?>       
         </td>      
      </tr> 
      <tr>
         <td>
            <i class="medium material-icons black-text">code</i><strong> PASSWORD</strong>  
         </td>  
         <td>
           <?php
             echo  $_SESSION["password"];  
            ?>       
         </td>      
      </tr> 
   </table>
   <br><br>
        <form>
            <div class="center">
                  <a class="submit" align="left" href="Profile.php?btn_delete=btn_delete"  >Delete Account</a>
             </div>
        </form>
</div>


<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script> 
      

    </body>
</html>