<?php

include_once'Conect.php';

if(isset($_POST['updatebtn']))
{
    $id = $_GET['LM_Id'];
    $LM_Name = $_POST['LM_Name'];
    $Email = $_POST['Email'];
    $NIC = $_POST['NIC'];
    $Phone_Number  = $_POST['Phone_Number'];
    $Username = $_POST['User_name'];
    $Password = $_POST['Password'];

    $query = "UPDATE land_manager SET LM_Name='$LM_Name', Email='$Email', NIC='$NIC' , Phone_Number='$Phone_Number' , User_name='$Username', Password= $Password' WHERE LM_Id'='$id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Updated";
        $_SESSION['status_code'] = "success";
       // header('Location: land manager.php'); 
        echo "Your Data is Updated";
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT Updated";
        $_SESSION['status_code'] = "error";
      //  header('Location: land manager.php'); 
        echo "Your Data is  NOT Updated";
    }
}

?>
