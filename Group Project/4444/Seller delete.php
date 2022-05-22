<?php
include_once 'Conect.php';
$sql = "DELETE FROM Seller WHERE Seller_Id='" . $_GET["Seller_Id"] . "'";
if (mysqli_query($conn, $sql)) {
    header('Location: Seller.php'); 
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>