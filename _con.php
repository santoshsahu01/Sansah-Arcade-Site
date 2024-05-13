
    <?php

    session_start();

    //after insert or update 
    $_SESSION['status'] = "<Type Your success message here>";


  $servername = "localhost";
  $username = "root ";
  $password = "";
  $database="players";


// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";

// Close the connection
$conn->close();
?>
 

