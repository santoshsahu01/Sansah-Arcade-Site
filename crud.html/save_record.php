<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tests";

$conn = mysqli_connect ($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    if (empty($id)) {
        $sql = "INSERT INTO tests (name, description, price) VALUES ('$name', '$description', '$price')";
    } else {
        $sql = "UPDATE tests     SET name='$name', description='$description', price='$price' WHERE id=$id";
    }

    if ($conn->query($sql) === TRUE) {
        echo "Record saved successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();

?>



<?php



    $servername = "localhost";
    $username = "root";
    $password = "";
    $database="players";
    
    
    
    // Create a connection
    $conn = mysqli_connect ($servername, $username, $password, $database);
    
    // // Check connection
    // if ($conn->connect_error) {
    //     die("Connection failed: " . $conn->connect_error);
    // }
    
    // echo "Connected Success";
    



     
?>