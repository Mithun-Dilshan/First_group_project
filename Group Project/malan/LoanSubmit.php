<?php
include "./config.php";

if (isset($_POST['submit'])) {

  $nic = $_POST['nic'];
  $name = $_POST['name'];
  $address1 = $_POST['address1'];
  $address2 = $_POST['address2'];
  $city = $_POST['city'];
  $mobile = $_POST['mobile'];
  $amount = $_POST['amount'];
  $period = $_POST['period'];

  $sql = "INSERT INTO `loan`(`nic`, `name`, `address1`, `address2`, `city`, `mobile`, `amount`, `period`) 
            VALUES ('$nic', '$name', '$address1', '$address2', '$city', '$mobile', '$amount', '$period')";

  $result = $conn->query($sql);

  if ($result == TRUE) {
    $msg = "Loan submitted successfully.";
    echo "<script type='text/javascript'>alert('$msg');</script>";
  } else {
    $msg = "Error:" . $sql . "<br>" . $conn->error;
    echo "<script type='text/javascript'>alert('$msg');</script>";
  }
}
?>

<!DOCTYPE html>
<html>

<head>

  <title>Samarasingha land Sale</title>
  <link rel="stylesheet" href="CSS/css path.css">
  <link rel="stylesheet" href="./CSS/loan.css">

  <script src="https://kit.fontawesome.com/88d81e3dd6.js" crossorigin="anonymous"></script>

  <script src="Js/contactus.js "></script>
  <script src="./Js/loanSubmit.js"></script>

</head>

<body>
  <div class="dev">

    <nav class="nev">

      <span onclick="openNav()">&#9776; More</span>

      <a href="home.html"> Home </a>
      <a href=#webpage> About us </a>
      <a href="ContactUS.html">Contacts us</a>

      <img src="Image/profile.jpg" class="img">

    </nav>
    <input type="text" placeholder="Search.." class="search">
    <img src="Image/Logo.png" class="logo">

  </div>
  <input type="button" value="register" class="reg">
  <input type="button" value="login" class="log">

  <div id="myNav" class="overlay">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <div class="overlay-content">
      <a href="#">Sale</a>
      <a href="#">Land List</a>
      <a href="LoanSubmit.php">Loan</a>
      <a href="#">Feedback</a>
      <a href="#">News</a>
      <a href="#">FAQ</a>
    </div>
  </div>

  <h2 style="text-align: center; margin-top: 5%;">Loan Submit Form</h2>
  <div style="text-align: left; margin-top: 70px; margin-bottom: 5%;">
    <fieldset style="margin-top: -2.5%;">
      <form method="POST" onSubmit="return fnLoanSubmitValidate();">
        <div style="display: flex; justify-content: center;">
          <div class="col-3" style="margin-right: 5px;">
            <label for="nic">NIC No.</label>
            <input type="text" id="nic" name="nic" placeholder="Enter the NIC" maxlength="10" autocomplete="off" />
          </div>
          <div class="col-9">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="Enter the Name" autocomplete="off" />
          </div>
        </div>
        <div style="display: flex; justify-content: start;">
          <div class="col-6">
            <label for="address1">Address Line 1</label>
            <input type="text" id="address1" name="address1" placeholder="Enter the Address Line 1" autocomplete="off" />
          </div>

        </div>
        <div style="display: flex; justify-content: start;">
          <div class="col-6" style="margin-right: 5px;">
            <label for="address2">Address Line 2 (optional)</label>
            <input type="text" id="address2" name="address2" placeholder="Enter the Address Line 2" autocomplete="off" />
          </div>
          <div class="col-3" style="margin-right: 5px;">
            <label for="city">City</label>
            <input type="text" id="city" name="city" placeholder="Enter the City" autocomplete="off" />
          </div>
          <div class="col-3">
            <label for="city">Mobile No.</label>
            <input type="text" id="mobile" name="mobile" placeholder="Enter the Mobile No." maxlength="10" autocomplete="off" />
          </div>
        </div>
        <div style="display: flex; justify-content: start;">
          <div class="col-3" style="margin-right: 5px;">
            <label for="address2">Loan Amount</label>
            <input type="number" id="amount" name="amount" placeholder="Enter the Loan Amount" autocomplete="off" />
          </div>
          <div class="col-3" style="margin-right: 5px;">
            <label for="period">Period</label>
            <select name="period" id="period">
              <option value="default">Select the Loan Period</option>
              <option value="3 months">3 months</option>
              <option value="6 months">6 months</option>
              <option value="12 months">12 months</option>
              <option value="24 months">24 months</option>
            </select>
          </div>
        </div>
        <div style="display: flex; justify-content: right;">
          <!-- <div class="col-3" style="margin-right: 5px;">
          <input type="submit" class="button-sm red" id="btnDelete" name="btnDelete" value="DELETE" style="width: 100%;">
        </div> -->
          <div class="col-3">
            <input type="submit" class="button-sm green" id="submit" name="submit" value="SUBMIT LOAN" style="width: 100%;">
          </div>
        </div>
      </form>
    </fieldset>
  </div>
  
<footer>
  <div class="footer-content">
      <h3 style="text-align:center;">Samarasingha Land Sale</h3>
      <p style="font-size: 20px;">+94 112 234561<br>+94 112 234562</p>
      <ul class="socials">
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
          <li><a href="#"><i class="fa fa-youtube"></i></a></li>
          <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
      </ul>
  </div>
</footer>

</body>

</html>