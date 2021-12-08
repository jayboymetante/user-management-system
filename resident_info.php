<?php
require 'core.php ';
require 'connect.php';

if (loggedin()) {

    echo   'You\'re Log in, ' . $_SESSION['username'] . ''; ?>
    <!DOCTYPE html>
    <html>
     <style>
           * {
              font-family: sans-serif; 
            }
            .content-table {
                border-collapse: collapse;
                margin: 25px 0;
                font-size: 0.9em;
                min-width: 400px;
                border-radius: 5px 5px 0 0;
                overflow: hidden;
                box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
            }
            .content-table thead tr {
                background-color: #009879;
                color: #ffffff;
                text-align: left;
                font-weight: bold;
            }
            .content-table th,
            .content-table td {
                padding: 12px 15px;
            }
            .content-table tbody tr {
               border-bottom: 1px solid #dddddd;
            }
            .content-table tbody tr:nth-of-type(even) {
              background-color: #f3f3f3;
            }
            .content-table tbody tr:last-of-type {
              border-bottom: 2px solid #009879;
            }

            .content-table tbody tr.active-row {
                font-weight: bold;
                color: #009879;
            }
       </style> 
    <body>

    <!-- Page Content -->

    <h2>Users List <a href="add.php"><button type="button">Add</button></a> </h2>
         <table class="content-table">
          <thead>
             <tr>
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
                echo "<tr>";
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
                        echo ' <a href="edit.php"><button type="button">Edit</button></a>';
                        
                    echo "</td>";
                echo "</tr>";
            }
            ?>   
        </table>  




    </div>
        
    </body>
    </html>
<?php } else {
    // include 'login.php';
    header('Location: resident_info.php');
}
?>