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
                            <input type="text" name="gender" class="txtField" value="<?php echo $row['gender']; ?>">
                        </div>  
                        <div class="input-box">           
                            <span class="details">Age</span> 
                            <input type="text" name="age" class="txtField" value="<?php echo $row['age']; ?>">
                        </div>  
                        <div class="input-box">           
                            <span class="details">Mobile</span> 
                            <input type="text" name="mobile_number" class="txtField" value="<?php echo $row['mobile_number']; ?>">
                        </div>
                        <div class="input-box">           
                            <span class="details">Email Address</span> 
                            <input type="text" name="email_address" class="txtField" value="<?php echo $row['email_address']; ?>">
                        </div>
                        <div class="input-box">
                                    <span class="details">Birthday</span>
                                    <input type="date" name="birth_date"  class="txtField" value="<?php echo $row['birth_date']; ?>">
                        </div> 
                        <div class="input-box">           
                            <span class="details">Citizenship</span> 
                            <input type="text" name="citizenship" class="txtField" value="<?php echo $row['citizenship']; ?>">
                        </div>
                        <div class="input-box">
                                    <span class="details">Purok</span>
                                    <input type="text" list="prk"  name="purok" class="txtField" value="<?php echo $row['purok']; ?>">
                                    <datalist id="prk">
                                        <option value="Chicago">
                                        <option value="Tabili" >
                                                <option value="Tambis">
                                            </option>
                                    </datalist> 
                        </div>
                        <div class="input-box">           
                            <span class="details">Address</span> 
                            <input type="text" name="address" class="txtField" value="<?php echo $row['address']; ?>">
                        </div>
                        <div class="input-box">           
                            <span class="details">Weight</span> 
                            <input type="text" name="weight" class="txtField" value="<?php echo $row['weight']; ?>">
                        </div>
                        <div class="input-box">           
                            <span class="details">Height</span> 
                            <input type="text" name="height" class="txtField" value="<?php echo $row['height']; ?>">
                        </div>  
                        <div class="input-box">           
                            <span class="details">Comorbidities</span> 
                            <input type="text" name="comorbidities" class="txtField" value="<?php echo $row['comorbidities']; ?>">
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