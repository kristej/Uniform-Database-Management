<!DOCTYPE html>
<html>

<head>
  <title> form
  </title>





  </head>
<body>



<style>


body{
  background-color:black;
  text-align: center;

}

.center-div
{
  padding-top: 60px;
  padding-left: 25px;
  padding-right: 20px;
  position: center;
  
  border-radius: 3px;
}

form {
    display: inline-block;
}

.studenttable{
  font-family: Helvatica Neue; 
  color:white; 
  font-size: 18pt; 
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


.submit {
      cursor: pointer;
        border-radius: 5em;
        color: black;
        background: white
        border: 0;
        padding-left: 40px;
        padding-right: 40px;
        padding-bottom: 10px;
        padding-top: 10px;
        font-family: 'Helvatica Neue', sans-serif;
        margin-left: 350;
        font-size: 20px;
        box-shadow: 0 0 20px 1px rgba(0, 0, 0, 0.04);

    }

.reset{
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
        margin-left: 30%;
        font-size: 20px;
        box-shadow: 0 0 20px 1px rgba(0, 0, 0, 0.04);
    }

h1{
  color: white;
  font-family: 'Helvatica Neue', sans-serif;
}


</style>




 <h1>Enter the student details with the uniform sizes</h1>


<div class="center-div">



<form>
<table  class="studenttable" align="center" cellpadding = "10">

 <!-----id ---------------------------------------------------------->
<tr>
<td>STUDENT ID:</td>
<td><input type="text" style="font-size:15pt" size="55" name="Student_Id" maxlength="30"/>
(max 30 characters a-z and A-Z)
</td>
</tr> 
  
<!----- Name ---------------------------------------------------------->
<tr>
<td>NAME:</td>
<td><input type="text" style="font-size:15pt" size="55" name="First_Name" maxlength="30"/>
(max 30 characters a-z and A-Z)
</td>
</tr>
 
<!----- Date Of Birth -------------------------------------------------------->
<tr>
<td>DATE OF BIRTH:</td>
 
<td>
<select style="font-size:15pt;" name="Birthday_day" id="Birthday_Day">
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
 
<select style="font-size:15pt;" id="Birthday_Month" name="Birthday_Month">
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
 
<select style="font-size:15pt;" name="Birthday_Year" id="Birthday_Year">
 
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
</td>
</tr>
 
<!----- Mobile Number ---------------------------------------------------------->
<tr>
<td>MOBILE NUMBER:</td>
<td>
<input type="text" style="font-size:15pt" size="35 name="Mobile_Number" maxlength="10" />
(10 digit number)
</td>
</tr>
 
<!----- Gender ----------------------------------------------------------->
<tr>
<td>GENDER:</td>
<td>
Male <input type="radio" style="font-size:2.5em;width:.3em;height:.3em" name="Gender" value="Male" />
Female <input type="radio" style="font-size:2.5em;width:.3em;height:.3em" name="Gender" value="Female" />
</td>
</tr>
  
<!----- Shirt -------------------------------------------------------->
<tr>
<td>SHIRT:</td>
 
<td>
<select style="font-size:15pt;" name="Shirt">
<option value="-1">Colour:</option>
<option >White</option>
<option >Khaki</option>
<option >House</option>
</select>
 
<select  style="font-size:15pt;" name="Shirt_Size">
<option >Size:</option>
<option >22</option>
<option >24</option>
<option >26</option>
<option >28</option>
<option >30</option>
<option >32</option>
<option >34</option>
</select>
  
<select style="font-size:15pt;" name="Pant_Quantity">
<option >Quantity:</option>
<option >1</option>
<option >2</option>
<option >3</option>
<option >4</option>
<option >5</option>
</select>  
</td>
</tr>
 
<!----- Pant-------------------------------------------------------->  
<tr>
<td>PANT:</td>
<td>
<select style="font-size:15pt;" name="Pant">
<option >Colour:</option>
<option >White</option>
<option >Khaki</option>
</select>
 
<select style="font-size:15pt;" name="Pant_Size">
<option >Size:</option>
<option >22</option>
<option >24</option>
<option >26</option>
<option >28</option>
<option >30</option>
<option >32</option>
<option >34</option>
</select>
  
<select style="font-size:15pt;"  name="Pant_Quantity">
<option >Quantity:</option>
<option >1</option>
<option >2</option>
<option >3</option>
<option >4</option>
<option >5</option>
</select>  
  
</td>
</tr>
  
 <!-------------Badges--------------------------------------------------------->
 <tr>
<td>BADGE:</td>
<td>
<select style="font-size:15pt;" name="Badge">
<option >Colour:</option>
<option >yellow</option>
<option >blue</option>
<option >green</option>
<option >white</option>
</select>

<select style="font-size:15pt;"autofocus=" " name="Badge_Quantity">
<option >Quantity:</option>
<option >1</option>
<option >2</option>
<option >3</option>
<option >4</option>
<option >5</option>
</select>  
</td>
</tr>
  
 <!-------------SHOES---------------------------------------------------->
<tr>
<td>SHOES:</td>
<td>
<select style="font-size:15pt;" name="Shoes">
<option >Colour:</option>
<option >White</option>
<option >Black</option>
</select>
 
<select style="font-size:15pt;" name="Shoes_Size">
<option >UK Size:</option>
<option >7</option>
<option >8</option>
<option >9</option>
<option >10</option>
<option >11</option>
<option >12</option>
<option >13</option>
</select>
  
<select style="font-size:15pt;" name="Shoes_Quantity">
<option >Quantity:</option>
<option >1</option>
<option >2</option>
<option >3</option>
<option >4</option>
<option >5</option>
</select>    
</td>
</tr>
  
 
<!----- Submit and Reset ------------------------------------------------->
<tr>
<td colspan="2" align="center">
<input class="submit" type="submit" value="Submit">
<input class="reset" type="reset" value="Reset">
</td>
</tr>
</table>
</form>

</div>
</body>
</html>
