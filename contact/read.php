
<?php
$title = "Contact US";                   
include 'assests/php/header.php';                 
?><?php
// Connect to database (Replace these details with your database credentials)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "players";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM `test`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["id"] . "</td><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["city"] . "</td><td><a href='update_form.php?id=" . $row["id"] . "'>Edit</a> | <a href='delete.php?id=" . $row["id"] . "'>Delete</a></td></tr>";
  }
} else {
  echo "0 results";
}

$conn->close();
?>
