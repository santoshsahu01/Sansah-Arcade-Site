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
    background-color:#383838;

 }
       
        .navbar{

background-color:#C7C8D0;
width:100%;
text-align:center;


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
    display: flex;
    align-items: center;
    font-weight: 800;
    line-height: 75px;
    font-family: "Bitstream Vera Serif",serif!important;
    font-size: 55px;
    color:white;
    position: relative;
}


.navtitle{

background-color:rgba(54,65,99,255);

}


.container1 {
    margin:0px 200px;
}
              </style>
        </head>
<div class="title navtitle" > <nav>


 SANSAH ARCADE GROUP</nav>
</div>
                    
                
                
            


    
            <header>
                <div class="container1"><nav class="navbar fixed-nav-bar" >
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="registered.php">REGISTERED  Teams</a></li>
                        <li><a href="schedule.php">Schedule</a></li>
                        <!-- <li><a href="paymentpage.php">payments</a></li> -->
                        <li><a href="about.php">About</a></li>
                        <li><a href="contactus.php">Contact us</a></li>
                        <!-- <li><a href="#">DOWnloads</a></li> -->
                        <li class="blink"><a href="liveplay.php">livegameplay</a></li>
                </nav></div>
            </header>
        
</body>
</html>