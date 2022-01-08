<?php
require 'core.php ';
require 'connect.php';

if (loggedin()) {

    echo   'You\'re Log in, ' . $_SESSION['username'] . ''; ?>
    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="index_style.css" />
    <title>Admin Dashboard</title>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><i
                    class=""></i>Welcome Admin</div>
            <div class="list-group list-group-flush my-3">
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text active"><i
                        class=""></i>Dashboard</a>
                        <a href="index.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">Residents</a>
                        <a href="vaccine_stock.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">Vaccine Stock Information</a>
                        <a href="logout.php" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold">Log out</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Dashboard</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            
        
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="container-fluid px-4">
                <div class="row g-3 my-2">
                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">
                                    <?php
                                    require 'connect.php';
                                    
                                    
                                  
                                    
                                    ?>

                                </h3>
                                
                            </div>
                            <i class=" border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">0</h3>
                                <p class="fs-5">Vaccine Stocks</p>
                            </div>
                            <i
                                class=" primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">0</h3>
                                <p class="fs-5">Vaccinated</p>
                            </div>
                            <i class="primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">0</h3>
                                <p class="fs-5">Unvaccinated</p>
                            </div>
                            <i class=" primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>
                </div>

                <div class="row my-5">
                    <h3 class="fs-4 mb-3">Get Vaccine</h3>
                    <div class="col">
                        <table class="table bg-white rounded shadow-sm  table-hover">
                        <thead>
                         <tr>
                            <th>Id</th>
                            <th>First Name</th>
                            <th>Middle Name</th>
                            <th>Last Name</th>
                            <th>Contact</th>
                            <th>Birthday</th>
                            <th>Address</th>
                            <th>Action</th>  
                            
                        </thead>
                          
                        <?php
            $query = "SELECT * FROM  user_info";
            $result = $mysqli->query($query);
            while ($data = $result->fetch_assoc()) {
                echo "<tr>";
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
                        echo "$data[mobile_number]";
                    echo "</td>";
                    
                    echo "<td>";
                        echo "$data[birth_date]";
                    echo "</td>";
                    
                    
                    echo "<td>";
                        echo "$data[address]";
                    echo "</td>";
                    
                    
                    
                    echo "<td>";
                    echo ' <a href="vaccine_data.php?user_info_id='.$data["user_info_id"].'">Edit';
                    echo ' <a href="vaccine_data_list.php?user_info_id='.$data["user_info_id"].'">Vaccine Data';
                    echo "</td>";
                echo "</tr>";
            }
            ?>   

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
        
    </script>
</body>

</html>
<?php } else {
    
    header('Location: login.php');
}
?>
