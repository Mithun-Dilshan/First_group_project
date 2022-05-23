
<?php
    include "config.php";
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
    <link rel="stylesheet" href="CSS/Login.css">
    <link rel="stylesheet" href="CSS/footer.css">
    <script src="Js/Login.js"></script>
    <script src="https://kit.fontawesome.com/88d81e3dd6.js" crossorigin="anonymous"></script>
</head>

<body>

  <div class="dev">
    <nav class="nev">
       <span  onclick="openNav()">&#9776; More</span>
        <a href=#webpage> Home </a>
        <a href=#webpage>  About us  </a>
        <a href=#webpage>Contacts us</a>
        <img src="Image/Profile.jpg" class="img">
     </nav>

     <input type="text" placeholder="Search.." class="search">
     <img src="Image/Samarasingha land sale.png" class="logo">

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

<div class="bg-image" style="background-image: url('Image/login.jpg');">

<div class="loginbox">
  <img class="user" src="Image/User.png" alt="User icon">
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

<footer>
 <div class="footer-content">

   <h3>Samarasingha Land Sale</h3>
   <p>+94114548459<br>
   +94714348963</p>

   <ul class="socials">
     <li><a href="https://www.facebook.com/login.php"><i class="fa fa-facebook"></i></a></li>
     <li><a href="https://twitter.com/i/flow/login"><i class="fa fa-twitter"></i></a></li>
     <li><a href="https://myaccount.google.com/profile"><i class="fa fa-google-plus"></i></a></li>
     <li><a href="https://www.youtube.com/"><i class="fa fa-youtube"></i></a></li>
     <li><a href="https://www.linkedin.com/"><i class="fa fa-linkedin-square"></i></a></li>
  </ul>
</div>

</footer>

</body>
</html>
