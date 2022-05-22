<?php
include_once 'config.php';
$result = mysqli_query($conn,"SELECT * FROM land");
?>
<!DOCTYPE html>
<html>
 <head>
   <title>Land Manager Page| Samarasingha Land Sale</title>
   <link rel="stylesheet" href="Css/FAQ.css">
   <script src="Js/FAQ.js"></script>
   <link rel="stylesheet" href="Css/LandManager.css">
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
<!-- END OF THE HEADER    -->


<!-- LAND MANAGER PAGE -->

<?php
if (mysqli_num_rows($result) > 0) {
?>
<h2 style="text-align:center; padding:20px;">Land Manager Page</h2>
<div class="land-details">
<table class="land-details" style="width:99%; margin-left: 10px; margin-right: 10px;">
	<tr class="table-heading">
	  <td>Land_Id</td>
		<td>Location</td>
		<td>Land Size</td>
		<td>Land Facilities</td>
		<td>Land Price</td>
		<td>Image</td>
    <td>Delete</td>
    <td>Update</td>
	</tr>
	<?php
			$i=0;
			while($row = mysqli_fetch_array($result)) {
	?>
 <tr class="table-data">
	  <td><?php echo $row["Land_Id"]; ?></td>
		<td><?php echo $row["Location"]; ?></td>
		<td><?php echo $row["Land_Size"]; ?></td>
		<td><?php echo $row["Land_Facilities"]; ?></td>
		<td><?php echo $row["Land_Price"]; ?></td>
    <td><?php echo $row["Image"]; ?></td>
    <td><a href="LMdelete-process.php? Land_Id=<?php echo $row["Land_Id"]; ?>"><button style="width:80px;height:30px;border-radius:8px;" class="delete-btn" type="button" name="">Delete</button></a></td>
		<td><a href="LMupdate-process.php? Land_Id=<?php echo $row["Land_Id"]; ?>"><button style="width:80px;height:30px;border-radius:8px;";" class="update-btn" type="button" name="">Update</button></a></td>
  </tr>
			<?php
			$i++;
			}
			?>
</table>
</div>
 <?php
}
else
{
    echo "No result found";
}
?>
 </body>
</html>
