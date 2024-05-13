<?php
$title = "Registered Teams";                   
include 'assests/php/header.php';                 
?><br><br>


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
      widtd: 400px;
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
  <td>".$row['SN']."</td>
  <td>".$row['tnam']."</td>
  <td>".$row['fplayer']."</td>
  <td>".$row['opt']."</td>
  <td>".$row['city']."</td>
  <td>".$row['timstamp']."</td>
  <td><a href='update.php?SN=$row[SN]'> Update</a> </td>

</tr>";
}



            
      
?>
            
     
    </tbody>
  </table>


  </div>
</body>
</html>
  