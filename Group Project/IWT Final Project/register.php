<!DOCTYPE html>
<html>
<head>


    <title>Document</title>
   <link rel="stylesheet" href="../Css/land sale system css.css">


 <script src="Js/Javascript.js"></script>

</head>

<?php
  include "./config.php";
  $con = new mysqli("localhost", "root", "", "iwt_project");

    if($con->connect_error)
    {

      echo "<script>alert('Connection Error')</script>";
    }

    else {

        echo "<script>alert('Connection Succesfull')</script>";
    }

    if(isset($_POST['Submit'])) {


      $fname = $_POST['fname'];
      $lname = $_POST['lname'];
      $mb_num = $_POST['mb_num'];
      $city = $_POST['city'];
      $distr = $_POST['distr'];
      $provin = $_POST['provin'];
      $uname = $_POST['uname'];
      $pword = $_POST['pword'];
      $rpword = $_POST['rpword'];


      $result = mysqli_query($conn, "INSERT INTO register(fname, lname, mb_num, city, distr, provin, uname, pword, rpword)
      VALUES ('$fname','$lname',  '$mb_num', '$city', '$distr', '$provin', '$uname', '$pword', '$rpword' )");


      // $sql = "INSERT INTO `register`(`ID`, `fnam`, `lname`, `mb_num`, `city`, `distr`, `provin`, `uname`, `pword`, `rpword`)
      //           VALUES ('$ID', '$fname', '$lname', '$mb_num', '$city', '$distr', '$provin', '$uname', '$pword', 'rpword')";
      //
      // $result = $conn->query($sql);

   }
?>
<body>
  <div class="pill-nav">

  <nav class="nev">

	<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;More</span>

  <a class="active" href="#home">Home</a>
  <a href="#about us">About us</a>
  <a href="#contact us">Contact us</a>

  <img src="../Images/picture.jpg" class="img">


  </nav>

    <img src="../Images/Samarasingha land sale.png" class="logo">
	<input type="text" placeholder="Search.." class="search">

  </div>
   <input type="button" value="register" class="reg">
    <input type="button" value="login" class="log">




  <div id="myNav" class="overlay">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <div class="overlay-content">
      <a href="#">Sale</a>
      <a href="#">Land List</a>
      <a href="#">Career</a>
      <a href="#">News</a>
      <a href="#">FAQ</a>
    </div>
 </div>

 <div class="bg-pic">
  <img src="../Images/land picture.jpg" style="width:100%; height :400px;">
  <div class="centered">SAMARASINGHE <br> LAND <br> SALE </div>

</div>
<div>
	<h1 style="text-align:center;">Register Now</h1>
<div>

	<form action = "register.php" method = "POST" name="form1">
	<label for="fname">First Name:</label><br>
	<input type="fill" id="fname" name="fname"><br>
	<label for="lname">Last Name:</label><br>
	<input type="fill" id="lname" name="lname"><br>
	<label for="mb_num">Mobile Number:</label><br>
	<input type="fill" id="mb_num" name="mb_num"><br>
	<label for="city">City:</label><br>
	<input type="fill" id="city" name="city"><br>
	<label for="distr">District:</label><br>
	<input type="fill" id="distr" name="distr"><br>
	<label for="provin">Province:</label><br>
	<input type="fill" id="provin" name="provin"><br>
	<label for="uname">Username:</label> <br>
	<input type="fill" id="uname" name="uname"><br>
	<label for="pword">Password:</label> <br>
	<input type="fill" id="pword" name="pword"><br>
	<label for="rpword">Repeat Password:</label> <br>
	<input type="fill" id="rpword" name="rpword"><br>
	<br>
	<input type="submit" class="sbtn" value="Registeration" name = "Submit">
</div>
	</div>
	</form>
</div>



</body>
</html>
