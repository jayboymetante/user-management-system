<?php
require 'connect.php';
if(count($_POST)>0) {
    mysqli_query($mysqli,"UPDATE user_info set user_info_id='" . 
    $_POST['user_info_id'] . "', 
    first_name='" . $_POST['first_name'] . "', 
    middle_name='" . $_POST['middle_name'] . "', 
    last_name='" . $_POST['last_name'] . "' ,
    gender='" . $_POST['gender'] . "',
    age='" . $_POST['age'] . "',
    mobile_number='" . $_POST['mobile_number'] . "',
    email_address='" . $_POST['email_address'] . "',
    birth_date='" . $_POST['birth_date'] . "',
    citizenship='" . $_POST['citizenship'] . "',
    purok='" . $_POST['purok'] . "',
    address='" . $_POST['address'] . "',
    civil_status='" . $_POST['civil_status'] . "',
    weight='" . $_POST['weight'] . "',
    height='" . $_POST['height'] . "',
    comorbidities='" . $_POST['comorbidities'] . "'
    WHERE user_info_id='" . $_POST['user_info_id'] . "'");
    header('Location:  resident_info.php');
    }
    $result = mysqli_query($mysqli,"SELECT * FROM user_info WHERE user_info_id='" . $_GET['user_info_id'] . "'");
    $row= mysqli_fetch_array($result);


?>
<html>
    <head>
      <title>Update Employee Data</title>
      <link rel="stylesheet" href="edit_design.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
<body>
     <div class="user_form"> 
            <div class="container">
              <div class="title">Update Resident Data</div>
                 <form action="#" name="frmUser"   method="post" action="edit.php">
                     <div><?php if(isset($message)) { echo $message; } ?>
                    <div class="user-details">
                              
                            
                            <input type="hidden" name="user_info_id" class="txtField" value="<?php echo $row['user_info_id']; ?>">
                         
                        <div class="input-box">
                            
                           <span class="details">First Name</span>
                            <input type="text" name="first_name" class="txtField" value="<?php echo $row['first_name']; ?>">
                            
                        </div>

                        <div class="input-box">       
                          <span class="details">Middle Name</span>
                          <input type="text" name="middle_name" class="txtField" value="<?php echo $row['middle_name']; ?>">
                        </div>
                        <div class="input-box">            
                           <span class="details">Last Name</span> 
                           <input type="text" name="last_name" class="txtField" value="<?php echo $row['last_name']; ?>">
                        </div>
                              <div class="input-box">
                                    <span class="details">Gender</span>
                                    <select class="select" type="text" value="<?php echo $row['gender']; ?>" name="gender" id="gender"  >
                                            
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                </div>
                                <div class="input-box">
                                    <span class="details">Age</span>
                                    <input type="text" id="age" name="age" placeholder="Enter your age" value="<?php echo $row['age']; ?>" required>
                                </div>
                                <div class="input-box">
                                    <span class="details">Mobile Number</span>
                                    <input type="text" id="mobile_number" name="mobile_number"  value="<?php echo $row['mobile_number']; ?>" required>
                                </div>
                                <div class="input-box">
                                    <span class="details">Email</span>
                                    <input type="text" id="email_address" name="email_address"  value="<?php echo $row['email_address']; ?>" required>
                                </div>
                                <div class="input-box">
                                    <span class="details">Birthday</span>
                                    <input type="date" id="birth_date" name="birth_date"  value="<?php echo $row['birth_date']; ?>" required>
                                </div>
                                <div class="input-box">
                                    <span class="details">Citizenship</span>
                                    <select class="select" type="text" value="<?php echo $row['citizenship']; ?>"  name="citizenship" id="citizenship">
                                            
                                            <option value="filipino">Filipino</option>
                                            <option value="american">American</option>
                                        </select>
                                </div>
                                <div class="input-box">
                                    <span class="details">Purok</span>
                                    <select class="select" type="text" value="<?php echo $row['purok']; ?>" name="purok" id="purok"  >
                                            <option value="hawaii">Hawaii</option>
                                            <option value="bombil">Bombil</option>
                                        </select>
                                </div>
                                <div class="input-box">
                                    <span class="details">Address</span>
                                    <input type="text" id="address" name="address"  value="<?php echo $row['address']; ?>" required>
                                </div>
                                <div class="input-box">
                                    <span class="details">Civil Status</span>
                                    <select class="select" type="text"  name="civil_status" value="<?php echo $row['civil_status']; ?>" id="civil_status">
                                            <option value="single">Single</option>
                                            <option value="married">Married</option>
                                            <option value="divorced">Divorced</option>
                                        </select>
                                </div>
                                <div class="input-box">
                                    <span class="details">Weight</span>
                                    <input type="text"  id="weight" name="weight" value="<?php echo $row['weight']; ?>" placeholder="Enter  Weight" required>
                                </div>
                                <div class="input-box">
                                    <span class="details">Height</span>
                                    <input type="text" id="height" name="height" value="<?php echo $row['height']; ?>"  placeholder="Enter  Height" required>
                                </div>
                                <div class="input-box">
                                    <span class="details">Comorbidities</span>
                                    <select class="select" type="text" value="<?php echo $row['comorbidities']; ?>"    name="comorbidities" id="comorbidities">
                                            <option value="covid 19 history">Covid 19 history</option>
                                            <option value="with allergy">With Allergy</option>
                                            <option value="without allergy">Without Allergy</option>
                                        </select>
                                </div>
                        <div class="button">
                            <input type="submit" id="submitted" name="create"   value="Update">
                        </div>
                    </div>   
                 </form>
            </div>
     </div>
</body>
</html>