<?php
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

// Insert data into database
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $city = $_POST['city'];

  $sql = "INSERT INTO test (name, city) VALUES ('$name', '$city')";

  if ($conn->query($sql) === TRUE) {
    header("Location: create.php"); // Redirect to main page
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

$conn->close();
?>


<!DOCTYPE html>
<html>
<head>
  <title>Simple CRUD System</title>
</head>
<body>
  <h1>Simple CRUD System</h1>

  <!-- Form for adding data -->
  <h2>Add Data</h2>
  <form action="create.php" method="post">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name">
    <label for="email">city:</label>
    <input type="text" id="city" name="city">
    <input type="submit" value="Add">
  </form>

  <!-- Displaying existing data -->
  <h2>Existing Data</h2>
  <table border ="3">
    <thead>
      <tr>
 
        <th>Id</th>
        <th>Name</th>
        <th>City</th>
        <th>Action</th>
        
       
    </thead>
    <tbody>
      <!-- PHP code to fetch data from database -->
      <?php include 'read.php'; ?>
    </tbody>
  </table>

  <script src="script.js"></script>
</body>
</html>
