
<?php
session_start();


if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location:login.php");
    exit;}?>


<?php
$title = "Registered Teams";                   
include 'assests/php/header.php';                 
?> 
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Welcome - <?php $_SESSION['username']?></title>
  </head>
  <body>
    
    
    <div class="container my-3">
    <div class="alert alert-success" role="alert">
      <h4 class="alert-heading">Welcome - <?php echo $_SESSION['username']?></h4>
      <p>Welcome to SANSAH ARCADE.  <?php echo $_SESSION['username']?></p>
      <hr>
      <p class="mb-0"> logout <a href="logout.php"> Logout.</a></p>
    </div>
  </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<br><br>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="widtd=device-widtd, initial-scale=1">
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
    table {
      border-collapse: collapse;
      widtd: 100%;
    }
    
 

    

.stuff{

background:azure;

    margin:0px 200px;
    padding:0px;
    height: 500px;
}

h1{
  overflow: hidden;
  background-color: #c0c3c3;
 
  padding: 20px 10px;
  text-align: center;
color: rgb(15, 16, 20);



}

.heading{
  display: block;
  position: sticky;
  
    top: 57px;
}

    

    table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding-top: 10px;
  padding-bottom: 20px;
  padding-left: 30px;
  padding-right: 40px;
}
tr:nth-child(odd){
  background-color:red;
}

  </style>
  </head>
<body>

<div class="stuff">
  <h1  class="heading">Tournament Teams Registered List</h1>
  
  <table>
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
    <thead>
      <tr>
        <th>ID</th>
        <th>Team Name</th>
         <th>Team Leader</th>
        <th> Time Play </th>
        <th>City</th>
         <th>Options</th>
         <th>Update</th>
      </tr>
    </thead>
    <tbody>
        

<?php     $sql="SELECT * FROM `player_list`";
        
        
        
        $result = mysqli_query($conn,$sql);
        
        while ($row = mysqli_fetch_assoc ($result))
{

  echo "  <tr>
  <td>".$row['id']."</td>
  <td>".$row['tnam']."</td>
  <td>".$row['fplayer']."</td>
  <td>".$row['opt']."</td>
  <td>".$row['city']."</td>
  <td>".$row['timendat']."</td>
  <td><a href='update.php?id=$row[id]'> Update</a> </td>

</tr>";
}
        
      
?>
            
     
    </tbody>
  </table>


  </div>
</body>
</html>
  


