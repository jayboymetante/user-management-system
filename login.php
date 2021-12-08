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
<html>
<head>
    <link rel="stylesheet" href="login_design.css">   
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap');
        </style>
</head>
<body>
    
    <img src="bghos.jpg" alt="">
    <div class = "vec1"></div> 
    <div class = "vec4"></div>
    <div class = "vec3"></div>
    <div class = "vec2"></div>
   
    <img id="cblg" src="cebulogo.png" alt="cebu">
    <img id="tbgnlg" src="tabogon logo.png" alt="tabogon">
    
<div class="ins">
    
    <div id="header">   
        <h1>Tabogon Vaccination System</h1>
    </div>
    <br>
    <br>
    <form action="/user-management-system/login.php" method="POST" style="text-align:center;" >
        <label for="username"><b>Username</b></label><input type="text" name="username" value="" required> <br>
        <label for="password"><b>Password</b></label><input type="password" name="password" value="" required> <br>
        <input type="submit" id="btnsub" value="Log in">
       
    </form>
</div>
</body>
</html>
