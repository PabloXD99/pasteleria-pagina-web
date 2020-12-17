<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>La Abuelita | Pagar</title>
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
<li><a href="registro.html">Registro</a></li>
<li><a href="chat.html">Chat</a></li>
<li><a href="nosotros.php">Nosotros</a></li>
</ul>
</nav>
</div>
</header> 
<br>
<section id="main">
<div class="contenedor">
<article id="main_col">
<h1 style="font-size:40px">PAGO</h1>
<ul style="padding: 20px" id="servicios" >
<li>
<h1 style="font-size: 30px">Usted selecciono:</h1>
<h3 style="font-size: 20px">Pastel de Chocolate</h3>
<p>
<img src="img/pastel-de-chocolate.jpeg" height="150px" width="150px">
<aside>
<label for="cantidad">Cantidad:</label>
<input style="width:25px"type="number" id="cantidad" name="cantidad" min="1">
<input style="width:30px"type="submit" value="Ok">
</aside>
</p>
</li>
<li>
<h1 style="font-size: 30px">Información de Pago</h1>
<p>
<label for="numtarjeta">Número de Tarjeta:</label>
<input style="width:120px" type="text" id="numtarjeta" name="numtarjeta">
<label for="cvv">CVV:</label>
<input style="width:30px" type="text" id="cvv" name="cvv">
<label for="fdv">FDV:</label>
<input style="width:40px" type="text" id="fdv" name="fdv">
<br>
<br>
<label for="total">Total:$150</label>
<input style="width:80px"type="submit" value="FINALIZAR">
</p>
</li>

</ul>
</article>
</div>
</section>
<footer>
<p>¡ESTAMOS NOSOTROS PARA ENDULZAR TUS SUEÑOS!, Copyright &copy;2020</p>
</footer>   
</body>
</html>