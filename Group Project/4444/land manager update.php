<?php
include_once 'Conect.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE land_manager set LM_Id='" . $_POST['LM_Id'] . "', LM_Name='" . $_POST['LM_Name'] . "', Email='" . $_POST['Email'] . "', NIC='" . $_POST['NIC'] . "' ,Phone_Number='" . $_POST['Phone_Number'] . "', User_name='" . $_POST['User_name'] . "', Password='" . $_POST['Password'] . "' WHERE LM_Id='" . $_POST['LM_Id'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM land_manager WHERE LM_Id='" . $_GET['LM_Id'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update Employee Data</title>
</head>
<body>
<form name="frmUser" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>

LM_Id: <br>
<input type="hidden" name="LM_Id" class="txtField" value="<?php echo $row['LM_Id']; ?>">

<br>
LM_Name: <br>
<input type="text" name="LM_Name" class="txtField" value="<?php echo $row['LM_Name']; ?>">
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