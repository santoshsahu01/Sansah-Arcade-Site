

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<form action="save_record.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <input type="text" name="name" placeholder="Name" value="<?php echo $name; ?>">
    <input type="text" name="description" placeholder="Description" value="<?php echo $description; ?>">
    <input type="text" name="price" placeholder="Price" value="<?php echo $price; ?>">
    <button type="submit" name="save">Save</button>
</form>
</body>
</html>




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
    
    td, td {
      padding: 8px;
      text-align: left;
      border-bottom: 1px solid #131111;
    }
    
    td {
      background-color: #f2f2f2;
    }


    

.stuff{

background:#505050;

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



  </style>
  </head>
<body>

<div class="stuff">
  <h1>Tournament Teams Registered List</h1>
  
  <table>
<?php



    $servername = "localhost";
    $username = "root";
    $password = "";
    $database="tests";
    
    
    
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
        <td>SR No.</th>
        <th>Team Name</th>
        <th>Play Time</th>
         <th>City Name</th>
         <th>SR No.</th>
        <th>Team Name</th>
        <th>Play Time</th>
         <th>City Name</th>
         <th>SR No.</th>
        <th>Team Name</th>
        <th>Play Time</th>
         <th>City Name</td>
      </tr>
    </thead>
    <tbody>
        

<?php     $sql="SELECT * FROM `tests`";
        
        
        
        $result = mysqli_query($conn,$sql);
        
        while ($row = mysqli_fetch_assoc ($result))
{

  echo "  <tr>
  <td>".$row['name']."</td>
  <td>".$row['didescription']."</td>
  <td>".$row['price']."</td>
 
  <td><a href='update.php?id=$row[srn]'> Update</a> </td>

</tr>";
}



            
      
?>
            
     
    </tbody>
  </table>


  </div>
</body>
</html>
  
