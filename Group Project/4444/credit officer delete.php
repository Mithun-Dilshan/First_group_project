<?php
include_once 'Conect.php';
$sql = "DELETE FROM creadit_officer WHERE CO_Id='" . $_GET["CO_Id"] . "'";
if (mysqli_query($conn, $sql)) {
    header('Location: credit officer.php'); 
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>