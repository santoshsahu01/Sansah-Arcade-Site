
    <?php


    //after insert or update 
    $_SESSION['status'] = "<Type Your success message here>";

$servername = "localhost";
$username = "root";
$password = ""; 
$database="players";


// Create connection
$conn =  mysqli_connect($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

else ("succefully");


  
?>  