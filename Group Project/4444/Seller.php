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
        


        </div>



        <?php

        include("conect.php");

        $sql="SELECT * FROM Seller";
        $result = mysqli_query($conn,$sql);
        ?>
        
        
        
        
        <div class="Table">
        <table border="1" >
          <tr>
            <th>Seller_Id</th>
            <th>F_Name</th>
            <th>L_Name</th>
            <th>Address</th>
           
            <th>NIC</th>
            <th>Password</th>
            <th>Username</th>
            
            <th>Phone_Number</th>


            <th>Delete</th>
          </tr>
        
          <?php  while($row = mysqli_fetch_assoc ($result)){?>
              
              
        
        
          <tr>
        
            <td>   <?php echo $row ["Seller_Id"]?>  </td>
            <td>    <?php echo $row ["F_Name"]?>     </td>
            <td>     <?php echo $row ["L_Name"]?>    </td>
            <td>     <?php echo $row ["Address"]?>   </td>
          
            <td>     <?php echo $row ["NIC"]?>        </td>
            <td>     <?php echo $row ["Phone_Number"]?>   </td>
            <td>     <?php echo $row ["User_name"]?>   </td>
            <td>     <?php echo $row ["Password"]?>   </td>
            
            
            

            <td><button><a href="Seller delete.php?Seller_Id=<?php echo $row["Seller_Id"]; ?>">Delete</a></button></td>

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


            
        


