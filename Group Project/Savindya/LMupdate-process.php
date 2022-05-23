<?php
include_once 'config.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE land set Land_Id='" . $_POST['Land_Id'] . "', Location='" . $_POST['Location'] . "', Land_Size='" . $_POST['Land_Size'] . "', Land_Facilities='" . $_POST['Land_Facilities'] . "' ,Land_Price='" . $_POST['Land_Price'] . "' WHERE Land_Id='" . $_POST['Land_Id'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM land WHERE Land_Id='" . $_GET['Land_Id'] . "'");
$row= mysqli_fetch_array($result);
?>

<html>
<head>
<title>Update Land details</title>
<link rel="stylesheet" href="Css\LMupdate-process.css">
</head>
<body>


<form name="frmUser" method="post" action="">


<div>
<?php
  if(isset($message)) { echo $message; }
?>
</div>

<!-- <div style="padding-bottom:5px;"> -->
<!-- <div>
<a href="LandManager.php">Land List</a>
</div> -->

<fieldset>
  <legend>Update Form</legend>
    <form class="update-form">
      <div class="align">
        <label for="Land_ID">Land ID</label>
          <input type="hidden" name="Land_Id" class="txtField" value="<?php echo $row['Land_Id']; ?>">
          <input type="text" name="Land_Id" class="txtField" value="<?php echo $row['Land_Id']; ?>">
        <br>

        <label for="Location">Location</label>
          <input type="text" name="Location" class="txtField" value="<?php echo $row['Location']; ?>">
        <br>

        <label for="Land_Size">Land Size</label>
          <input type="text" name="Land_Size" class="txtField" value="<?php echo $row['Land_Size']; ?>">
        <br>

        <label for="Land_Facilities">Land Facilities</label>
          <input type="text" name="Land_Facilities" class="txtField" value="<?php echo $row['Land_Facilities']; ?>">
        <br>

        <label for="Land_Price">Land Price</label>
          <input type="text" name="Land_Price" class="txtField" value="<?php echo $row['Land_Price']; ?>">
        <br>

        <!-- <label for="Image">Image</label>
        <input type="text" name="Image" class="txtField" value="<?php echo $row['Images']; ?>">
        <br> -->

        <div class="btn-align-right">
        <input class="btn" type="submit" name="submit" value="Submit" class="buttom">
        <!-- <button><a class="back-btn" href="LandManager.php">Back</a></button> -->
        <a  class="btn" href="LandManager.php" target="_blank">Back</a>
        </div>
      </div>

    </form>
  </fieldset>
</body>
</html>
