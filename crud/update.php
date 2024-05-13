<?php
// Establish a database connection (Replace these details with your database credentials)
$servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "players";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
  $id = $_POST['id'];
  $name = $_POST['name'];
  $city = $_POST['city'];

  // Update record in the database
  $sql = "UPDATE test SET name='$name', city='$city' WHERE id=$id";

  if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";

      header("Location: create.php"); // Redirect to main page
    
  } else {
    echo "Error updating record: " . $conn->error;
  }
} else {
  echo "Invalid request";
}

$conn->close();
?>
