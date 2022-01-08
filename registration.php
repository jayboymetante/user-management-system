<?php
require 'connect.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['first_name']) 
      && isset($_POST['middle_name'])
      && isset($_POST['last_name'])
      && isset($_POST['gender'])
      && isset($_POST['age'])
      && isset($_POST['mobile_number'])
      && isset($_POST['email_address'])
      && isset($_POST['birth_date'])
      && isset($_POST['citizenship'])
      && isset($_POST['purok'])
      && isset($_POST['address'])
      && isset($_POST['civil_status'])
      && isset($_POST['weight'])
      && isset($_POST['height'])
      && isset($_POST['comorbidities'])){



        $sql = "INSERT INTO user_info (first_name,middle_name,last_name,gender,age,mobile_number,email_address,birth_date,citizenship,purok,address,civil_status,weight,height,comorbidities) 
        VALUES('".$mysqli->real_escape_string($_POST['first_name'])."', '"
                 .$mysqli->real_escape_string($_POST['middle_name'])."','"
                 .$mysqli->real_escape_string($_POST['last_name'])."','"
                 .$mysqli->real_escape_string($_POST['gender'])."','"
                 .$mysqli->real_escape_string($_POST['age'])."','"
                 .$mysqli->real_escape_string($_POST['mobile_number'])."','"
                 .$mysqli->real_escape_string($_POST['email_address'])."','"
                 .$mysqli->real_escape_string($_POST['birth_date'])."','"
                 .$mysqli->real_escape_string($_POST['citizenship'])."','"
                 .$mysqli->real_escape_string($_POST['purok'])."','"
                 .$mysqli->real_escape_string($_POST['address'])."','"
                 .$mysqli->real_escape_string($_POST['civil_status'])."','"
                 .$mysqli->real_escape_string($_POST['weight'])."','"
                 .$mysqli->real_escape_string($_POST['height'])."','"
                 .$mysqli->real_escape_string($_POST['comorbidities'])."')";

        if ($mysqli->query($sql) === TRUE) {
        echo "New record created successfully";
        } 
        else{
         die("failed: " . $mysqli->error);
        }
       
    }
}
?>
<html>
<head>
<title>Register</title>
<link rel="stylesheet" href="registrationdesign.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<nav>
         <div class="logo">
            Tabogon
         </div>
         <input type="checkbox" id="click">
         <label for="click" class="menu-btn">
         <i class="fas fa-bars"></i>
         </label>
         <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Button</a></li>
            <li><a href="#">Button</a></li>
            <li><a href="#">Button</a></li>
            <li><a href="login.php">Sign in</a></li>
         </ul>
      </nav>
    <div>
        
        
        <div class="user_form" >
            <div class="container">
                <div class="title">Registration</div>
                <form action="#"  method="post" > 
                    <div class="user-details">
                            <div class="input-box">
                            <span class="details">First Name</span>
                            <input type="text" id="first_name"  name="first_name" placeholder="Enter your name" required>
                            </div>
                            <div class="input-box">
                                    <span class="details">Middle Name</span>
                                    <input type="text" id="middle_name"  name="middle_name" placeholder="Enter your middle name" required>
                                </div>
                                <div class="input-box">
                                    <span class="details">Last Name</span>
                                    <input type="text" id="last_name" name="last_name" placeholder="Enter your Last name" required>
                                </div>
                            
                                <div class="input-box">
                                    <span class="details">Gender</span>
                                    <select  class="details" id="gen"name="gender" >
                                            <option value="">---Enter your gender---</option>
                                            <option value="male">male</option>
                                            <option value="female">female</option>
                                    </select>
                                </div>
                                <div class="input-box">
                                    <span class="details">Age</span>
                                    <input type="text" id="age" name="age" placeholder="Enter your Last name" required>
                                </div>
                                <div class="input-box">
                                    <span class="details">Mobile Number</span>
                                    <input type="text" id="mobile_number" name="mobile_number" placeholder="###-###-###-###" required>
                                </div>
                                <div class="input-box">
                                    <span class="details">Email Address</span>
                                    <input type="text" id="email_address" name="email_address" placeholder="(example)@johndoe@gmail.com" required>
                                </div>
                                <div class="input-box">
                                    <span class="details">Birthday</span>
                                    <input type="date" id="birth_date"  name="birth_date"  required> 
                                </div>
                                <div class="input-box">
                                    <span class="details">Citizenship</span>
                                    <input type="text" list="citizen"  id="citizenship" name="citizenship" placeholder="Enter your Citizenship" required>
                                    <datalist id="citizen">
                                        <option value="Filipino">
                                        <option value="American">
                                        <option value="British">
                                        </option>
                                    </datalist>
                                </div>
                                <div class="input-box">
                                    <span class="details">Purok</span>
                                    <input type="text" list="prk" id="purok" name="purok" placeholder="Enter your purok" required>
                                    <datalist id="prk">
                                        <option value="Chicago">
                                        <option value="Tabili">
                                                <option value="Tambis">
                                            </option>
                                    </datalist>
                                </div>
                                <div class="input-box">
                                    <span class="details">Address</span>
                                    <input type="text"  id="address" name="address"  placeholder="Enter your Address" required>
                                </div>
                                <div class="input-box">
                                    <span class="details">Civil Status</span>
                                    <input type="text" list="civilstatus" id="civil_status" name="civil_status" placeholder="Enter your Status" required>
                                    <datalist id="civilstatus">
                                        <option value="Single">
                                        <option value="Maried">
                                                <option value="Divorced">
                                            </option>
                                    </datalist>
                                </div>
                                <div class="input-box">
                                    <span class="details">Weight</span>
                                    <input type="text"  id="weight" name="weight" placeholder="Enter your Weight" required>
                                </div>
                                <div class="input-box">
                                    <span class="details">Height</span>
                                    <input type="text" id="height" name="height" placeholder="Enter your Height" required>
                                </div>
                                <div class="input-box">
                                <span class="details">Comorbidities</span>
                                <input type="text" list="como" id="comorbidities" name="comorbidities" placeholder="Enter your Comorbidities" required>
                                <datalist id="como">
                                    <option value="With Allergy">
                                    <option value="Without Allergy">
                                            <option value="Covid 19 history">
                                        </option>
                                </datalist>
                            </div>
                        </div>
                            <div class="button">
                             <input type="submit" id="submitted" name="create"   value="Register">
                        </div>
                    </div>  
                </form>
            </div>
        </div>
    </body>
</html>

