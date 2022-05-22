<?php
 include("conect.php");
 
if(isset($_POST['savebtn'])){


    $fileName=$_FILES['image']['name'];
    $fileTempname=$_FILES['image']['tmp_name'];
    
    $path="upload/";
    $tarfile=$path.basename($_FILES['image']['name']);
    
    if(isset($_FILES['image'])){
    
    if(move_uploaded_file($fileTempname,$tarfile)){
    
    echo "File is uploaded";
    
    
    echo"$tarfile";
    }}}

if(isset($_POST['savebtn']))
{	 
	


    
    $Location = $_POST['Location'];
    $Land_Size = $_POST['Land_Size'];
    $Land_Facilites = $_POST['Land_Facilites'];
    $Land_Price = $_POST['Land_Price'];
   





	 $sql = "INSERT INTO land(Location,Land_Size,Land_Facilites,Land_Price,Image)
	 VALUES('$Location','$Land_Size','$Land_Facilites','$Land_Price','$tarfile')";
	 if (mysqli_query($conn, $sql)) {
        header('Location: Land.php'); 
	 } else {
		echo "Error: " . $sql . "


" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>