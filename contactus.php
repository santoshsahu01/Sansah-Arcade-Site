<?php
session_start();



$title = "Contact Us";   
include 'assests/php/header.php';  
include 'config.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $text = $_POST['text'];

  $sql = "INSERT INTO contact_us (name, email, text) VALUES ('$name', '$email', '$text')";

  if ($conn->query($sql) === TRUE) {
    header("location:index.php"); 
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
error_reporting(0);
$conn->close();
?>                

<!DOCTYPE html>
<html>
<head>
  <title>Contact Us</title>
  <style>

    *{

      margin:0px;
      padding:0px;
    }

    body {

      margin:0px;
      padding:0px;
    
      font-family: Arial, sans-serif;
    }
    .container {
      max-width: 500px;
      margin: 0 auto;
      padding: 20px;
      border-radius: 5px;
    }
    
.stuff{
border-radius:30px;
background:#dfe8f0;
margin:0px 200px;
margin-top:0px;
padding:0px;
}



.contact-us{
  margin-top:20px;
  background-color:azure;
width :100%;
height: 320px;
border-radius:30px;
}


h3{

color:black;
text-align: center;
font-size:25px;
}

input{
background: #e1f5f4;
width:90%;
display:flex;
padding:10px;
margin: 3px auto;
border-radius: 10px;

}

input:nth-child(3){ 
height: 150px;
text-align:inherit;
padding:  0.4em
 
}
.submit{ display:flex;
  margin-top:10px;
  color:black;
  background-color:#51e0b3;
  width:60%;
  text-align:center;
  border: 2px solid red;
  border-radius:20px;
}

.submit:hover{
  background-color:#98faf5;
  border: 2px solid black;
  
}

  </style>
</head>
<body>
    
    <div class="stuff">
  <div class="container">
    <h2>Contact Us</h2>
   
    Quick Customer Care Support Trough

    Chat <a href="https://wa.me/message/FPCC6RZWHOF7A1">Message Us Now</a>
    <br><br><br>


    <a href="contact/create.php">Raise query</a>

    <br>
<label for=""> Mail On :  contact@sansah.online</label>

<br>
<label for="numbe">
  Call: +91 97545 12002
</label>

<br>


<div class="contact-us">

<h3> Raise Your Query</h3>
<form action="contactus.php" id="myForm" method="POST" onsubmit="showThankYouMessage(); return false;">
<input type="name" name="name" placeholder="Name">
<input type="email" name="email" placeholder="Email">
<input type="textarea" name="text" placeholder="Tell Your Query">


<input id="myBtn" class="submit" type="submit" value="Submit">

</form>
  
</div>
  </div>



<!-- <div class="contact-us">




 <h2> Thank You ,  Your Form Submitted</h2>
</div> -->





<script>
              
    

</script>

</body>
</html>
