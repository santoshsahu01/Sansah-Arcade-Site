
<?php



$servername = "localhost";
$username = "u371325815_user";
$password = "Sonu4321";
$database="u371325815_sonu";



// Create a connection
$conn = mysqli_connect ($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfdfdfdfddfully";

$nam = "lund";
$fnam = "pusyy";

$sql="INSERT INTO `tatab` ( `name`, `fnam`) VALUES ( '$nam', '$fnam')";

$result = mysqli_query($conn,$sql);


if ($result)    {
    echo "submited";


}
else { "the record not submited". mysqli_error($conn);

}
?>

