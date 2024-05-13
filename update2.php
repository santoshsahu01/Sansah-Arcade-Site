
<?php
$title = "Register Your Form";                   
include 'assests/php/header.php';  



$servername = "localhost";
$username = "root";
$password = "";
$database="";



// Create a connection
$conn = mysqli_connect ($servername, $username, $password, $database);


$id =  $_GET['id'];

$sql="SELECT * FROM 'player_list' where id='$id'";
        
          
$result = mysqli_query($conn,$sql);
   while(     
$row = mysqli_fetch_assoc ($result));


?>


<!DOCTYPE html>
<html>
<head>
<script>
        function redirectToPayment() {
            // Retrieve form data
            var name = document.getElementById("name").value;
            var email = document.getElementById("email").value;
            var amount = document.getElementById("amount").value;
            
            // Perform any necessary data validation
            
            // Redirect to payment page with form data as query parameters
            var paymentUrl = "https://pmny.in/yrfQLMgrJLHf?name=" + encodeURIComponent(name) + "&email=" + encodeURIComponent(email) + "&amount=" + encodeURIComponent(amount);
            window.location.href = paymentUrl;
        }
    </script>
  <title>Register Your Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
    }
    
    .container {
      width: 400px;
      margin: 0 auto;
      padding: 20px;
      background-color: #f2f2f2;
      border-radius: 5px;
    }
    
    .container h1 {
      text-align: center;
    }
    
    .form-group {
      margin-bottom: 20px;
    }
    
    .form-group label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
    }
    
    .form-group input,
    .form-group select {
      width: 100%;
      padding: 8px;
      border-radius: 3px;
      border: 1px solid #ccc;
    }
    
    .form-group select {
      height: 30px;
    }
    
    .form-group input[type="submit"] {
      background-color: red;
      color: white;
      cursor: pointer;
    }
    
    .form-group input[type="submit"]:hover {
      background-color: #45a049;
    }

    input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

  </style>
</head>
<body>

  <div class="container">
    <h1>Update  Your Form</h1>
    <br>
    <form action="" method="POST">
      <div class="form-group">
        <label for="name">Your Username And Mobile No.</label>
            <input type="text" id="name" value="<?php echo $row['name'];?>" name="name" maxlength="15" placeholder="Ex. Erik@9876543210" required>
      </div>
      
        
      <div class="form-group">
        <label for="age">Age Group</label>
        <input type="text" id="age" name="age" maxlength="8"placeholder="Ex. 18-20 | 21-23 | 24-27" required>
      </div>
      <div class="form-group">
        <label for="tnam"> Team Name:</label>
        <input type="text" id="tnam" name="tnam" maxlength="18" placeholder="Your Team Name" required>
      </div>
      <div class="form-group">
        <label for="tlname"> Team Leader Name:</label>
        <input type="text" id="tlname" name="tlname" maxlength="13" placeholder=" Team leader " required>
      </div>
      <div class="form-group">
        <label for="2player"> 2nd Player Name:</label>
        <input type="text" id="fplayer" name="fplayer" maxlength="15" placeholder=" Player Name" required>
      </div>
      <div class="form-group">
        <label for="3player"> 3rd Player Name:</label>
        <input type="text" id="splayer" name="splayer" maxlength="15" placeholder=" Player Name" required>
      </div>
      <div class="form-group">
        <label for="4player">4th Player Name:</label>
        <input type="4player" id="tplayer" name="tplayer" maxlength="15" placeholder=" Player Name" required>
      </div>
      <div class="form-group">
        <label for="mobl"> Mobile:</label>
        <input type="number" id="mobl" name="mobl" maxlength="13" placeholder="Ex. +919876543210" required>
      </div>
      <div class="form-group">
        <label for="whnumber">Whatssapp Number</label>
        <input type="number" id="whnumber" name="whnumber"  maxlength="13" placeholder="Ex. +919876543210" required>
      </div>
      <div class="form-group">
        <label for="city">City</label>
        <input type="text" id="city" name="city" maxlength="19" placeholder="Ex. New Delhi" required>
      </div>
      <div class="form-group">
        <label for="Apin">Area PIN:</label>
        <input type="number" id="apin" name="apin" maxlength="6" placeholder=" 123456" required>
      </div>
      <div class="form-group"> 
        <label for="ssedul"> Select Schedule:</label>
        <select id="opt" name="opt" required >
        <option value="">None</option>
        <option value="11.30AM TO 12.30PM">11.30AM TO 12.30PM</option>
        <option value="2.00PM TO 3:00PM">2.00PM TO 3:00PM</option>
        <option value="5:00PM To 6:00PM">5:00PM To 6:00PM</option>
    </select>
      </div>


      <br><br><br>
      <div class="form-group">
      <input type="submit" value="Proceed to Payment" onclick="redirectToPayment()">
        
      </div>
    </form>
  </div>
</body>
</html>

<?php
// Establishing a connection to the database
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get values from the form
    $id = $_POST['id']; // Assuming the ID is sent via POST method
    $newData = $_POST['new_data']; // New data to update, change this according to your form fields

    // Update query
    $sql = "UPDATE your_table SET column_name = '$newData' WHERE id = $id"; // Change 'your_table' and 'column_name' to your table and column names

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

// Close the connection
$conn->close();
?>



<!DOCTYPE html>
<html>
<head>
    <title>Update Data</title>
</head>
<body>
    <h2>Update Data</h2>
    <form action="update.php" method="post">
        <label for="id">ID:</label><br>
        <input type="text" id="id" name="id"><br><br>
        
        <label for="new_data">New Data:</label><br>
        <input type="text" id="new_data" name="new_data"><br><br>
        
        <input type="submit" value="Update">
    </form>
</body>
</html>
