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
           <li> <a href="#home"> seller</a>   </li>
           <li> <a href="Land.php"> Land</a>   </li>
           <li> <a href="land manager.php"> land maneger</a>   </li>
           <li> <a href="credit officer.php"> credit officer</a>   </li>
           <li> <a href="Loan.php"> Loan</a>   </li>
           
            </ul>
        </div>
        <div class ="Add">
         <a href ="land add.php"> ADD </a> 


        </div>

        
        <?php

        include("conect.php");

        $sql="SELECT * FROM land;";
        $result = mysqli_query($conn,$sql);
        ?>
        
        
        
        
        <div class="Table">
        <table border="1px">
          <tr>
            <th>Land_Id</th>
            <th>Location</th>
            <th>Land_Size</th>
            <th>Land_Facilites</th>
            <th>Land_Price</th>
           
            
            <th>Image</th>
            <th>Deleat</th>
          </tr>
        
          <?php  while($row = mysqli_fetch_assoc ($result)){?>
              
              
        
        
          <tr>
        
            <td>   <?php echo $row ["Land_Id"]?>  </td>
            <td>    <?php echo $row ["Location"]?>     </td>
            <td>     <?php echo $row ["Land_Size"]?>    </td>
            <td>     <?php echo $row ["Land_Facilites"]?>   </td>
            <td>     <?php echo $row ["Land_Price"]?>        </td>
            <td> <img src = "<?php echo $row["Image"]?>" hight = "100px" width = "100px"></td>

            <td><a href="Land_delete.php?Land_Id=<?php echo $row["Land_Id"]; ?>">Delete</a></td>

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