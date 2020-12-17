
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>La Abuelita | Al día</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
<header>
<div class="contenedor">
<div id="marca">
<h1><span class="resaltado"></span>"LA ABUELITA"</h1>
</div>
<nav>
<ul>
<li><a href="index.html">Inicio</a></li>
<li class="actual"><a href="servicios.html">Servicios</a></li>
<li><a href="registrousuario.php">Registro</a></li>
<li><a href="chat.html">Chat</a></li>
<li><a href="nosotros.php">Nosotros</a></li>
</ul>
</nav>
</div>
</header> 
<section>
<h1 id="catalogo">¡Pasteles del Día!</h1>
<table id="catalogo">
<tr id="catalogo">
    <th id="catalogo">Producto</th>
    <th id="catalogo">Precio</th>
    <th id="catalogo">Foto</th>
</tr>
<?php
include('/css/estilos.css');
$conn = mysqli_connect("localhost", "root", "root", "pasteleria");
$sql = "SELECT nombre, precio, foto FROM producto WHERE NOT nombre = 'Pastel de Vainilla' AND NOT nombre = 'Cheesecake'";
$result = $conn->query($sql);
$peso = "$";
$comprar = "<aside id='latcomprar'><a href='pago.php' class='btncomprar btn'>Comprar</a></aside>";

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "<tr><td id='catalogo'>" . $row["nombre"] . "</td><td id = 'catalogo'>" . $peso . $row["precio"] . 
        "</td><td id='catalogo'>" . "<a href=''</a><img src='" . $row["foto"] . "'height='200px' width='200px'>" . $comprar.
        "</td></tr>";
    }
}else{
    echo "Error";
}
$conn->close();
?>
</table>
</section>
<footer>
<p>¡ESTAMOS NOSOTROS PARA ENDULZAR TUS SUEÑOS!, Copyright &copy;2020</p>
</footer>
</body>
</html>