<?php
include_once 'Conect.php';
$sql = "DELETE FROM loan WHERE Loan_Id='" . $_GET["Loan_Id"] . "'";
if (mysqli_query($conn, $sql)) {
    header('Location: Loan.php'); 
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>