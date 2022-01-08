<?php
require 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['user_info_id']) 
      && isset($_POST['vaccine_administered'])
      && isset($_POST['date_administered'])
      && isset($_POST['number_of_dosage'])
      && isset($_POST['side_effects'])){



        $sql = "INSERT INTO vaccine_data (user_info_id,vaccine_administered,date_administered,number_of_dosage,side_effects) 
        VALUES('".$mysqli->real_escape_string($_POST['user_info_id'])."', '"
                 .$mysqli->real_escape_string($_POST['vaccine_administered'])."','"
                 .$mysqli->real_escape_string($_POST['date_administered'])."','"
                 .$mysqli->real_escape_string($_POST['number_of_dosage'])."','"
                 .$mysqli->real_escape_string($_POST['side_effects'])."')";
                 

        if ($mysqli->query($sql) === TRUE) {
        echo "New record created successfully";
        header("Location: vaccine_data_list.php?user_info_id=".$_POST['user_info_id']."");
        } 
        else{
         die("failed: " . $mysqli->error);
        }
        
    }
}
?>
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
                <form action"vaccine_data.php" method="post">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-3">
                                
                                <hr class="mb-3">
                                        <input type="hidden" name="user_info_id" value="<?php echo $_GET["user_info_id"]; ?>"> 
                                        <label for="vaccine_administered"><b>Vaccine Administered</b></label>
                                        <select class="form-control" name="vaccine_administered" id="vaccine">
                                            <option value="">--- Choose Vaccine---</option>
                                            <option value="Astrazeneca">Astrazeneca</option>
                                            <option value="Phizer">Phizer</option>
                                            <option value="Sinovac">Sinovac</option>
                                            <option value="Astra">Astra</option>
                                        </select>
                                        <label for="date_administered"><b>Date Administered</b></label>
                                        <input class="form-control" id="date_administered" type="date" name="date_administered" required>

                                        <label for="number_of_dosage"><b>Number of Dosage</b></label>
                                        <input class="form-control" id="number_of_dosage" type="text" name="number_of_dosage" required>
                                        <label for="side_effects"><b>Side Effects</b></label>
                                        <input class="form-control" id="side_effects" type="text" name="side_effects" required>  
                                    <hr class="mb-3">
                                <input class="btn btn-primary" type="submit" id="submitted" name="create" value="ADD">
                            </div>
                        </div>
                    </div> 
                </form> 
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

