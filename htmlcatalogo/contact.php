<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="esfomr.css">
    <link rel="icon" href="faicon1.ico">
    <title>Contactanos</title>
</head>
<body>
 
<section class="portada">
<header>

    <nav>
    <a href="#" id="iconn" class="iconn">Menú</a>
    <div class="enlaces uno" id="enlaces">
       
        <a href="index.html">Inicio</a>
       <a href="galeria.html">Galería</a>
       <a href="productos.html">Productos </a>
       <a href="">Contactos</a>
    </div>
</nav>  

<section class="textos-header">
        
    <h1>SEY<span>BOLD</span> </h1>

    
    
    <h2>Tu opinión es importante</h2>
           

</section>
</header>


<div class="wave"  style="height: 160px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M-17.60,70.16 C157.33,212.26 345.82,-22.59 518.51,102.73 L513.99,157.99 L0.00,150.00 Z" style="stroke: none; fill: #fff;"></path></svg></div>
          
<script  src="script.js"> </script>
</section>







<!--CONTACTO-->
</section class="fo">      
   <form method="post">
        <img src="yo1.jpg" alt="" class="iconmen">
        <p class="testimony__review">¡Muchas gracias por venir! Soy <span>Josué</span>, desarrollador de SEYBOLD. Realmente me encantaría ponerme en contacto contigo para escuchar tus comentarios o simplemente saludarte <br>
        <input type="text" name="name" placeholder="Nombre">
    	<input type="email" name="email" placeholder="Email">
    	<input type="submit" name="register">   </p>
    </form>
        <?php 
        include("bd.php");
        ?>
</section>


</body>
</html>