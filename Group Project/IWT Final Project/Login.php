
<?php
    include "./config.php";
    if(isset($_POST["uname"])){

    $uname = $_POST["uname"]; // post method from form
    $rpword = $_POST["rpword"]; // post method from form

    $sql = "SELECT uname, rpword FROM register WHERE uname = '$uname' AND rpword = '$rpword'"; // Sql query for login

    $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0) {

            while($row = mysqli_fetch_assoc($result)) {

               if($uname == $row["uname"] && $rpword == $row["rpword"]) {


                header("location:FAQ.html"); // redirect to  profile page
                echo "<script>alert('Login sucessfull')</script>";

               }
             }

         }

        else {

            echo "<script>alert('Invaild Login')</script>"; // if password or user name incorrect display invaild
        }
    }
 $conn->close(); // close connection
?>




<!DOCTYPE html>
<html>
<head>
  <title>LOG IN | Samarasingha Land Sale</title>
    <link rel="stylesheet" href="Login.css">
    <script src="Login.js"></script>
</head>

<body>

  <div class="dev">
    <nav class="nev">
       <span  onclick="openNav()">&#9776; More</span>
        <a href=#webpage> Home </a>
        <a href=#webpage>  About us  </a>
        <a href=#webpage>Contacts us</a>
        <img src="Images/Profile.jpg" class="img">
     </nav>

     <input type="text" placeholder="Search.." class="search">
     <img src="Images/Logo.png" class="logo">

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

<!-- LOGIN FORM -->

<div class="bg-image" style="background-image: url('Images/login.jpg');">

<div class="loginbox">
  <img class="user" src="Images/User.png" alt="User icon">
  <h1>Login Here</h1>
  <form action = "Login.php" method="POST">
    <p>Username</p>
    <input type="text" name="uname" placeholder="Enter Username" value="">
    <p>Password</p>
    <input type="password" name="rpword" placeholder="Enter Password" value="">

    <input type="submit" name="submit" value="Login">

    <a href="#">Forgot your password?</a><br>
    <a href="#">Don't have an Account?</a>
  </form>

</div>
</div>




<!--
 <div class="footer">
    <a href="https://web.whatsapp.com/"><img src="pngegg (4).png" class="whatsapp"></a>
    <a href="https://twitter.com/i/flow/login?input_flow_data=%7B%22requested_variant%22%3A%22eyJsYW5nIjoiZW4ifQ%3D%3D%22%7D"><img src="clipart2517877.png" class="twitter"></a>
    <a href="https://www.instagram.com/?hl=en"><img src="Daco_781797.png" class="Instergram"></a>
    <a href="https://www.facebook.com"><img src="Popular-Logo-facebook-icon-png.png"  class="facebook"></a>
 </div>
-->

</body>
</html>
