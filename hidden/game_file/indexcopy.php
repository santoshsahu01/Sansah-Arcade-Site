

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SANSAH GROUP</title>

   
<style>

*{margin:0;
    
    padding:0;}

  h1 {text-align: center;
     border: #2012b5;
      
       font-size: 30px;
       font-family:verdana;
       text-shadow:    
         0 0 7px #fff,
      0 0 10px #fff,
      0 0 21px #fff,
      0 0 42px #0fa,     
}

 
        .reg{
            text-align:center;
        }
  .reg a{ text-decoration: none;}
        
.reg a{
    position: relative;
    display: inline-block;
    padding: 15px 30px;
    color: #2196f3;
    text-align:center;
    text-transform: uppercase;
    letter-spacing: 4px;
    text-decoration: none;
    font-size: 24px;
    overflow: hidden;
    transition: 0.2s;
}


.reg a:hover {
    color: #255784;
    background: #2196f3;
    box-shadow: 0 0 10px #2196f3, 0 0 40px #2196f3, 0 0 80px #2196f3;
    transition-delay: 1s;
}


.reg a span {
    position: absolute;
    display: block;
}




.reg a span:nth-child(1) {
    top: 0;
    left: -100%;
    width: 100%;
    height: 2px;
    background: linear-gradient(90deg, transparent, #2196f3);
}



.reg a:hover span:nth-child(1) {
    left: 100%;
    transition: 1s;
}


.reg a span:nth-child(3) {
    bottom: 0;
    right: -100%;
    width: 100%;
    height: 2px;
    background: linear-gradient(270deg, transparent, #2196f3);
}

.reg a:hover span:nth-child(3) {
    right: 100%;
    transition: 1s;
    transition-delay: 0.5s;
}



.reg a span:nth-child(2) {
    top: -100%;
    right: 0;
    width: 2px;
    height: 100%;
    background: linear-gradient(180deg, transparent, #2196f3);
}

.reg a:hover span:nth-child(2) {
    top: 100%;
    transition: 1s;
    transition-delay: 0.25s;
}



.reg a span:nth-child(4) {
    bottom: -100%;
    left: 0;
    width: 2px;
    height: 100%;
    background: linear-gradient(360deg, transparent, #2196f3);
}

.reg a:hover span:nth-child(4) {
    bottom: 100%;
    transition: 1s;
    transition-delay: 0.75s;
}


.stuff{

background:#505050;


    margin:0px 200px;
    padding:0px;
    height: 500px;
}


</style>
</head>


<body>
    

<?php
$title = "Php Header Footer";                   
include 'assests/php/header.php';                 
?><br><br>



<div class="stuff">


  <H1 class="heading"> BGMI Tournament 2023</H1>
  
  <br><br>
  
  
  

   




</div>



</body>
</html>

