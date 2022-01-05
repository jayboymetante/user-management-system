<?php
require 'connect.php';
if(count($_POST)>0) {
    mysqli_query($mysqli,"UPDATE user_info set user_info_id='" . 
    $_POST['user_info_id'] . "', 
    first_name='" . $_POST['first_name'] . "', 
    middle_name='" . $_POST['middle_name'] . "', 
    last_name='" . $_POST['last_name'] . "' ,
    gender='" . $_POST['gender'] . "'
    WHERE user_info_id='" . $_POST['user_info_id'] . "'");
    $message = "Record Modified Successfully";
    }
    $result = mysqli_query($mysqli,"SELECT * FROM user_info WHERE user_info_id='" . $_GET['user_info_id'] . "'");
    $row= mysqli_fetch_array($result);


?>
<html>
<head>
<title>Update Employee Data</title>
</head>
<body>
<form name="frmUser" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">

</div>
Id: <br>
<input type="hidden" name="user_info_id" class="txtField" value="<?php echo $row['user_info_id']; ?>">
<br>
First Name: <br>
<input type="text" name="first_name" class="txtField" value="<?php echo $row['first_name']; ?>">
<br>
Middle Name :<br>
<input type="text" name="middle_name" class="txtField" value="<?php echo $row['middle_name']; ?>">
<br>
Last Name:<br>
<input type="text" name="last_name" class="txtField" value="<?php echo $row['last_name']; ?>">
<br>
Gender:<br>
<input type="text" name="gender" class="txtField" value="<?php echo $row['gender']; ?>">
<br>

<input type="submit" name="submit" value="Submit" class="buttom">

</form>
</body>
</html>