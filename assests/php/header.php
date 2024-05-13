<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="common.css">
</head>
<body>
    
    <style>
        

 body{
    background-color:white;
    font-family: 'Arial', sans-serif;

 }


 header{
display:block;
position: sticky;
   
    top: 0px;
 }
       
        .navbar{

/* background-color:#C7C8D0;
width:100%;
text-align:center;  position: fixed;
  top: 0;; */

}
                
    .navbar ul{
             overflow: auto;

                     text-align:center;
                }
                .navbar li{
                    float:left;
                    list-style: none; 
                    text-align:center;
                
                }
              
            


                @import url('https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.navbar li a{
    position: relative;
    display: inline-block;
    padding: 10px 0px;
    margin: 10px 15px;
    color: black;
    text-decoration: none;
    text-transform: uppercase;
    transition: 0.5s;
    letter-spacing: 1px;
    overflow: hidden;
    margin-right: 20px;
   
}
.navbar li a:hover{
    border-radius: 25px;
    background: black ;
    color: white;
    box-shadow: 0 0 5px black,
                0 0 25px black,
                0 0 50px black,
                0 0 200px black;
            

     -webkit-box-reflect:below 1px linear-gradient(transparent, #0005);
}


@keyframes animate1{
    0%{
        left: -100%;
    }
    50%,100%{
        left: 100%;
    }
}




.blink{position: relative;
    display: inline-block;
    text-transform: uppercase;
    transition: 0.5s;
    letter-spacing: 4px;
    overflow: hidden;
    margin-right: 20px;
    color:red;
   
	}
	.blink a{

        border-radius: 25px;

		animation: blink 1s linear infinite;
	}
@keyframes blink{
0%{opacity: 0;}
50%{opacity: .5;}
100%{opacity: 1;}
}



.title{
padding:30px;
justify-content: center;
font-family: 'Arial', sans-serif;
    display: flex;
    align-items: center;
    font-weight: 700;
    line-height: 75px;
    font-size: 55px;
    color:white;
    position: fixed;
    top:0px;
}


.navtitle{

background-color:rgba(54,65,99,255);
width:100%;
position: relative;
}


.container1 {
    margin:0px 200px;
    background-color:rgb(231, 240, 223);
}
              </style>

<STYLE>
    
    .helpBtn {
        background-color: #2012b5;
        padding: 10px;
        text-align: center;
        color: #fffff53;
        font-size: large;
        background-color: #d3dcd4;
        width: fit-content;
        height: 43px;
        position: fixed;
        top: 300px;
        right: 10PX;
        border: 3px solid black;
        border-radius: 50%;
    
    
    }
    
    
    
    img{
      margin:1px;
      width:195px;
      height:500px;
      position:fixed;
      top:132px;
    
    }
    
    
    
    .imgs{
      margin:1px;
      width:195px;
      height:400px;
      position:fixed;
      top:20px;
      right:0;
    }
    
  
    </STYLE>
        </head>
<div class="title navtitle" > SANSAH ARCADE GROUP <nav> 
</div>
                    
                
    
            <header>
                <div class="container1">
                    
                
                <nav class="navbar fixed-nav-bar" >
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="registered.php">REGISTERED  Teams</a></li>
                        <li><a href="schedule.php">Schedule</a></li>
                        <!-- <li><a href="paymentpage.php">payments</a></li> -->
                        <li><a href="contactus.php">Contact</a></li>
                        <li><a href="login.php">login</a></li>
                        <li><a href="gallary.php">Gallary</a></li>
                        <li class="blink"><a href="liveplay.php">livegameplay</a></li>
                </nav></div>
            </header>
        


            
<div  class="helpBtn"> Help!</div>


<!-- 
<div class="imgs">
<img src="misa/sonu.jpeg" alt="ater">
</div>


<div class="imgs2">

<img src="misa/sonu.jpeg" alt="">
</div> -->


<script>
            window.onscroll = function() {myFunction()}; 
      
      var navlist = document.getElementById("container1"); 
      var sticky = navlist.offsetTop; 
        
      /* Function to stick the nav bar */
      function myFunction() { 
          if (window.pageYOffset >= sticky) { 
              navlist.classList.add("sticky") 
          }  
            else { 
                navlist.classList.remove("sticky"); 
            } 
      } 
</script>
      
</body>
</html>