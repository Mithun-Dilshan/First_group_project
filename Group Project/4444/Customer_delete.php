<?php
include_once 'Conect.php';
$sql = "DELETE FROM customer WHERE Customer_Id='" . $_GET["Customer_Id"] . "'";
if (mysqli_query($conn, $sql)) {
    header('Location: Customer.php'); 
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>