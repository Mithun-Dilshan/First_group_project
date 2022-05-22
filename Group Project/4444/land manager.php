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



        <div class ="Add">
         <button><a href ="land manager add.php"> ADD </a></button> 


        </div>


        




        <?php

        include("Conect.php");

        $sql="SELECT * FROM land_manager;";
        $result = mysqli_query($conn,$sql);
        ?>
        
        
        
        
        <div class="Table">
        <table border="1" >
          <tr>
            <th>LM_Id</th>
            <th>LM_Name</th>
            <th>Email</th>
            <th>NIC</th>
           
            <th>Phone_Number</th>
            <th>Username</th>
            <th>Password</th>
            <th>Update</th>

            <th>Delete</th>
          </tr>
        
          <?php  while($row = mysqli_fetch_assoc ($result)){?>
              
              
        
        
          <tr>
        
            <td>   <?php echo $row ["LM_Id"]?>  </td>
            <td>     <?php echo $row ["LM_Name"]?>    </td>
            <td>     <?php echo $row ["Email"]?>   </td> 
            <td>     <?php echo $row ["NIC"]?>  
            <td>     <?php echo $row ["Phone_Number"]?>       </td>
            <td>     <?php echo $row ["User_name"]?>   </td>
            <td>     <?php echo $row ["Password"]?>   </td>
           

            <td> <button><a href="land manager update.php?LM_Id=<?php echo $row["LM_Id"]; ?>">Edit</a></button></td>
            

            <td><button><a href="Land manager delete.php?LM_Id=<?php echo $row["LM_Id"]; ?>">Delete</a></button></td>

            
  
   

  </tr>
 
  

   
    <?php  
    }

     ?>   
        
 </table>   
  </div>   
 


  </body>
  </html>