<?php
include_once 'Conect.php';
$sql = "DELETE FROM land WHERE Land_Id='" . $_GET["Land_Id"] . "'";
if (mysqli_query($conn, $sql)) {
    header('Location: Land.php'); 
    



} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>