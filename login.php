<?php
require 'connect.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['username']) && isset($_POST['password'])){

        $username = $_POST['username'];
        $password = ($_POST['password']);

        $password_hash = ($password);
        if(!empty($username) && !empty($password)){
            $query = "SELECT * FROM `users` WHERE  `username` = '".$mysqli->real_escape_string($username)."' and `password` = '".$mysqli->real_escape_string($password_hash)."' ";
            if($result = $mysqli->query($query)){
                
                $query_num_rows = $result->num_rows;

                if($query_num_rows == 0){
                    echo 'Invalid Username or Password!';
                }else if ($query_num_rows == 1){
                    $result=$result->fetch_assoc();
                    $user_id = $result["user_id"];
                    $_SESSION['user_id'] = $user_id;
                    $_SESSION['username']=$result['username'];
                   
                    header('Location: index.php');
                }
            }{
                echo "Couldn't find your user account.";
            }
        }else {
            echo 'Supply username and password!';
        
        }
    }
}
?>


<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <div id="header">
        <h1>Tabogon Vaccination System</h1>
    </div>
    <br>
    <form action="<?php echo $current_file; ?>" method="POST" style="text-align:center;" >
        Username: <input type="text" name="username" value="" required> <br>
        Password: <input type="password" name="password" value="" required> <br>
        <input type="submit" value="Log in">
        <hr>
    </form>
</body>
</html>
