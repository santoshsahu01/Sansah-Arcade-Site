
<?php

session_start();



$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'config.php';
    $username = $_POST["username"];
    $password = $_POST["password"]; 
    
     
    // $sql = "Select * from users where username='$username' AND password='$password'";
    $sql = "Select * from users where username='$username' and password = '$password'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1){
            $login = true;
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;              
            header("location: welcome.php");
        } 
        else{
            $showError = "Invalid Credentials";
        }
    }

              
?>
<?php
$title = "Registered Teams";                   
include 'assests/php/header.php';                 
?> 

<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
</head>




<style>    
    .container {
      width: 400px;
      margin: 0 auto;
      padding: 20px;
      background-color: #f2f2f2;
      border-radius: 5px;
    }
    
    .btn {
    padding: 10px;
    background-color: #3498db;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
}

.btn:hover {
    background-color: #2184c4;
}

    
    
    .alert{

width:80%;
height:50%;
padding:5px;

border-radius:20px;

background-color: azure;
}

    
    
    
    
    
    
    
    
    </style>
<body>


<div class="container">


<div class="alert">
<?php
    if($login){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> You are logged in
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div> ';
    }
    if($showError){
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> '. $showError.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div> ';
    }
    ?>
 
 </div>

  <h1>Login</h1><br><br>

  <h2><a href="login2/signup.php">Signup</a></h2><br><br>
  <form action="login.php" method="post">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username"><br><br>
    
    <label for="password">Password:</label>
    <input type="password" id="password" name="password"><br><br>
    
    <input class="btn" type="submit" value="Login">
  </form>
  </div>
</body>
</html>


