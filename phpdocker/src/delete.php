<?php
include_once 'dbConnection.php';
$sql = "DELETE FROM mytable WHERE id='" . $_GET["id"] . "'";
if (mysqli_query($conn, $sql)) {

echo "<script> alert('Deletion success')</script>";
echo "<script>window.location.href='index.php'</script>";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>