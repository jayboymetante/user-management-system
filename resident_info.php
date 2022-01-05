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

                /* Button used to open the contact form - fixed at the bottom of the page */
    .open-button {
    background-color: #555;
    color: white;
    padding: 16px 20px;
    border: none;
    cursor: pointer;
    opacity: 0.8;
    position: fixed;
    bottom: 23px;
    right: 28px;
    width: 280px;
    }

    /* The popup form - hidden by default */
    .form-popup {
    display: none;
    position: fixed;
    bottom: 0;
    right: 15px;
    border: 3px solid #f1f1f1;
    z-index: 9;
    }

    /* Add styles to the form container */
    .form-container {
    max-width: 300px;
    padding: 10px;
    background-color: white;
    }

    /* Full-width input fields */
    .form-container input[type=text], .form-container input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    border: none;
    background: #f1f1f1;
    }

    /* When the inputs get focus, do something */
    .form-container input[type=text]:focus, .form-container input[type=password]:focus {
    background-color: #ddd;
    outline: none;
    }

    /* Set a style for the submit/login button */
    .form-container .btn {
    background-color: #04AA6D;
    color: white;
    padding: 16px 20px;
    border: none;
    cursor: pointer;
    width: 100%;
    margin-bottom:10px;
    opacity: 0.8;
    }

    /* Add a red background color to the cancel button */
    .form-container .cancel {
    background-color: red;
    }

    /* Add some hover effects to buttons */
    .form-container .btn:hover, .open-button:hover {
    opacity: 1;
    }
       </style> 
    <body>

    <!-- Page Content -->



    
    <h2>Users List <a href="add.php"><button type="button" >Add</button></a>  </h2>
    
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
  </form>
</div>




    </div>
    <script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>

        
    </body>
    </html>
<?php } else {
    // include 'login.php';
    header('Location: resident_info.php');
}
?>