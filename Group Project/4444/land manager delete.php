<?php
include_once 'Conect.php';
$sql = "DELETE FROM land_manager WHERE LM_Id='" . $_GET["LM_Id"] . "'";
if (mysqli_query($conn, $sql)) {
    header('Location: land manager.php'); 
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>