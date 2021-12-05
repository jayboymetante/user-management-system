<?php
require 'connect.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['first_name']) && isset($_POST['middle_name'])&& isset($_POST['last_name'])&& isset($_POST['address'])){
        $sql = "INSERT INTO user_info (first_name,middle_name,last_name,address) VALUES ('".$mysqli->real_escape_string($_POST['first_name'])."', '".$mysqli->real_escape_string($_POST['middle_name'])."','".$mysqli->real_escape_string($_POST['last_name'])."','".$mysqli->real_escape_string($_POST['address'])."')";

        if ($mysqli->query($sql) === TRUE) {
        echo "New record created successfully";
        } 
        else{
         die("failed: " . $mysqli->error);
        }
        header('Location: index.php');
    }
}
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <div id="header">
        <h1>Add User info</h1>
    </div>
    <br>
    <form action="/user-management-system/add.php" method="POST" >
        first_name: <input type="text" name="first_name" value="" required> <br>
        middle_name: <input type="text" name="middle_name" value="" required> <br>
        last_name: <input type="text" name="last_name" value="" required> <br>
        address: <input type="text" name="address" value="" required></input> <br>
        <input type="submit" value="Add">
        <hr>
    </form>
</body>
</html>
