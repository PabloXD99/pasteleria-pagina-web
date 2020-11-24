<?php

include_once 'Db.php';

/* Codigo para Insertar Datos */
if(isset($_POST['guardar']))
{
	echo "Guardandoooooooooooooooooooo";

	$fecha_cita = $MySQLiconn->real_escape_string($_POST["fechacita"]);
	$hora_cita = $MySQLiconn->real_escape_string($_POST["horacita"]);
	$tema_cita = $MySQLiconn->real_escape_string($_POST["temacita"]);
    $estado_cita = $MySQLiconn->real_escape_string($_POST["estadocita"]);
    $numcliente_cita = $MySQLiconn->real_escape_string($_POST["numclientecita"]);

	$SQL = $MySQLiconn->query("INSERT INTO cita(fecha, hora, tema, estado, numcliente) VALUES('$fecha_cita','$hora_cita', '$tema_cita', '$estado_cita', '$numcliente_cita')");

	if(!$SQL)
	{
		echo $MySQLiconn->error;
	}
	header("Location:cita.php");
}

/* Codigo para Eliminar Datos */
if(isset($_GET['eliminar']))
{
	$SQL = $MySQLiconn->query("DELETE FROM cita WHERE idcita=".$_GET['eliminar']);
	header("Location:cita.php");
}

/* Codigo para Editar Datos */
if(isset($_GET['editar']))
{
	$SQL = $MySQLiconn->query("SELECT * FROM cita WHERE idcita=".$_GET['editar']);
	$getROW = $SQL->fetch_array();
}

/* Codigo para Actualizar Datos */
if(isset($_POST['actualizar']))
{
    $SQL = $MySQLiconn->query("UPDATE cita SET fecha='".$_POST['fechacita']."', hora='".$_POST['horacita']."', tema='".$_POST['temacita']."', estado='".$_POST['estadocita']."', numcliente='".$_POST['numclientecita']."' WHERE idcita=".$_GET['editar']);
    header("Location:cita.php"); //SI NO FUNCIONA SACAR LOS CRUDS DE LA CARPETA
}


?>