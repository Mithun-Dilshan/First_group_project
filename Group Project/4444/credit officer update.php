<?php
include_once 'Conect.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE creadit_officer set CO_Id='" . $_POST['CO_Id'] . "', CO_Name='" . $_POST['CO_Name'] . "', Email='" . $_POST['Email'] . "', NIC='" . $_POST['NIC'] . "' ,Phone_Number='" . $_POST['Phone_Number'] . "', User_name='" . $_POST['User_name'] . "', Password='" . $_POST['Password'] . "' WHERE CO_Id='" . $_POST['CO_Id'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM Creadit_officer WHERE CO_Id='" . $_GET['CO_Id'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update Employee Data</title>
</head>
<body>
<form name="frmUser" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>

CO_Id: <br>
<input type="hidden" name="CO_Id" class="txtField" value="<?php echo $row['CO_Id']; ?>">

<br>
CO_Name: <br>
<input type="text" name="CO_Name" class="txtField" value="<?php echo $row['CO_Name']; ?>">
<br>
Email :<br>
<input type="text" name="Email" class="txtField" value="<?php echo $row['Email']; ?>">
<br>
NIC:<br>
<input type="text" name="NIC" class="txtField" value="<?php echo $row['NIC']; ?>">
<br>
Phone Number:<br>
<input type="text" name="Phone_Number" class="txtField" value="<?php echo $row['Phone_Number']; ?>">
<br>
User Name:<br>
<input type="text" name="User_name" class="txtField" value="<?php echo $row['User_name']; ?>">
<br>
Password:<br>
<input type="text" name="Password" class="txtField" value="<?php echo $row['Password']; ?>">
<br>
<input type="submit" name="submit" value="Submit" class="buttom">

</form>
</body>
</html>