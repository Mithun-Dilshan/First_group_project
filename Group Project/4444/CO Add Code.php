<?php
 include("conect.php");

if(isset($_POST['savebtn']))
{	 
	


     $id = $_POST['CO_Id'];
    $LM_Name = $_POST['CO_Name'];
    $Email = $_POST['Email'];
    $NIC = $_POST['NIC'];
    $Phone_Number  = $_POST['Phone_Number'];
    $Username = $_POST['User_name'];
    $Password = $_POST['Password'];





	 $sql = "INSERT INTO creadit_officer (CO_Name,Email,NIC,Phone_Number,User_name,Password)
	 VALUES('$CO_Name','$Email','$NIC','$Phone_Number','$Username','$Password')";
	 if (mysqli_query($conn, $sql)) {
        header('Location: credit officer.php'); 
	 } else {
		echo "Error: " . $sql . "


" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>