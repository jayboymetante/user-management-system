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
        header('Location:  resident_info.php');
    }
}
?>
<html>
<head>

<head>

    <title>Add</title>
    
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<div>
         <form action"registration.php" method="post">
         <div class="container">
             <div class="row">
                 <div class="col-sm-3">
                    <h1>VACCINE INFORMATION</h1>
                    <p>Online Registration</p>
                    <hr class="mb-3">
                    <label for="first_name"><b>First Name</b></label>
                    <input class="form-control" id="firstname" type="text" name="first_name" required>

                    <label for="middle_name"><b>Middle Name</b></label>
                    <input class="form-control" id="middlename" type="text" name="middle_name" required>

                   <label for="last_name"><b>Last Name</b></label>
                    <input class="form-control" id="lastname" type="text" name="last_name" required> 

                    <label for="gender"><b>Gender</b></label>
                    <select class="form-control" id="gender"  name="gender">
                                <option value=""></option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                    </select>  


                    <label for="age"><b>Age</b></label>
                    <input class="form-control" id="age" type="text" name="age" required>

                    <label for="mobile_number"><b>Mobile Number</b></label>
                    <input class="form-control" id="mobile_number" type="text" name="mobile_number" required>

                    <label for="email_address"><b>Email Address</b></label>
                    <input class="form-control" id="email_address" type="email" name="email_address" required> 
                    
                    <label for="email_address"><b>Birthday</b></label>
                    <input class="form-control" id="birth_date" type="date" name="birth_date" required>
                    
                    <label for="citizenship" ><b>Citizenship</b></label required>  
                           <select class="form-control" id="citizenship" name="citizenship">
                                <option value="filipino">Filipino</option>
                                <option value="american">American</option>
                                <option value="british">British</option>
                            </select>  

                            <label for="purok" ><b>Purok</b></label required>  
                           <select class="form-control" id="purok" name="purok">
                                <option value=""></option>
                                <option value="chicago">Chicago</option>
                                <option value="tabili">Tabili</option>
                                <option value="gumamela">Gumammela</option>
                            </select> 
                        
                            <label for="address"><b>Address</b></label>
                        <input class="form-control" id="address" type="text" name="address" required> 
                        
                        <label for="civil_status" ><b>Civil Status</b></label required>  
                           <select class="form-control" id="civil_status" name="civil_status">
                                <option value=""></option>
                                <option value="single">Single</option>
                                <option value="married">Married</option>
                                <option value="divorced">Divorced</option>
                                <option value="widowed">Widowed</option>
                            </select> 
                        
                        <label for="weight"><b>Weight</b></label>
                        <input class="form-control" id="weight" type="text" name="weight" required>

                        <label for="height"><b>Height</b></label>
                        <input class="form-control" id="height" type="text" name="height" required>

                        <label for="comorbidities"><b>Comorbidities</b></label>
                        <input class="form-control"  id="comorbidities" type="text" name="comorbidities" required>


                    <hr class="mb-3">
                    <input class="btn btn-primary" type="submit" id="submitted" name="create" value="ADD">
                </div>
             </div>
           </div> 
         </form> 
     </div>   
     
      </script>
    </body>
</html>

