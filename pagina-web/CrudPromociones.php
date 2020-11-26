<?php

include_once 'Db.php';

/* Codigo para Insertar Datos */
if(isset($_POST['guardar']))
{
	echo "Guardandoooooooooooooooooooo";

	$nombre_promo = $MySQLiconn->real_escape_string($_POST['nombrepromo']);
	$descri_promo = $MySQLiconn->real_escape_string($_POST['descripromo']);
	$prec_promo = $MySQLiconn->real_escape_string($_POST['precpromo']);

	$SQL = $MySQLiconn->query("INSERT INTO promociones(Nombre, Descripcion, preciopromo) VALUES('$nombre_promo','$descri_promo', '$prec_promo')");

	if(!$SQL)
	{
		echo $MySQLiconn->error;
	}
	header("Location:Promociones.php");
}

/* Codigo para Eliminar Datos */
if(isset($_GET['eliminar']))
{
	$SQL = $MySQLiconn->query("DELETE FROM promociones WHERE idpromociones=".$_GET['eliminar']);
	header("Location:Promociones.php");
}

/* Codigo para Editar Datos */
if(isset($_GET['editar']))
{
	$SQL = $MySQLiconn->query("SELECT * FROM promociones WHERE idpromociones=".$_GET['editar']);
	$getROW = $SQL->fetch_array();
}

/* Codigo para Actualizar Datos */
if(isset($_POST['actualizar']))
{
	$SQL = $MySQLiconn->query("UPDATE promociones SET Nombre='".$_POST['nombrepromo']."', Descripcion='".$_POST['descripromo']."', preciopromo='".$_POST['precpromo']."' WHERE idpromociones=".$_GET['editar']);
	header("Location:Promociones.php"); //SI NO FUNCIONA SACAR LOS CRUDS DE LA CARPETA
}


?>