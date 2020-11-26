<?php

include_once 'Db.php';

/* Codigo para Insertar Datos */
if(isset($_POST['guardar']))
{
	echo "Guardandoooooooooooooooooooo";

	$mas_vendido = $MySQLiconn->real_escape_string($_POST['masvendido']);
	$descri_vendido = $MySQLiconn->real_escape_string($_POST['descrivendido']);
	$cant_vendido = $MySQLiconn->real_escape_string($_POST['cantvendido']);
	$prec_vendido = $MySQLiconn->real_escape_string($_POST['precvendido']);

	$SQL = $MySQLiconn->query("INSERT INTO masvendidos(nombre, descripcion, cantidadvendida, preciovendido) VALUES('$mas_vendido','$descri_vendido', '$cant_vendido', '$prec_vendido')");

	if(!$SQL)
	{
		echo $MySQLiconn->error;
	}
	header("Location:Mas vendidos.php");
}

/* Codigo para Eliminar Datos */
if(isset($_GET['eliminar']))
{
	$SQL = $MySQLiconn->query("DELETE FROM masvendidos WHERE idmasvendidos=".$_GET['eliminar']);
	header("Location:Mas vendidos.php");
}

/* Codigo para Editar Datos */
if(isset($_GET['editar']))
{
	$SQL = $MySQLiconn->query("SELECT * FROM masvendidos WHERE idmasvendidos=".$_GET['editar']);
	$getROW = $SQL->fetch_array();
}

/* Codigo para Actualizar Datos */
if(isset($_POST['actualizar']))
{
	$SQL = $MySQLiconn->query("UPDATE masvendidos SET nombre='".$_POST['masvendido']."', descripcion='".$_POST['descrivendido']."', cantidadvendida='".$_POST['cantvendido']."', preciovendido='".$_POST['precvendido']."' WHERE idmasvendidos=".$_GET['editar']);
	header("Location:Mas vendidos.php"); //SI NO FUNCIONA SACAR LOS CRUDS DE LA CARPETA
}


?>