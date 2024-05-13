
  <?php
// Replace these details with your database credentials
include 'config.php';
$title = "Signup";                   
include 'header.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password']; // Remember to hash the password securely

  

  // Check if the username or email already exists
  $checkQuery = "SELECT id FROM users WHERE username = '$username' OR email = '$email'";
  $checkResult = $conn->query($checkQuery);

  if ($checkResult->num_rows > 0) {

    
    echo "Username or email already exists";


    
  } else {
    // Insert new user data into the database
    $insertQuery = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
    if ($conn->query($insertQuery) === TRUE) {

      // header("Location: login.php");

      echo "Sign up successful"; // Redirect or provide a success message
    } else {
      echo "Error: " . $insertQuery . "<br>" . $conn->error;
    }
  }
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Sign Up</title>


  <style>

.container {
      width: 400px;
      margin: 0 auto;
      padding: 20px;
      background-color: #f2f2f2;
      border-radius: 5px;
      text-align:center;

    }
  </style>
</head>
<body>


<div class="container">
  <h1>Sign Up</h1>

  <h2><a href="../login.php">login</a></h2><br>

  <br><h2><a href="../welcome.php">Welcome</a></h2> <br> <br>
  
  <form action="signup.php" method="post">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username"><br><br>
    
    <label for="email">Email:</label>
    <input type="text" id="email" name="email"><br><br>
    
    <label for="password">Password:</label>
    <input type="password" id="password" name="password"><br><br>
    
    <input type="submit" value="Sign Up">
  </form>

  </div>
</body>
</html>

  