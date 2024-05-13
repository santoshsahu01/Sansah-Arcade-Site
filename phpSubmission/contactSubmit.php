<?php

include 'config.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $text = $_POST['text'];

  $sql = "INSERT INTO contact_us (name, email, text) VALUES ('$name', '$email', '$text')";

  if ($conn->query($sql) === TRUE) {
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

$conn->close();
?>

