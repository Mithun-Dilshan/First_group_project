<?php
include_once 'config.php';
$sql = "DELETE FROM land WHERE Land_Id='" . $_GET["Land_Id"] . "'";
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
    echo "<a href='LandManager.php'>Back to land list</a>";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>
