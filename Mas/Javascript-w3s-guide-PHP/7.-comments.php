<!DOCTYPE html>
<!--====================================================================================
                                /// START DOC.HTML ///
=====================================================================================-->
<html lang="en">
<!--====================================================================================
                                /// START HEAD ///
=====================================================================================-->
<head>
  <!-- Metadata -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- Document title -->
  <title>JS - 7.Comentarios</title>
  <!-- Favicon -->
  <link rel="shorcut icon" href="assets/img/favicon.ico"/>
  <!-- Stylesheets -->
  <link href="assets/css/custom-style.css" rel="stylesheet">
</head>
<!--=======
END HEAD
========-->
<!--====================================================================================
                                /// START BODY ///
=====================================================================================-->
<body>
  <?php 
  include('includes/nav.php');
  ?>
<!-- Main -->
<div class="main">
  <h1>Comentarios de Javascript</h1><hr>
  <p>Los comentarios de JavaScript se pueden utilizar para explicar el código JavaScript y hacerlo más legible.<br>
  Los comentarios de JavaScript también se pueden utilizar para evitar la ejecución, al probar código alternativo.</p>

<!--=======
Accordion
========-->
<!-- ==================== Panel-1 ====================-->
<button class="accordion">Comentarios de una sola línea</button>
<div class="panel">
	<h2>Comentarios de una sola línea</h2>
	<p>Los comentarios de una sola línea comienzan con <code style="color:red;">//</code>.<br>
		Cualquier texto entre <code style="color:red;">//</code> y el final de la línea será ignorado por JavaScript (no se ejecutará).<br>
	Este ejemplo utiliza un comentario de una sola línea antes de cada línea de código:</p>
	<!-- Ejemplo -->
	<div style="display:inline-block; background-color:lightgrey; padding:10px 20px;">
		<h4>Ejemplo</h4>
		<p><code style="color:red;">// Cambiar encabezado:</code><br>
			document.getElementById("myH1").innerHTML = "Mi primer título.";<br>
			<code style="color:red;">// Cambiar párrafo:</code><br>
		document.getElementById("myP1").innerHTML = "Mi primer párrafo.";</p>
		<h4 id=myH1></h4>
		<p id=myP1></p>
		<script>
	  // Cambiar encabezado:
	  document.getElementById("myH1").innerHTML = "Mi primer título.";
	  // Cambiar párrafo:
	  document.getElementById("myP1").innerHTML = "Mi primer párrafo.";
	</script>
</div>
<p>Este ejemplo utiliza un comentario de una sola línea al final de cada línea para explicar el código:</p>
<!-- Ejemplo -->
<div style="display:inline-block; background-color:lightgrey; padding:10px 20px;">
	<h4>Ejemplo</h4>
	<p>var x = 5; <code style="color:red;">// Declara x, dale el valor de 5</code><br>
		var y = x + 2; <code style="color:red;">// Declara y, dale el valor de x + 2</code><br>
	document.getElementById("demo-1").innerHTML = y;</p>
	<p id=demo-1></p>
	<script>
	  var x = 5; // Declara x, dale el valor de 5
	  var y = x + 2; // Declara y, dale el valor de x + 2
	  document.getElementById("demo-1").innerHTML = y;
	</script>
</div>	
</div>
<!-- ==================== Panel-2 ====================-->
<button class="accordion">Comentarios de varias líneas</button>
<div class="panel">
	<h2>Comentarios de varias líneas</h2>
	<p>
		Los comentarios de varias líneas comienzan con <code style="color:red;">/*</code> y terminan con <code style="color:red; ">*/</code>.<br>
		Cualquier texto entre <code style="color:red;">/*</code> y <code style="color:red;">*/</code>será ignorado por JavaScript.<br>
		Este ejemplo utiliza un comentario de varias líneas (un bloque de comentarios) para explicar el código:
	</p>
	<!-- Ejemplo -->
	<div style="display:inline-block; background-color:lightgrey; padding:10px 20px;">
		<h4>Ejemplo</h4>
		<code style="color:red;">/*<br>
			El código siguiente cambiará<br>
			el encabezado con id = "myH2"<br>
			y el párrafo con id = "myP2"<br>
		*/</code>
		<p>
			document.getElementById("myH2").innerHTML = "Mi primer título";<br>
			document.getElementById("myP2").innerHTML = "Mi primer párrafo.";  
		</p>
		<h4 id=myH2></h4>
		<p id=myP2></p>
		<script>
	/*
	El código siguiente cambiará
	el encabezado con id = "myH2"
	y el párrafo con id = "myP2"
	*/
	document.getElementById("myH2").innerHTML = "Mi primer título.";
	document.getElementById("myP2").innerHTML = "Mi primer párrafo.";
</script>
</div>
<p>Es más común utilizar comentarios de una sola línea.<br>
Los comentarios en bloque se utilizan a menudo para documentación formal.</p>
</div>
<!-- ==================== Panel-3 ====================-->
<button class="accordion">Uso de comentarios para evitar la ejecución</button>
<div class="panel">
	<h2>Uso de comentarios para evitar la ejecución</h2>
	<p>El uso de comentarios para evitar la ejecución de código es adecuado para las pruebas de código.<br>
		Agregar <code style="color:red;">//</code> delante de una línea de código cambia las líneas de código de una línea ejecutable a un comentario.<br>
		Este ejemplo usa <code style="color:red;">//</code> para evitar la ejecución de una de las líneas de código:</p>
		<!-- Ejemplo -->
		<div style="display:inline-block; background-color:lightgrey; padding:10px 20px;">
			<h4>Ejemplo</h4>
			<p>//document.getElementById("myH").innerHTML = "Mi primer título.";<br>
			document.getElementById("myP").innerHTML = "Mi primer párrafo.";</p>
			<h1 id=myh2></h1>
			<p id=myP3></p>
			<script>
	//document.getElementById("myH").innerHTML = "Mi primer título.";
	document.getElementById("myP3").innerHTML = "Mi primer párrafo.";
</script>
</div>
<p>Este ejemplo utiliza un bloque de comentarios para evitar la ejecución de varias líneas:</p>
<!-- Ejemplo -->
<div style="display:inline-block; background-color:lightgrey; padding:10px 20px;">
	<h4>Ejemplo</h4>
	<p>/*<br>
		document.getElementById("myh2").innerHTML = "Mi primer título";<br>
		document.getElementById("myP3").innerHTML = "Cambiar mi primer párrafo.";<br>
	*/</p>
	<h1 id=myH4></h1>
	<p id=myP4></p>
	<script>
	/*
	document.getElementById("myH4").innerHTML = "Mi primer título";
	document.getElementById("myP4").innerHTML = "Cambiar mi primer párrafo.";
	*/
	document.getElementById("myP4").innerHTML = "Mi primer párrafo.";
</script>
</div>
</div>

</div>
<!-- Javascript-->
<script src="assets/js/accordion.js"></script>
</body>
</html>
