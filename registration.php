<?php
if (!isset($_SESSION)) { session_start(); }
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
            echo "You Have been Registered";
       
        } 
        else{
         die("failed: " . $mysqli->error);
        }
       
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<title>Vaccination Form</title>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>Document</title>
    <link rel="stylesheet" href="registration_design.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap');
        </style>
</head>
<body>  
    <a href="login.php"><button type="button">Login</button></a> 
    <div>
        <form action"registration.php" method="post">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <img id= "tabogon" src="tabogon logo.png" alt="tabogonlogo">
                    <img id= "cebu" src="cebulogo.png" alt="cebulogo">
                    <h1>VACCINE INFORMATION</h1>
                   <p>Online Registration</p>
                   <hr class="mb-3"></div>
                <div class = "insform">
                   <label for="first_name"><b>First Name</b></label>
                   <input class="form-control" id="first_name" type="text" name="first_name" required><br>

                   <label for="middlename"><b>Middle Name</b></label>
                   <input class="form-control" id="middle_name" type="text" name="middle_name" required><br>

                   <label for="lastname"><b>Last Name</b></label>
                   <input class="form-control" id="last_name" type="text" name="last_name" required> <br>
                
                   <label for="gender" ><b>Gender</b></label required>  
                          <select class="form-control" id="gender"  name="gender">
                               <option value=""></option>
                               <option value="male">Male</option>
                               <option value="female">Female</option>
                           </select>  
                    <br>
                    <label for="age"><b>Age</b></label>
                    <input class="form-control" id="age" type="text" name="age" required>
                    <br>
                    <label for="mobile_number"><b>Mobile Number</b></label>
                    <input class="form-control" id="mobile_number" type="text" name="mobile_number" required>
                    <br>
                  
                   <label for="email_address"><b>Email Address</b></label>
                   <input class="form-control" id="email_address" type="email" name="email_address" required>
                        <br>
                        <label for="email_address"><b>Birthday</b></label>
                        <input class="form-control" id="birth_date" type="date" name="birth_date" required>
                        </br>
                   <br>
                   <label for="citizenship" ><b>Citizenship</b></label required>  
                          <select class="form-control" id="citizenship" name="citizenship">
                               <option value="filipino">Filipino</option>
                               <option value="american">American</option>
                               <option value="british">British</option>
                           </select>  
                           <br>
                           <label for="purok" ><b>Purok</b></label required>  
                          <select class="form-control" id="purok" name="purok">
                               <option value=""></option>
                               <option value="chicago">Chicago</option>
                               <option value="tabili">Tabili</option>
                               <option value="gumamela">Gumammela</option>
                           </select> 
                           <br>
                       <label for="address"><b>Address</b></label>
                       <input class="form-control" id="address" type="text" name="address" required> 
                       <br>
                       <label for="civil_status" ><b>Civil Status</b></label required>  
                          <select class="form-control" id="civil_status" name="civil_status">
                               <option value=""></option>
                               <option value="single">Single</option>
                               <option value="married">Married</option>
                               <option value="divorced">Divorced</option>
                               <option value="widowed">Widowed</option>
                           </select> 
                           <br>
                       <label for="weight"><b>Weight</b></label>
                       <input class="form-control" id="weight" type="text" name="weight" required>
                       <br>
                       <label for="height"><b>Height</b></label>
                       <input class="form-control" id="height" type="text" name="height" required>
                       <br>
                       <label for="comorbidities"><b>Comorbidities</b></label>
                       <input class="form-control"  id="comorbidities" type="text" name="comorbidities" required>
                       <br>
                       <br>
                   
                   <input class="btn btn-primary" type="submit" id="submitted"  name="create" value="Submit">

                   
                
                </div>
               </div>
            </div>
          </div> 
        </form> 
    </div>   
    
     </script>
</body>
</html>
