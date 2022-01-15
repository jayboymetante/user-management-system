<?php
if (!isset($_SESSION)) { session_start(); }	
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
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login_design.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  </head>
  <body>
    <div class="container">
      <div class="wrapper">
        <div class="title"><span>Login</span></div>
        <form action="/user-management-system/login.php" method="POST" >
          <div class="row">
            <i class="fas fa-user"></i>
            <input type="username" name="username" placeholder="Email or Phone" required>
          </div>
          <div class="row">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" placeholder="Password" required>
          </div>
          <div class="row button">
            <input type="submit" value="Login">
          </div>
        </form>
      </div>
    </div>

  </body>
</html>


