<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_POST['name'];
    $gender = $_POST['gender'];  
    $age = $_POST['age']; 
    $tnam = $_POST['tnam'];}
    $tlam = $_POST['tlam'];
    $2player = $_POST['2player'];  
    $3player = $_POST['3player']; 
    $4player = $_POST['4player'];
    $mobl = $_POST['mobl'];
    $whnumber = $_POST['whnumber'];  
    $city = $_POST['city']; 
    $optional-select = $_POST['optional-select'];
   
  
    $servername = "localhost";
  $username = "u371325815_plyr";
  $password = "Sonu1234";
  $database="u371325815_plyr";



  $conn =  mysqli_connect($servername, $username, $password, $database);
  
  

$sql= "INSERT Into `player_list` (`SR No.`, `name`, `gender`, `age`, `tnam`, `tlnam`, `2player`, `3player`, `4player`, `mobl`, `whnumber`, `city`, `optional-select`) VALUES ( '$name', '$gender', '$age', '$tnam', '$tlnam', '$2player', '$3player', '$4player', '$mobl', '$whnumber', '$city', '$optional-select');


// Execute the query
if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the connection
$conn->close();



?>


