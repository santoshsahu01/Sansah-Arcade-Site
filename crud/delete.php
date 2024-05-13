<?php
// Connect to the database (Replace these details with your database credentials)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "players";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
  $id = $_GET['id'];

  // SQL to delete a record
  $sql = "DELETE FROM test WHERE id=$id";

  if ($conn->query($sql) === TRUE) {






    
      header("Location: create.php"); // Redirect to main page
  
    echo "Record deleted successfully";
  } else {
    echo "Error deleting record: " . $conn->error;
  }
} else {
  echo "Invalid request";
}

$conn->close();
?>
