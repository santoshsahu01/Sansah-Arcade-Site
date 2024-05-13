<?php

$title = "PAY PAGE";                   
include 'assests/php/header.php';                 
?><br><br>





<?php

if ($_SERVER['REQUEST_METHOD']=='POST'){



    $name = $_POST['name'];
     $age = $_POST['age'];
    $tnam = $_POST['tnam'];
    $fplayer = $_POST['fplayer'];
     $splayer = $_POST['splayer'];
    $tplayer = $_POST['tplayer'];
     $mobl = $_POST['mobl'];
     $whnumber = $_POST['whnumber'];
    $city = $_POST['city'];
     $apin = $_POST['apin'];
     $opt = $_POST['opt'];



    $servername = "localhost";
    $username = "root";
    $password = "";
    $database="players";
    
    
    
    // Create a connection
    $conn = mysqli_connect ($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    echo "Connected Success";
    

    $sql="INSERT INTO `player_list` ( `name`, `age`, `tnam`,  `fplayer`, `splayer`, `tplayer`, `mobl`, `whnumber`, `city`, `opt`) VALUES ( '$name',  '$age', '$tnam',  '$fplayer', '$splayer', '$tplayer', '$mobl', '$whnumber', '$city', '$opt')";

    
    
    $result = mysqli_query($conn,$sql);
    
    
    if ($result)    {
        echo "submited";
    
    
    }
    else { "the record not submited". mysqli_error($conn);
    
    }



$conn->close();


}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Live Game Play</title>



    <style>
    
    p {
        text-align: center;
        color: aliceblue; 
        
    }

.stuff{
display: block;
background:#3c3a3a;
align-items: center;
    margin:0px 200px;
    padding:20px;
    height: 500px;
}

.stuff2{


text-align: center;
margin: 200px 00px  100px;




}









    </style>
</head>
<body>


    <div class="stuff">
        
        
        <div>
            <p>1.Must be over 18 years old </p><br>
             <p>2.must have mobile player not pc player</p><br>
              <p>3.Third party app not use If you are caught then you will be removed </p><br>


        </div>

<div class="stuff2"> <a style=" width: 150px; background-color: #151F95; text-align: center; font-weight: 800; padding: 11px 0px; color: white; font-size: 12px; display: inline-block; text-decoration: none; " href='https://pmny.in/yrfQLMgrJLHf' > Pay Now </a> 

</div>
</div>

<?php
$title = "Php Header Footer";                   
include 'assests/php/footer.php';                 
?>




</body>
</html>