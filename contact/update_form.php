<!DOCTYPE html>
<html>
<head>
  <title>Update Data</title>
</head>
<body>
  <h1>Update Data</h1>

  <?php
  // Check if ID is provided
  if (!isset($_GET['id'])) {
    echo "Invalid request: No ID provided.";
    exit;
  }

  $id = $_GET['id'];

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

  // Fetch record to be updated
  $sql = "SELECT id, name, city FROM test WHERE id = $id";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $name = $row["name"];
    $city = $row["city"];

    // Display form with pre-filled values
    ?>
    <form action="update.php" method="post">
      <input type="hidden" name="id" value="<?php echo $id; ?>">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" value="<?php echo $name; ?>"><br><br>
      <label for="email">Email:</label>
      <input type="text" id="email" name="city" value="<?php echo $city; ?>"><br><br>
      <input type="submit" value="Update">
    </form>

<br>


    <button> <a href="create.php"> Home</a></button>
    <?php
  } else {
    echo "No data found";
  }

  $conn->close();
  ?>
</body>
</html>
