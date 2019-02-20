<?php
session_start();
$host="localhost";
$user="root";
$password="";
$db="dresscode";

$con=mysqli_connect($host,$user,$password,$db);
?> 

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">



<style>
* {
    box-sizing: border-box;
}

input[type=text], select, textarea {
    width: 60%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
}

label {
    padding: 12px 12px 12px 0;
    display: inline-block;
}

input[type=submit] {
    background-color: green;
    color: white;
    padding: 15px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: center;
    margin-left: 40%;
    font-size: 22px;
}
input[type=button] {
    background-color: green;
    color: white;
    padding: 15px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    
    font-size: 22px;
}
input[type=reset] {
    font-size:22px;
    background-color: red;
    color: white;
    padding: 15px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    
}

.c {
    border-radius: 5px;
    background-color: black;
    padding: 20px;
    color:white;
    font-family: 'Helvatica Neue', sans-serif;
    font-weight:bold;
}

.col-25 {
    
    width: 25%;
    margin-top: 6px;
}

.col-75 {
    float: left;
    width: 75%;
    margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
    .col-25, .col-75, input[type=submit] {
        width: 100%;
        margin-top: 0;
    }
}
</style>



</head>
<body>




<h2>........................................................................................ENTER THE STUDENT DETAILS.................................................................................</h2>

<div class="c">
  <form method="POST" action="formdetails.php">
  <!----student_id------>
    <div class="row">
      <div class="col-25">
        <label>Student ID:</label>
      </div>
      <div class="col-75">
        <input type="text" name="Student_Id" placeholder="Your ID...">
      </div>
    </div>
    
  <!---------name--------->
    <div class="row">
      <div class="col-25">
        <label>Name:</label>
      </div>
      <div class="col-75">
        <input type="text" name="First_Name" placeholder="Your name..">
      </div>
    </div>
 <!--------DOB---------->
    <div class="row">
      <div class="col-25">
        <label>Date Of Birth:</label>
      </div>
      <div class="col-75">
        <select name="Birthday_Day">
          <option value="-1">Day:</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
          <option value="13">13</option>
          <option value="14">14</option>
          <option value="15">15</option>
          <option value="16">16</option>
          <option value="17">17</option>
          <option value="18">18</option>
          <option value="19">19</option>
          <option value="20">20</option>
          <option value="21">21</option>
          <option value="22">22</option>
          <option value="23">23</option>
          <option value="24">24</option>
          <option value="25">25</option>
          <option value="26">26</option>
          <option value="27">27</option>
          <option value="28">28</option>
          <option value="29">29</option>
          <option value="30">30</option>
          <option value="31">31</option>
        </select>
        <select name="Birthday_Month">
        <option value="-1">Month:</option>
        <option value="January">Jan</option>
        <option value="February">Feb</option>
        <option value="March">Mar</option>
        <option value="April">Apr</option>
        <option value="May">May</option>
        <option value="June">Jun</option>
        <option value="July">Jul</option>
        <option value="August">Aug</option>
        <option value="September">Sep</option>
        <option value="October">Oct</option>
        <option value="November">Nov</option>
        <option value="December">Dec</option>
        </select>
        <select name="Birthday_Year">
               <option value="-1">Year:</option>
               <option value="2012">2012</option>
               <option value="2011">2011</option>
               <option value="2010">2010</option>
               <option value="2009">2009</option>
               <option value="2008">2008</option>
               <option value="2007">2007</option>
               <option value="2006">2006</option>
               <option value="2005">2005</option>
               <option value="2004">2004</option>
               <option value="2003">2003</option>
               <option value="2002">2002</option>
               <option value="2001">2001</option>
               <option value="2000">2000</option>
 
               <option value="1999">1999</option>
               <option value="1998">1998</option>
               <option value="1997">1997</option>
               <option value="1996">1996</option>
               <option value="1995">1995</option>
               <option value="1994">1994</option>
               <option value="1993">1993</option>
               <option value="1992">1992</option>
               <option value="1991">1991</option>
               <option value="1990">1990</option>
 
               <option value="1989">1989</option>
               <option value="1988">1988</option>
               <option value="1987">1987</option>
               <option value="1986">1986</option>
               <option value="1985">1985</option>
               <option value="1984">1984</option>
               <option value="1983">1983</option>
               <option value="1982">1982</option>
               <option value="1981">1981</option>
               <option value="1980">1980</option>

          
          </select>
       </div>
      </div>
 
  <!------Mobile Number----->  
    <div class="row">
      <div class="col-25">
        <label>Mobile Number:</label>
      </div>
      <div class="col-75">
          <input type="text" name="Mobile_Number" maxlength="10" placeholder="Your phone...max(10 digits)"/>
      </div>
    </div>
    
  <!-----gender--------->
    <div class="row">
      <div class="col-25">
        <label>Gender:</label>
      </div>
      <div class="col-75">

          Male<input type="radio" name="Gender" value="Male"/>
          Female<input type="radio" name="Gender" value="Female"/>
      </div>
    </div>
   
   <!-----shirts-------->
    <div class="row">
      <div class="col-25">
        <label>Shirt:</label>
      </div>
      <div class="col-75">
         <select name="Shirt_Colour">
           <option value="-1">Colour:</option>
           <option >White</option>
           <option >Khaki</option>
           <option >House</option> 
         </select>
        
         <select name="Shirt_Size">
           <option >Size:</option>
           <option >22</option>
           <option >24</option>
           <option >26</option>
           <option >28</option>
           <option >30</option>
           <option >32</option>
           <option >34</option>
         </select>
        <select name="Shirt_Quantity">
        <option >Quantity:</option>
        <option >1</option>
        <option >2</option>
        <option >3</option>
        <option >4</option>
        <option >5</option>
        </select>
      </div>
    </div>

 <!-------Pant----------->
  <div class="row">
      <div class="col-25">
        <label>Pant:</label>
      </div>
      <div class="col-75">
         <select name="Pant_Colour">
           <option value="-1">Colour:</option>
           <option >White</option>
           <option >Khaki</option>
         </select>
        
         <select name="Pant_Size">
           <option >Size:</option>
           <option >22</option>
           <option >24</option>
           <option >26</option>
           <option >28</option>
           <option >30</option>
           <option >32</option>
           <option >34</option>
         </select>
        <select name="Pant_Quantity">
        <option >Quantity:</option>
        <option >1</option>
        <option >2</option>
        <option >3</option>
        <option >4</option>
        <option >5</option>
        </select>
      </div>
    </div>
 
<!---------Badges------------->
    <div class="row">
      <div class="col-25">
        <label>Badge:</label>
      </div>
      <div class="col-75">
         <select name="Badge_Colour">
           <option value="-1">Colour:</option>
           <option >yellow</option>
           <option >blue</option>
           <option >green</option>
           <option >white</option>
         </select>
      
        <select name="Badge_Quantity">
        <option >Quantity:</option>
        <option >1</option>
        <option >2</option>
        <option >3</option>
        <option >4</option>
        <option >5</option>
        </select>
      </div>
    </div>
    
<!-------shoes--------->
 <div class="row">
      <div class="col-25">
        <label>Shoes:</label>
      </div>
      <div class="col-75">
         <select name="Shoe_Colour">
           <option value="-1">Colour:</option>
           <option >White</option>
           <option >Black</option>
         </select>
        
         <select name="Shoe_Size">
           <option >UK Size:</option>
           <option >7</option>
           <option >8</option>
           <option >9</option>
           <option >10</option>
           <option >11</option>
           <option >12</option>
           <option >13</option>
         </select>
        <select name="Shoe_Quantity">
        <option >Quantity:</option>
        <option >1</option>
        <option >2</option>
        <option >3</option>
        <option >4</option>
        <option >5</option>
        </select>
      </div>
    </div>
  <p/>
    <div class="row">
      <input type="submit" value="Submit" name="submit">
      <input type="reset" value="Reset">
      <a href="database.php"><input type="button" value="Back">
    </div>
  </form>
</div>

  
  
  
</body>
</html>
