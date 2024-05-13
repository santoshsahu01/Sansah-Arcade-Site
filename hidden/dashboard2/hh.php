<?php

$conn =  mysqli_connect($servername, $username, $password, $database);
  
  

$sql= "INSERT INTO `players_forms` (`fname`, `lname`, `dob`, `male`, `female`, `email`, `phone`, `chessid`, `add`, `city`, `state`, `pin`) VALUES ('$fname', '$lname', '$dob', '$male', '$female', '$email', '$phone', '$chessid', '$add', '$city', '$state', '$pin')";



$result = mysqli_query($conn, $sql) ;

header("Location:register.php");
die();


  ?>