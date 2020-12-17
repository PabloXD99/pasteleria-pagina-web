<?php

include_once 'Db.php';

/* Codigo para Insertar Datos */
if(isset($_POST['guardar']))
{
	echo "Guardandoooooooooooooooooooo";

	$nom_autor = $MySQLiconn->real_escape_string($_POST['nomautor']);
	$nom_titulo = $MySQLiconn->real_escape_string($_POST['nomtitulo']);
	$nom_mensaje = $MySQLiconn->real_escape_string($_POST['nommensaje']);

	$SQL = $MySQLiconn->query("INSERT INTO foro(autor, titulo, mensaje) VALUES('$nom_autor','$nom_titulo', '$nom_mensaje')");

	if(!$SQL)
	{
		echo $MySQLiconn->error;
	}
	header("Location:Foro.php");
}

/* Codigo para Eliminar Datos */
if(isset($_GET['eliminar']))
{
	$SQL = $MySQLiconn->query("DELETE FROM foro WHERE idforo=".$_GET['eliminar']);
	header("Location:Foro.php");
}

/* Codigo para Editar Datos */
if(isset($_GET['editar']))
{
	$SQL = $MySQLiconn->query("SELECT * FROM foro WHERE idforo=".$_GET['editar']);
	$getROW = $SQL->fetch_array();
}

/* Codigo para Actualizar Datos */
if(isset($_POST['actualizar']))
{
	$SQL = $MySQLiconn->query("UPDATE Foro SET autor='".$_POST['nomautor']."', titulo='".$_POST['nomtitulo']."', mensaje='".$_POST['nommensaje']."' WHERE idforo=".$_GET['editar']);
	header("Location:Foro.php"); //SI NO FUNCIONA SACAR LOS CRUDS DE LA CARPETA
}


?>