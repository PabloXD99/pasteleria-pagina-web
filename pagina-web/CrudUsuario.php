<?php

include_once 'Db.php';

/* Codigo para Insertar Datos */
if(isset($_POST['guardar']))
{
	echo "Guardandoooooooooooooooooooo";

	$nombre_usuario = $MySQLiconn->real_escape_string($_POST['nomusuario']);
	$correo_usuario = $MySQLiconn->real_escape_string($_POST['corrusuario']);
	$contra_usuario = $MySQLiconn->real_escape_string($_POST['contrausuario']);
	$tel_usuario = $MySQLiconn->real_escape_string($_POST['telusuario']);

	$SQL = $MySQLiconn->query("INSERT INTO usuario(nombre, correo, contrasenia, telefono) VALUES('$nombre_usuario','$correo_usuario', '$contra_usuario', '$tel_usuario')");

	if(!$SQL)
	{
		echo $MySQLiconn->error;
	}
	header("Location:registrousuario.php");
}

/* Codigo para Eliminar Datos */
if(isset($_GET['eliminar']))
{
	$SQL = $MySQLiconn->query("DELETE FROM usuario WHERE idusuario=".$_GET['eliminar']);
	header("Location:registrousuario.php");
}

/* Codigo para Editar Datos */
if(isset($_GET['editar']))
{
	$SQL = $MySQLiconn->query("SELECT * FROM usuario WHERE idusuario=".$_GET['editar']);
	$getROW = $SQL->fetch_array();
}

/* Codigo para Actualizar Datos */
if(isset($_POST['actualizar']))
{
	$SQL = $MySQLiconn->query("UPDATE usuario SET nombre='".$_POST['nomusuario']."', correo='".$_POST['corrusuario']."', contrasenia='".$_POST['contrausuario']."', telefono='".$_POST['telusuario']."' WHERE idusuario=".$_GET['editar']);
	header("Location:registrousuario.php"); //SI NO FUNCIONA SACAR LOS CRUDS DE LA CARPETA
}


?>