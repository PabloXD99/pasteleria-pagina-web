<?php
include_once "../CrudCita.php";
?>

<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="La Casa del Pastel">
<meta name="keywords" content="Para Endulzar Tus Sueños Estamos Nosotros">
<meta name="author" content="Render2web">
    <title>"LA ABUELITA" | CITA</title>
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
<li class="actual"><a href="servicios.html">Servicios</a></li>
<li><a href="registrousuario.php">Registro</a></li>
<li><a href="chat.html">chat</a></li>
<li><a href="Promociones.php">Promociones</a></li>
<li><a href="Mas vendidos.php">Mas vendidos</a></li>
<li><a href="Foro.php">Foro</a></li>
<li><a href="nosotros.php">Nosotros</a></li>
</ul>
</nav>
</div>
</header>

<section id="main">
<div class="contenedor">
<article id="main_col">
<h2 style="font-size: 30px">Citas</h2>
<ul style="padding: 20px" id="servicios">

<li>
    <!-- ******************* ENTRADA DE DATOS ****************************** -->
    <div class="container-fluid ">
        <h2 class="text-center">Nueva Cita</h2>
        <form method="post">
        <div class="form-group">
            <label class="control-label">Fecha:</label>
            <div class="col bg-info">
            <input type="text" class="form-control" name="fechacita" placeholder="FORMATO: DD-MM-AAAA"
                value="<?php
                        if(isset($_GET['editar']))
                            echo $getROW['fecha'];  
                    ?>" />
            </div>
        </div>

        <!-- CREACION -->
        <div class="form-group">
        <label class="control-label">Hora:</label>
        <div class="col bg-info">
         <input type="text" class="form-control" name="horacita" placeholder="FORMATO: HH:MM"
           value="<?php
                      if(isset($_GET['editar']))
                        echo $getROW['hora'];  
                  ?>" />
       </div>
        </div>
        <!-- FIN DE CREACION -->

        <div class="form-group">
       <label class="control-label">Tema:</label>
       <div class="col">
          <input type="text" class="form-control" name="temacita" placeholder="TEMA"
          value="<?php if(isset($_GET['editar'])) echo $getROW['tema'];  ?>" />
       </div>
        </div>

        <div class="form-group">
       <label class="control-label">Estado:</label>
       <div class="col">
          <input type="text" class="form-control" name="estadocita" placeholder="pendiente/atendido"
          value="<?php if(isset($_GET['editar'])) echo $getROW['estado'];  ?>" />
       </div>
        </div>

        
        <div class="form-group">
       <label class="control-label">Numero de Cliente:</label>
       <div class="col">
          <input type="number" class="form-control" name="numclientecita" placeholder="ejemplo: 9851125464"
          value="<?php if(isset($_GET['editar'])) echo $getROW['numcliente'];  ?>" />
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
        <button type="submit" class="btn btn-primary" name="guardar">Guardar</button>
      </div>
      <?php
     }
     ?>       
      </div>

    </div>

<!-- INICIO DE TABLA-->
<table class="table table-hover table-bordered shadow p-3 mb-5 bg-white rounded">
    <tr>
        <th>Id</th>
        <th>Fecha</th>
        <th>Hora</th>
        <th>Tema</th>
        <th>Estado</th>
        <th>NumCliente</th>

        <th>Acciones</th>  
    </tr>

    <?php

   $res = $MySQLiconn->query("SELECT * FROM cita");
   while($row=$res->fetch_array()) {
    ?>
       <tr>
         <td><?php echo $row['idcita']; ?></td>
         <td><?php echo $row['fecha']; ?></td>
         <td><?php echo $row['hora']; ?></td>
         <td><?php echo $row['tema']; ?></td>
         <td><?php echo $row['estado']; ?></td>
         <td><?php echo $row['numcliente']; ?></td>
         
         <td> <!-- para las acciones -->
           <a href="?editar=<?php
            echo $row['idcita'];
             ?>" onclick="return confirm('¿Deseas Editarlo ?'); ">

             <span class="glyphicon  glyphicon glyphicon-pencil"></span>

           </a>

           <a href="?eliminar=<?php echo $row['idcita']; ?>" onclick="return confirm('¿Seguro deseas eliminarlo?'); ">
             <span class="glyphicon  glyphicon glyphicon-trash"></span>
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