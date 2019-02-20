<html>

<?php

 session_start();
 $con = mysqli_connect("localhost", "root", "", "dresscode");  
 $output = '';  
 $sql = "SELECT a.studentid, a.name, a.dob,a.mobile,a.gender, 
                b.shirtcolour,b.shirtsize,b.shirtquantity,
                c.pantcolour,c.pantsize,c.pantquantity,
                d.shoecolour,d.shoesize,d.shoequantity,
                e.badgecolour,e.badgequantity
            FROM studentdetails a, shirt b,pant c,shoes d,badge e
              where a.studentid=b.studentid and
                    a.studentid=c.studentid and
                    a.studentid=d.studentid and
                    a.studentid=e.studentid and
                    a.user='$_SESSION[username]'";


 $result = mysqli_query($con,$sql); 


 $output .= '  
      <div class="table-responsive">  
           <table class="table table-striped table-bordered table-hover table-dark">  
                <tr>  
                     <th width="20%">Student Id</th>  
                     <th width="20%">Name</th>  
                     <th width="20%">Date Of Birth</th>
                     <th width="20%">Mobile</th>
                     <th width="20%">Gender</th>

                     <th width="20%">Shirt colour</th>
                     <th width="20%">Size</th>
                     <th width="20%">Quantity</th>

                     <th width="20%">Pant colour</th>
                     <th width="20%">Size</th>
                     <th width="20%">Quantity</th>

                     <th width="20%">Shoe colour</th>
                     <th width="20%">Size</th>
                     <th width="20%">Quantity</th>

                     <th width="20%">Badge colour</th>
                     <th width="20%">Badge quantity</th> 
                     <th width="10%">Delete</th>  
                </tr>';  
 if(mysqli_num_rows($result) > 0)  
 {  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '   
                <tr>  
                     <td class="name" data-id0="'.$row[0].'" contenteditable>'.$row["studentid"].'</td>  
                     <td class="name" data-id1="'.$row[1].'" contenteditable>'.$row["name"].'</td>  
                     <td class="dob" data-id2="'.$row[2].'" contenteditable>'.$row["dob"].'</td>
                     <td class="mobile" data-id3="'.$row[3].'" contenteditable>'.$row["mobile"].'</td>  
                     <td class="gender" data-id4="'.$row[4].'" contenteditable>'.$row["gender"].'</td> 

                     <td class="shirtcolour" data-id5="'.$row[5].'" contenteditable>'.$row["shirtcolour"].'</td>
                     <td class="shirtsize" data-id6="'.$row[6].'" contenteditable>'.$row["shirtsize"].'</td>
                     <td class="shirtquantity" data-id7="'.$row[7].'" contenteditable>'.$row["shirtquantity"].'</td>

                     <td class="pantcolour" data-id8="'.$row[8].'" contenteditable>'.$row["pantcolour"].'</td>
                     <td class="pantsize" data-id9="'.$row[9].'" contenteditable>'.$row["pantsize"].'</td>
                     <td class="pantquantity" data-id10="'.$row[10].'" contenteditable>'.$row["pantquantity"].'</td>

                     <td class="shoecolour" data-id11="'.$row[11].'" contenteditable>'.$row["shoecolour"].'</td>
                     <td class="shoesize" data-id12="'.$row[12].'" contenteditable>'.$row["shoesize"].'</td>
                     <td class="shoequantity" data-id13="'.$row[13].'" contenteditable>'.$row["shoequantity"].'</td>

                     <td class="badgecolour" data-id14="'.$row[14].'" contenteditable>'.$row["badgecolour"].'</td>
                     <td class="badgequantity" data-id15="'.$row[15].'" contenteditable>'.$row["badgequantity"].'</td>

                     <td><button type="button" name="delete_btn" data-id16="'.$row["studentid"].'" class="btn btn-xs btn-danger btn_delete">x</button></td>  
                </tr>  
           ';  
      }  
      $output .= '  
           <tr>  
                <td id="studentid" contenteditable></td>  
                <td id="name" contenteditable></td>  
                <td id="dob" contenteditable></td>
                <td id="mobile" contenteditable></td>
                <td id="gender" contenteditable></td>  

                <td id="shirtcolour" contenteditable></td>
                <td id="shirtsize" contenteditable></td>
                <td id="shirtquantity" contenteditable></td>

                <td id="pantcolour" contenteditable></td>
                <td id="pantsize" contenteditable></td>
                <td id="pantquantity" contenteditable></td>

                <td id="shoecolour" contenteditable></td>
                <td id="shoesize" contenteditable></td>
                <td id="shoequantity" contenteditable></td>

                <td id="badgecolour" contenteditable></td>
                <td id="badgequantity" contenteditable></td>       
           </tr>  
      ';  
 }  
 else  
 {  
      $output .= '<tr>  
                          <td colspan="17">Data not Found</td>  
                  </tr>';  
 }  
 $output .= '
            </table>  
      </div>'; 

      
 
 echo $output;  
 ?>


 </html>