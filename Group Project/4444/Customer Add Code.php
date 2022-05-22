<?php
 include("conect.php");

if(isset($_POST['savebtn']))
{	 
	


     $id = $_POST['Customer_Id'];
    $F_Name = $_POST['F_Name'];
    $L_Name = $_POST['F_Name'];
    $Address = $_POST['Address'];
    $NIC = $_POST['NIC'];
   
    $Username = $_POST['User_name'];
    $Password = $_POST['Password'];

    $fileName=$_FILES['image']['name'];
$fileTempname=$_FILES['image']['tmp_name'];

$path="upload/";
$tarfile=$path.basename($_FILES['image']['name']);
move_uploaded_file($fileTempname,$tarfile);

$tarfile = $_POST['Profile'];


	 $sql = "INSERT INTO Customer (F_Name,L_Name,Address,NIC,User_name,Password,Profile)
	 VALUES('$LM_Name','$Email','$NIC','$Phone_Number','$Username','$Password','$tarfile')";
	 if (mysqli_query($conn, $sql)) {
        header('Location: Customer.php'); 
	 } else {
		echo "Error: " . $sql . "


" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>