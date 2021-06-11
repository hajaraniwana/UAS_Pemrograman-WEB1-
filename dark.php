<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link  rel="stylesheet"type="text/css"href="body.css" >
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@600&display=swap" rel="stylesheet">
    <title>Tema terang galery</title>
  </head>
    
  <body class=body>
    <section class="light">
    <header>
        <a href="#" class= "logo" onclick="Hello()"> Phone</a>
        <div class ="toggle" onclick="toggle();"></div>
    </header>
    <h1 style="text-align: center; padding-top: 100px;">let's see your gallery image</h1>
    <svg class="svg" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-brightness-high" viewBox="0 0 16 16"><a href="gelap.php">
    <path d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
      </svg></br>

      
   <div class="img">
    <img src="img1.jpg" class="img-fluid" >
    <img src="img2.jpg" class="img-fluid" >
    <img src="img3.jpg" class="img-fluid" >
    <img src="img4.jpg" class="img-fluid" >
    <img src="img5.jpg" class="img-fluid" >
    <img src="img6.jpg" class="img-fluid" >
    <img src="img7.jpg" class="img-fluid" >
    <img src="img8.jpg" class="img-fluid" >
   </div> 
   <ul class="menu">
            <li><a href="index.php">HOME</a></li>>
            <li><a href="time.php"> WHAT TIME IS IT?</a></li>>
            <li><a href="dark.php">TRY DARK THEME IN GALLERY</a></li>>
            <li><a href="conversi.php">CONVERTION of UNITS of LENGTH</a></li>>
            <li><a href="aksi_logout.php">LOGOUT</a></li>>
 </ul>
</section>
 <script type= "text/javascript">
    function toggle ()
    {
        const toggle = document.querySelector('.toggle');
        const body = document.querySelector('.body');
        toggle.classList.toggle('active');
        body.classList.toggle('active');
    }
</script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
   
    
  </body>
</html>
