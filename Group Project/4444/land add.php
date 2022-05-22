<?php
include_once 'Conect.php';

?>
<!DOCTYPE html>
<html>
<head>
    <title>Insert Image in MySql using PHP</title>
</head>
<body>
<link rel="stylesheet" type="text/css" href="Admin.css">

<form action="land Add Code.php" method="post" enctype="multipart/form-data" >

    <input type="file" name="image" />
    







<div class= "from-group" >
<lebel for = ""> Location </lebel>
<input type = "text" name ="Location" placeholder="Enter the location">

</div>


<div class="from-group" >
<lebel for = "">Land Size</lebel>
<input type = "text" name ="Land_Size"  placeholder="Enter Land size">

</div>





<div class= "from-group" >
<lebel for = "">Land Facilites </lebel>
<input type = "text" name ="Land_Facilites" placeholder="Enter Land faciilites"> 

</div>

<div class= "from-group" >
<lebel for = "">Land Price </lebel>
<input type = "text" name ="Land_Price" placeholder="Enter land price">

</div>




<input type="submit" name="savebtn" value="submit">

</form>

  </body>
</html>




<?php








 


?>





 


