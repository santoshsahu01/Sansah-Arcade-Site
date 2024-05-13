<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Live Game Play</title>



    <style>

.gameplay{


    background:#505050;


margin:0px 200px;
margin:2px 200px;
padding:00px 10px;



}












    </style>
</head>
<body>

<?php
$title = "Php Header Footer";                   
include 'assests/php/header.php';                 
?>

<div class="gameplay" id="ytuv">




<iframe  id="ytuv" width="560" height="315" src="https://www.youtube.com/embed/6xZrFA-z4Aw?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>





    </div>


    <script>

document.getElementById("ytuv").innerHTML = <iframe width="560" height="315" src="https://www.youtube.com/embed/pslBCs2MH6E" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>;
</script>


<?php
$title = "Php Header Footer";                   
include 'assests/php/footer.php';                 
?>




</body>
</html>