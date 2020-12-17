<?php
include_once '../CrudForo.php';
?>


<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="La Casa del Pastel">
<meta name="keywords" content="Para Endulzar Tus Sueños Estamos Nosotros">
<meta name="author" content="Render2web">
    <title>"LA ABUELITA" | Foro</title>
    <link rel="stylesheet" href="../css/estilos.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<header>
<div class="contenedor">
<div id="marca">
<h1><span class="resaltado"></span>"LA ABUELITA"</h1>
</div>
<nav>
<ul>
<li><a href="../index.html">Inicio</a></li>
<li><a href="servicios.html">Servicios</a></li>
<li><a href="registrousuario.php">Registro</a></li>
<li><a href="chat.html">chat</a></li>
<li><a href="Promociones.php">Promociones</a></li>
<li><a href="Mas vendidos.php">Mas vendidos</a></li>
<li class="actual"><a href="Foro.php">Foro</a></li>
<li><a href="nosotros.php">Nosotros</a></li>
</ul>
</nav>
</div>
</header>

<section id="boletin">
<div class="contenedor">
<h1>Suscribete a Nuestras Redes Sociales</h1>
<form>
<input type="email" placeholder="ingrese el email">
<button type="submit" class="boton1">Suscribirse></button>
</form>
</div>
</section>

<section id="main">
<div class="contenedor">
<article id="main_col">

<ul style="padding: 20px" id="servicios" >

<li>
    <!-- ******************* ENTRADA DE DATOS ****************************** -->
<div class="container-fluid ">
<h2 class="text-center">Foro</h2>
 <!-- <h2 class="text-center">Nuevo registro</h2> -->
  <form method="post">
     <div class="form-group">
         <label class="control-label">Autor:</label>
        <div class="col bg-info">
          <input type="text" class="form-control" name="nomautor" placeholder="Nombre del autor"
            value="<?php
                       if(isset($_GET['editar']))
                       echo $getROW['autor'];  
                   ?>" />
        </div>
     </div>

    <!-- CREACION -->
    <div class="form-group">
        <label class="control-label">Titulo:</label>
       <div class="col bg-info">
         <input type="text" class="form-control" name="nomtitulo" placeholder="200 caracteres"
           value="<?php
                      if(isset($_GET['editar']))
                      echo $getROW['titulo'];  
                  ?>" />
       </div>
    </div>
    <!-- FIN DE CREACION -->

    <div class="form-group">
       <label class="control-label">Mensaje:</label>
       <div class="col">
          <input type="text" class="form-control" name="nommensaje" placeholder="Describa..."
          value="<?php if(isset($_GET['editar']))
                       echo $getROW['mensaje']; 
           ?>"/>
       </div>
       </div>

    <div class="form-group">        
       <?php
        if(isset($_GET['editar']))
         {
       ?>
       <div class="col-12">
          <button type="submit" class="btn btn-primary" name="actualizar">Actualizar</button>
         </div>
      <?php
     }
     else
     {
      ?>
      <div class="col-12">       
        <button type="submit" class="btn btn-primary" name="guardar">Enviar</button>
      </div>
      <?php
     }
     ?>       
    </div>
  
</div>

<!-- INICIO DE TABLA-->
<table class="table table-hover table-bordered shadow p-3 mb-5 bg-white rounded">
   <tr>

       <th class="text-center">Autor</th>
       <th class="text-center">Titulo</th>
       <th class="text-center">Mensaje</th>
       <!--- <th>Acciones</th> --->
       
      
    </tr>

   <?php

   $res = $MySQLiconn->query("SELECT * FROM Foro");
   while($row=$res->fetch_array()) {
    ?>
       <tr>
         <td class="text-center"><?php echo $row['autor']; ?></td>
         <td class="text-center"><?php echo $row['titulo']; ?></td>
         <td class="text-center"><?php echo $row['mensaje']; ?></td>
         
         <td> <!-- para las acciones -->
           <a href="?editar=<?php
            echo $row['idforo'];
             ?>" onclick="return confirm('¿Deseas Editarlo ?'); ">

             <span ></span>
             <!-- class="glyphicon  glyphicon glyphicon-pencil" -->
           </a>

           <a href="?eliminar=<?php echo $row['idforo']; ?>" onclick="return confirm('¿Seguro deseas eliminarlo?'); "
            >
             <span ></span>
             <!-- class="glyphicon  glyphicon glyphicon-trash" -->
         </a>
       </td> 
       </tr>
       <?php
   }
   ?>
 </table>
 <!-- FIN DE TABLA -->

</li>


</ul>
</article>

<aside id="central">
<div class="oscuro">
<h3 class="titulotextos">Quienes somos</h3>
<p>
Somos una empresa que nuestra funcion principal es la creacion de ricos pasteles, a  diferentes precios y estilos, con una amplia seleccion de sabores y diseños al gusto del cliente.
</p>
</div>
</aside>
</div>
</section>

<footer>
<p>¡ESTAMOS NOSOTROS PARA ENDULZAR TUS SUEÑOS!, Copyright &copy;2020</p>
</footer>
    
</body>
</html>