<?php
    session_start();
    include "koneksi.php";
    if (!isset($_SESSION ['username']))
    {
        header ("location:login.php" );
        
    }
    if (isset($_SESSION['username']))
    {
        $username =$_SESSION ['username'];
       
        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  
	<meta charset="utf-8">
	<meta name="viewport" content="width-device-width, initial-scale=1.0">
	<title> phone</title>
    <link  rel="stylesheet"type="text/css"href="body.css" >
    
	
</head>

<body >
    
    <section class="ban" > 
    <header>
        <a href="#" class= "logo" onclick="Hello()"> Phone</a>
        <div class ="toggle" onclick="toggle()"></div>
    </header>
    <div class="content">
        <div class="isi">
            <h2>see how important smart phone </h2>
            <p>Smartphones are mobile phones that have a high level of capability, sometimes with functions resembling a computer.
                A smartphone is a cell phone that allows you to do more than make phone calls and send text messages. Smartphones can browse the Internet and run software programs like a computer. 
                Smartphones use a touch screen to allow users to interact with them. </p>
            <a href="buy.php">Buy Now</a>
        </div>
        <div class="imgbx">
            <img src="hpp.png">
        </div>
         
    </div>
    <ul class="menu">
        <li><a href="index.php">HOME</a></li>>
        <li><a href="time.php"> WHAT TIME IS IT?</a></li>>
        <li><a href="dark.php">TRY DARK THEME IN GALLERY</a></li>>
        <li><a href="conversi.php">CONVERTION of UNITS of LENGTH
        </a></li>>
        <li><a href="aksi_logout.php">LOGOUT</a></li>>
    </ul>
     
</section>
<script type="text/javascript" >
    function toggle()
    {
        const toggle = document.querySelector('.toggle');
        const ban = document.querySelector('.ban');
        toggle.classList.toggle('active');
        ban.classList.toggle('active');
    }
    function Hello(){  
     alert("Welcome to the web for the best smartphone feature promotions ");  
    }  

    </script> 

</body>
</html>