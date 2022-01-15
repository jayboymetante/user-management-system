
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
            <a href="index.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">Home</a>

                <a href="vaccine_stock.php" class="list-group-item list-group-item-action bg-transparent active second-text fw-bold">Vaccine Stock Information</a>
                <a href="logout.php" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold">Log out</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Vaccine Data</h2>
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
            <div class="row my-5">
                    <h3 class="fs-4 mb-3">
                    <div class="container">
                            <div class="search_wrap search_wrap_1">
                                    <div class="search_box">
                                       <input type="text" class="input" placeholder="search...">
                                        <div class="btn btn_common">
                                        <i class="fas fa-search"></i>
                                    </div>
                            </div>
                        </div>
                    <a href="vaccine_stock_data.php"><button class="btn btn-primary">Add Vaccine Stock</button></a>
                    </h3>      
                    <div class="col">
                        <table class="table bg-white rounded shadow-sm  table-hover">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Vaccine Brand</th>
                            <th>Stock Quantity</th>
                            <th>Date Recieved</th> 
                        </tr>
                    </thead>  
                            <?php
                            $query = "SELECT * FROM  vaccine_stocks";
                            $result = $mysqli->query($query);
                            $index=0;
                            while ($data = $result->fetch_assoc()) {
                                echo "<td>";
                                echo ++$index;
                            echo "</td>";
                            echo "<td>";
                                echo "$data[vaccine_brand]";
                            echo "</td>";
                            echo "<td>";
                                echo "$data[stock_quantity]";
                            echo "</td>";
                            echo "<td>";
                                echo "$data[date_recieved]";
                            echo "</td>";
                            
                        echo "</tr>";           
                            }
                            ?>   
                </table>
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
