<?php
include_once 'connect.php';
$sql = "DELETE FROM user_info WHERE user_info_id='" . $_GET["user_info_id"] . "'";
if (mysqli_query($mysqli, $sql)) {
    header('Location:  resident_info.php');
} else {
    echo "Error deleting record: " . mysqli_error($mysqli);
}
mysqli_close($mysqli);
?>