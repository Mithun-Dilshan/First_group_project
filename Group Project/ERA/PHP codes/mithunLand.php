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
            <th>Land Size</th>
            <th>Land Facilites</th>
            <th>Land Price</th>
           
            
            <th>Image</th>
            <th>Deleat</th>
          </tr>
        
          <?php  while($row = mysqli_fetch_assoc ($result)){
              ?>
              
              
        
        
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
 