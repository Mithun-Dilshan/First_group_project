
<form method="POST" action="">

<div class= "from-group" >
<lebel for = ""> Customer Name </lebel>
<input type = "text" name ="C_name" placeholder="Enter name">

</div>
<div class= "from-group" >
<lebel for = "">Feedback </lebel>
<input type = "text" name ="Feedback" placeholder="Enter feedback">

</div>
<input type="submit" name="savebtn" value="submit">
</form>


<?php
 include("conect.php");

if(isset($_POST['savebtn']))
{	 
	


    
    $C_name = $_POST['C_name'];
    $Feedback = $_POST['Feedback'];
  





	 $sql = "INSERT INTO Feedback (C_name,Feedback)
	 VALUES('$C_name','$Feedback')";
	 if (mysqli_query($conn, $sql)) {
        echo "completed";
	 } else {
		echo "Error: " . $sql . "


" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>




<?php

include("conect.php");

$sql="SELECT * FROM Feedback;";
$result = mysqli_query($conn,$sql);
?>
<table>
<?php  while($row = mysqli_fetch_assoc ($result)){?>
    <tr>




  
        <td> <?php echo $row ["C_name"]?><td>
        <td> <?php echo $row ["Feedback"]?><td>
</tr>
 

<?php

}
?>
</table>