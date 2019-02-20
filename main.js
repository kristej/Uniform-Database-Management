$(document).ready(function(){
   
      //select operation
      function fetch_data()  
      {  
           $.ajax({  
                url:"select.php",  
                method:"POST",  
                success:function(data){  
                     $('#live_data').html(data);  
                }  
           });  
      }  
      fetch_data();

      //update opeation

      function edit_data(id, text, column_name, table_name)  
      {  
           $.ajax({  
                url:"edit.php",  
                method:"POST",  
                data:{id:id, text:text, column_name:column_name, table_name:table_name},  
                 
                success:function(data){  
                     alert(data);  
                }  
           });  
      }  


      const reusableEdit = (event, columnName) => {
        // you can use this for every column
        const id = event.target.parentElement.querySelector('.name').getAttribute('data-id0');
        const columnValue = event.target.innerText;

        const tableName = {
          name: 'studentdetails',
          dob: 'studentdetails',
          mobile: 'studentdetails',
          gender: 'studentdetails',

          shirtcolour: 'shirt',
          shirtsize: 'shirt',
          shirtquantity: 'shirt',
        
          pantcolour: 'pant',
          pantsize: 'pant',
          pantquantity: 'pant',

          shoecolour: 'shoes',
          shoesize: 'shoes',
          shoequantity: 'shoes',

          badgecolour: 'badge',
          badgequantity: 'badge'

          // add each column_name and map it to it's table here. 

        }[columnName]


        edit_data(id, columnValue, columnName, tableName);
      }

      $(document).on('blur', '.name', event => reusableEdit(event, 'name'));

      $(document).on('blur', '.dob', event => reusableEdit(event, 'dob'));

      $(document).on('blur', '.mobile', event => reusableEdit(event, 'mobile'));

      $(document).on('blur', '.gender', event => reusableEdit(event, 'gender'));

      $(document).on('blur', '.shirtcolour', event => reusableEdit(event, 'shirtcolour'));
      $(document).on('blur', '.shirtsize', event => reusableEdit(event, 'shirtsize'));
      $(document).on('blur', '.shirtquantity', event => reusableEdit(event, 'shirtquantity'));

      $(document).on('blur', '.pantcolour', event => reusableEdit(event, 'pantcolour'));
      $(document).on('blur', '.pantsize', event => reusableEdit(event, 'pantsize'));
      $(document).on('blur', '.pantquantity', event => reusableEdit(event, 'pantquantity'));

      $(document).on('blur', '.shoecolour', event => reusableEdit(event, 'shoecolour'));
      $(document).on('blur', '.shoesize', event => reusableEdit(event, 'shoesize'));
      $(document).on('blur', '.shoequantity', event => reusableEdit(event, 'shoequantity'));

      $(document).on('blur', '.badgecolour', event => reusableEdit(event, 'badgecolour'));
      $(document).on('blur', '.badgequantity', event => reusableEdit(event, 'badgequantity'));

      //delete operation
      $(document).on('click', '.btn_delete', function(){  
           var studentid=$(this).data("id16");  
           if(confirm("Are you sure you want to delete this?"))  
           {  
                $.ajax({  
                     url:"delete.php",  
                     method:"POST",  
                     data:{studentid:studentid},    
                     success:function(data){  
                          alert(data);  
                          fetch_data();  
                     }  
                });  
           }  
      });  




});   