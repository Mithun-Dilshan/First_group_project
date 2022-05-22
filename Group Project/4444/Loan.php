<!DOCTYPE html>
<html>
<head>
<style>






    
   
</style>
<link rel="stylesheet" type="text/css" href="Admin.css">

</head>


<body>


<div class="nav_admi">
             <ul class="admi_ul">
           <li><a href="Dash_bord.php">Dash bord </a></li> 
           <li> <a href="Customer.php">customer  </a>   </li>
           <li> <a href="seller.php"> seller</a>   </li>
           <li> <a href="Land.php"> Land</a>   </li>
           <li> <a href="land manager.php"> land maneger</a>   </li>
           <li> <a href="credit officer.php"> credit officer</a>   </li>
           <li> <a href="Loan.php"> Loan</a>   </li>
           
            </ul>
        </div>



        <?php

        include("conect.php");

        $sql="SELECT * FROM loan;";
        $result = mysqli_query($conn,$sql);
        ?>
        
        
        
        
        <div class="Table">
        <table border="1" >
          <tr>
            <th>Loan_Id</th>
            <th>Customer_Name</th>
            <th>NIC</th>
            <th>Address</th>
            <th>City</th>
            <th>Phone_number</th>
            <th>Amount</th>
            <th>Period</th>
            

            <th>Delete</th>
          </tr>
        
          <?php  while($row = mysqli_fetch_assoc ($result)){?>
              
              
        
        
          <tr>
        
            <td>   <?php echo $row ["Loan_Id"]?>  </td>
            <td>    <?php echo $row ["Customer_name"]?>     </td>
            <td>     <?php echo $row ["NIC"]?>    </td>
            <td>     <?php echo $row ["Address"]?>    </td>
            <td>     <?php echo $row ["City"]?>    </td>
            <td>     <?php echo $row ["Phone_number"]?>    </td>
            <td>     <?php echo $row ["Amount"]?>    </td>
            <td>     <?php echo $row ["Period"]?>    </td>
         
            

            <td><button><a href="Loan delete.php?Loan_Id=<?php echo $row["Loan_Id"]; ?>">Delete</a></button></td>

            </form>
  </td> 
   

  </tr>
 
  

   
    <?php  
    }

     ?>   
        
 </table>   
  </div>  
 


  </body>
  </html>