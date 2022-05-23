<!DOCTYPE html>
<html>
<head>
  <title>Feedback|Samarasingha Land Sale</title>
    <link rel="stylesheet" href="CSS/FAQ.css">
    <link rel="stylesheet" href="CSS/feedback.css">
    <link rel="stylesheet" href="CSS/footer.css">
    <script src="https://kit.fontawesome.com/88d81e3dd6.js" crossorigin="anonymous"></script>
    <script src="Js/FAQ.js"></script>
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

<!-- FEEDBACK FORM -->
<form class="feedback-form" method="POST" action="">
<fieldset>
  <legend>Feedback</legend>
    <div class="from-group">
      <!-- <label for = ""> Customer Name </label> -->
      <input type = "text" name ="C_name" placeholder="Your Name" class="txt" style="font-size:14px;" >
    </div>


    <div class= "from-group" >
      <!-- <label for = "">Feedback </label> -->
      <textarea id="Message" class="txt-area" name="message" placeholder="Your Feedback"></textarea>
    </div>

    <div class="btn">
      <input type="submit" name="savebtn" value="Submit" class="submit-btn">
    </div>

</fieldset>
</form>



<?php
  include("config.php");
    if(isset($_POST['savebtn']))
      {
        // $Feedback_Id = $_POST['Feedback_Id'];
        $C_name = $_POST['C_name'];
        $Feedback = $_POST['Feedback'];
        $sql = "INSERT INTO feedback (Feedback_Id,C_name,Feedback)
	      VALUES('$Feedback_Id','$C_name','$Feedback')";

   if(mysqli_query($conn, $sql))
    {
        // echo "completed";
	  }
   else
    {
		    echo "Error: " . $sql . " " . mysqli_error($conn);
	  }
	      mysqli_close($conn);
      }
?>


<?php
  include("config.php");

  $sql="SELECT * FROM Feedback;";
  $result = mysqli_query($conn,$sql);
?>

<table>
<?php
  while($row = mysqli_fetch_assoc ($result))
  {
?>
    <tr>

      <td><?php echo $row ["C_name"]?><td>
      <td><?php echo $row ["Feedback"]?><td>
    </tr>
<?php

  }
?>
</table>

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
