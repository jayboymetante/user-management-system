<?php
require 'core.php ';
require 'connect.php';

if (loggedin()) {

    echo   'You\'re Log in, ' . $_SESSION['username'] . ''; ?>
    <!DOCTYPE html>
    <html>
<head>
<link rel="stylesheet" href="resident_info_design.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<form action="" method="get">
    <div class="searchbar">
        <input type="text" class="searchbar__input" name="q" placeholder="Search Data">
        <button type="submit" class="searchbar__button">
            <i class="material-icons">search</i>
        </button>
    </div>
    <body>

    <!-- Page Content -->
   
            <table class="content-table">
                
            <thead>
                <tr>
                    <th>Id</th>
                    <th>First Name</th>
                    <th>Middle Name</th>
                    <th>Last Name</th>
                    <th>Gender</th>
                    <th>Age</th>
                    <th>Mobile</th>
                    <th>Email</th>
                    <th>Birthday</th>
                    <th>Citizenship</th>
                    <th>Purok</th>
                    <th>Civil Status</th>
                    <th>Address</th>
                    <th>Weight</th>
                    <th>Height</th>
                    <th>Comorbidities</th>


                    
                    <th>Action</th>
                </tr>
                </thead>  
                <?php
                $query = "SELECT * FROM  user_info";
                $result = $mysqli->query($query);
                while ($data = $result->fetch_assoc()) {
                    echo "<td>";
                    echo "$data[user_info_id]";
                echo "</td>";
                echo "<td>";
                    echo "$data[first_name]";
                echo "</td>";
                echo "<td>";
                    echo "$data[middle_name]";
                echo "</td>";
                echo "<td>";
                    echo "$data[last_name]";
                echo "</td>";
                echo "<td>";
                    echo "$data[gender]";
                echo "</td>";
                echo "<td>";
                    echo "$data[age]";
                echo "</td>";
                echo "<td>";
                    echo "$data[mobile_number]";
                echo "</td>";
                echo "<td>";
                    echo "$data[email_address]";
                echo "</td>";
                echo "<td>";
                    echo "$data[birth_date]";
                echo "</td>";
                echo "<td>";
                    echo "$data[citizenship]";
                echo "</td>";
                echo "<td>";
                    echo "$data[purok]";
                echo "</td>";
                echo "<td>";
                    echo "$data[civil_status]";
                echo "</td>";
                echo "<td>";
                    echo "$data[address]";
                echo "</td>";
                echo "<td>";
                    echo "$data[weight]";
                echo "</td>";
                echo "<td>";
                    echo "$data[height]";
                echo "</td>";
                echo "<td>";
                    echo "$data[comorbidities]";
                echo "</td>";
                echo "<td>";
                echo ' <a href="delete.php?user_info_id='.$data["user_info_id"].'">Delete';
                echo ' <a href="edit.php?user_info_id='.$data["user_info_id"].'">Update';
                    
                echo "</td>";
            echo "</tr>";           
                }
                ?>   
            </table>  
 
        
    </div>
 </div>
   
    </body>
    </html>
<?php } else {
    // include 'login.php';
    header('Location: resident_info.php');
}
?>