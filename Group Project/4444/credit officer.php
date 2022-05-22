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
           <li> <a href="seller.phpe"> seller</a>   </li>
           <li> <a href="Land.php"> Land</a>   </li>
           <li> <a href="land manager.php"> land maneger</a>   </li>
           <li> <a href="credit officer.php"> credit officer</a>   </li>
           <li> <a href="Loan.php"> Loan</a>   </li>
           
            </ul>
        </div>



        <div class ="Add">
         <a href ="credit officer add.php"> ADD </a> 


        </div>


        




        <?php

        include("conect.php");

        $sql="SELECT * FROM creadit_officer;";
        $result = mysqli_query($conn,$sql);
        ?>
        
        
        
        
        <div class="Table">
        <table border="1" >
          <tr>
            <th>CO_Id</th>
            <th>CO_Name</th>
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
        
            <td>   <?php echo $row ["CO_Id"]?>  </td>
            <td>     <?php echo $row ["CO_Name"]?>    </td>
            <td>     <?php echo $row ["Email"]?>   </td> 
            <td>     <?php echo $row ["NIC"]?>  
            <td>     <?php echo $row ["Phone_Number"]?>       </td>
            <td>     <?php echo $row ["User_name"]?>   </td>
            <td>     <?php echo $row ["Password"]?>   </td>
            <td>
            <button><a href="credit officer update.php?CO_Id=<?php echo $row["CO_Id"]; ?>">Update</a>  
            </td></button>

            

            <td><button><a href="credit officer delete.php?CO_Id=<?php echo $row["CO_Id"]; ?>">Delete</a></button></td>

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