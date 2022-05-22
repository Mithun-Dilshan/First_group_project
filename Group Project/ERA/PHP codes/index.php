<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Bar</title>
</head>
<body>
     <form method="post">
         <label>Search</label>
         <input type="text" name="search">
         <input type="submit" name="submit">

     </form>
</body>
</html>

<?php

include_once 'conect.php';
$result=mysqli_query($conn, "SELECT * FROM lands");
?>
if (isset($_POST["submit"])){
    $str=$_POST["search"];
    $sth=$con->prepare("SELECT * FROM 'search' WHERE name='$str'");

    $sth->setFetchMode(PDO:: FETCH_OB);
    $sth -> execute();

    if($row= $sth->fetch())
    {
        ?>
        <br><br><br>
        <table>
           <tr> 
               <th>Land_ID</th> 
               <th>Location</th> 
               <th>Land_size</th> 
               <th>Land_Facilities</th> 
               <th>Land_Price</th> 
               <th>Image</th> 
           </tr> 
           <tr>
              <td><?php echo $row->Land_ID ; ?></td> 
              <td><?php echo $row->Location ; ?></td> 
              <td><?php echo $row->Land_size ; ?></td> 
              <td><?php echo $row->Land_Facilities ; ?></td> 
              <td><?php echo $row->Land_Price ; ?></td> 
              <td><?php echo $row->Image ; ?></td> 
           </tr>
        </table>
    }
    <?php       
    

    
   // else{
        echo "Does not exist";
    //}

?>