<?php

include_once 'Db.php';

/* Codigo para Insertar Datos */
if(isset($_POST['guardar']))
{
	 echo "Guardandoooooooooooooooooooo";

     $nombreprodu = $MySQLiconn->real_escape_string($_POST['nompro']);
     $categoriaprodu = $MySQLiconn->real_escape_string($_POST['catepro']);
     $precioprodu = $MySQLiconn->real_escape_string($_POST['prepro']);
     $cantidadprodu = $MySQLiconn->real_escape_string($_POST['cantpro']);


  $SQL = $MySQLiconn->query("INSERT INTO producto (nombre, categoria, precio, cantidad) VALUES('$nombreprodu','$categoriaprodu','$precioprodu','$cantidadprodu')");
  
  if(!$SQL)
  {
   echo $MySQLiconn->error;
  } 
  header("Location:catalogo de pasteles.php");
}

/* Codigo para eliminar Datos */
if(isset($_GET['eliminar']))
{
 $SQL = $MySQLiconn->query("DELETE FROM producto WHERE idproducto=".$_GET['eliminar']);
 header("Location:catalogo de pasteles.php");
}


/* Codigo para Editar Datos */
if(isset($_GET['editar']))
{

 $SQL = $MySQLiconn->query("SELECT * FROM producto WHERE idproducto=".$_GET['editar']);
 $getROW = $SQL->fetch_array();
}

/* Codigo para Actualizar Datos */
if(isset($_POST['actualizar']))
{
 $SQL = $MySQLiconn->query("UPDATE producto SET nombre='".$_POST['nompro']."', categoria='".$_POST['catepro']."', precio='".$_POST['prepro']."', cantidad='".$_POST['cantpro']."' WHERE idproducto=".$_GET['editar']);
 header("Location:catalogo de pasteles.php"); //SI NO FUNCIONA SACAR LOS CRUDS DE LA CARPETA
}


?>