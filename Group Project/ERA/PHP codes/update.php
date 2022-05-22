<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Profile</title>
   <style>
       input{
           width: 40%;
           height: 5%;
           border: 1px;
           border-radius:5px;
           padding: 10px 20px 12px 20px;
           margin: 10px 0px  15px 0px;
           box-shadow: 1px 1px 2px 1px grey;
       }
   </style>


</head>
<body>
    <center>
    <form action="" method="POST">
        <input type="text" name="UserName" placeholder="User Name"/><br>
        <input type="text" name="Password" placeholder="Password"/><br>
        <input type="text" name="EmailAddress" placeholder="Email Address"/><br>
        <input type="text" name="Mobile" placeholder="Mobile"/><br>

        <input type="submit" name="Update" value="UPDATE DATA"/>
    </form>
    </center>
  
</body>
</html>

<?php
$connection = mysqli_connect("localhost","root","");
$db= mysqli_select_db($connection,'land');

if(isset($_POST['Update']))
{
    $UserName =$_POST['User Name'];

    $query = "UPDATE 'profile' SET UserName='$_POST[User Name]', Password ='$_POST[Password]', EmailAddress ='$_POST[Email Address]', Mobile='$_POST[Mobile]', where UserNname=$_POST[User Name]";
    $query_run = mysqli_query($connection,$query);

    if($query_run)
    {
        echo '<script type="text/javascript"> alert("Data Updated")  </scrpt>';
    }
    else{
        echo '<script type="text/javascript"> alert("Data  Not Updated")  </scrpt>';
    }
}

?>