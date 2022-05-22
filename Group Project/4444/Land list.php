<!DOCTYPE html>
<html>
<head>
    
    
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="home.css">
    <link rel="stylesheet" type="text/css" href="Land list.css">
   

 <script src="home.js"></script>

</head>
<body>
  <div class="dev">
    
        
    
    <nav class="nev"> 
      
       
        <span  onclick="openNav()">&#9776; More</span>

       <a href=#webpage> Home </a>
       <a href=#webpage>  About us  </a>
       <a href=#webpage>Contacts us</a> 
       
       <img src="picture.jpg" class="img">
     
   </nav> 
   <input type="text" placeholder="Search.." class="search">
    <img src="Samarasingha land sale.png" class="logo">
    
   

    
   
   
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


 <?php

include("conect.php");

$sql="SELECT * FROM land;";
$result = mysqli_query($conn,$sql);
?>

<?php  while($row = mysqli_fetch_assoc ($result)){?>




<div class="card">
 <img src = "<?php echo $row["Image"]?>" class="landimg" >
  <h1><?php echo $row ["Location"]?></h1>
  <p class="price"><?php echo $row ["Land_Price"]?> </p>
  <p><?php echo $row ["Land_Facilites"]?></p>
  <p><?php echo $row ["Land_Size"]?>  </p>
  <p><button>Buy</button></p>
</div>


<?php
}
?>