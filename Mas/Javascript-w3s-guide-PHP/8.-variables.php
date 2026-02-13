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
  <title>JS - 8.Variables</title>
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
  <h1>Variables de JavaScript</h1><hr>
  <p>Las variables de JavaScript son contenedores para almacenar valores de datos.<br>
  En este ejemplo, <code style="color:red;">x</code>, <code style="color:red;">y</code>, y <code style="color:red;">z</code> son variables declaradas con la palabra clave <code style="color:red;">var</code>:</p>

  <div style="display:inline-block; background-color:lightgrey; padding:10px 20px;">
    <h4>Ejemplo</h4>
    <p>var x = 5;<br>
    var y = 6;<br>
    var z = x + y;<br>
    document.getElementById("demo-1").innerHTML ="El valor de z es: " + z;
    </p>
    <p id=demo-1></p>
    <script>
      var x = 5;
      var y = 6;
      var z = x + y;
      document.getElementById("demo-1").innerHTML ="El valor de z es: " + z;
    </script>
  </div>

  <p>En el ejemplo anterior:</p>
  <ul>
    <li>x almacena el valor 5</li>
    <li>y almacena el valor 6</li>
    <li>z almacena el valor 11</li>
  </ul>

  <img src="assets/img/variables.jpg">

<!--=======
Accordion
========-->
<!-- ==================== Panel-1 ====================-->
<button class="accordion">Usando let y const (2015)</button>
<div class="panel">
  <h2>Usando let y const (2015)</h2>
  <p>Antes de 2015, usar la palabra clave <code style="color:red;">var</code> era la única forma de declarar una variable de JavaScript.</p>
  <p>La versión 2015 de JavaScript (ES6 - ECMAScript 2015) permite el uso de la palabra clave <code style="color:red;">const</code> para definir una variable que no se puede reasignar y la palabra clave <code style="color:red;">let</code> para definir una variable con alcance restringido.</p>
  <p>Debido a que es un poco complicado describir la diferencia entre estas palabras clave, y debido a que no son compatibles con los navegadores más antiguos, la primera parte de este tutorial se utilizará con mayor frecuencia <code style="color:red;">var</code>.</p>
  <p>Safari 10 y Edge 14 fueron los primeros navegadores en ser totalmente compatibles con ES6:</p>
  <table>
    <tr>
      <td><img src="assets/img/chrome.jpg" width="50px"></td>
      <td><img src="assets/img/edge.png" width="50px"></td>
      <td><img src="assets/img/firefox.png" width="50px"></td>
      <td><img src="assets/img/safary.jpg" width="50px"></td>
      <td><img src="assets/img/opera.png" width="50px"></td>
    </tr>
    <tr>
      <td>Chrome 58</td>
      <td>Edge 14</td>
      <td>Firefox 54</td>
      <td>Safari 10</td>
      <td>Opera 55</td>
    </tr>
    <tr>
      <td>Enero 2017</td>
      <td>Agosto 2016</td>
      <td>Marzo 2017</td>
      <td>Julio 2016</td>
      <td>Agosto 2018</td>
    </tr>
  </table>
</div>
<!-- ==================== Panel-2 ====================-->
<button class="accordion">Al igual que el álgebra</button>
<div class="panel">
<h2>Al igual que el álgebra</h2>
<p>En este ejemplo, <code style="color:red;">precio1</code>, <code style="color:red;">precio2</code>, y <code style="color:red;">total</code>, son variables:</p>
  <div style="display:inline-block; background-color:lightgrey; padding:10px 20px;">
    <h4>Ejemplo</h4>
    <p>var precio1 = 5;<br>
      var precio2 = 6;<br>
      var total = precio1 + precio2;<br>
      document.getElementById("demo-2").innerHTML = "El total es: " + total;
    </p>
    <p id="demo-2"></p>
    <script>
      var precio1 = 5;
      var precio2 = 6;
      var total = precio1 + precio2;
      document.getElementById("demo-2").innerHTML = "El total es: " + total;
    </script>
  </div>
<ul>
  <li>En programación, al igual que en álgebra, usamos variables (como precio1) para mantener valores.</li>
  <li>En programación, al igual que en álgebra, usamos variables en expresiones (total = precio1 + precio2).</li>
  <li>Del ejemplo anterior, puede calcular que el total es 11.</li>
</ul>
<img src="assets/img/algebra.jpg">
</div>
<!-- ==================== Panel-3 ====================-->
<button class="accordion">Identificadores</button>
<div class="panel">
<h2>Identificadores</h2>
<p>Todas las <b>variables</b> de JavaScript deben <b>identificarse</b> con <b>nombres únicos</b> denominados <b>identificadores</b>.<br>
Los identificadores pueden ser nombres cortos (como x e y) o nombres más descriptivos (edad, suma, volumen total).</p>

<i style="color:blue;">Los identificadores son nombres de las variables en Javascript</i><br>

<table>
	<tr>
		<td colspan="2"><h4>Reglas generales para construir nombres para variables (identificadores únicos)</h4></td>
	</tr>
	<tr>
		<td>Los nombres deben comenzar con una letra</td>
		<td width="50%">(AZ o az), los nombres distinguen entre mayúsculas y minúsculas,<br> y e Y son identificadores distintos.</td>
	</tr>
	<tr>
		<td>Los nombres también pueden comenzar con $ y _</td>
		<td>No los usaremos en este tutorial</td>
	</tr>
	<tr>
		<td>Los nombres pueden contener dígitos</td>
		<td>(1 o 10)</td>
	</tr>
	<tr>
		<td>Los nombres pueden contener guiones bajos</td>
		<td>_</td>
	</tr>
	<tr>
		<td>Los nombres pueden contener signos de dólar</td>
		<td>$</td>
	</tr>
	<tr>
		<td>No se pueden usar las palabras reservadas</td>
		<td>Palabras clave de Javascript</td>
	</tr>
</table>

<br>
<table>
	<tr>
		<td><b>Signo de dolar ($)</b></td>
		<td><b>Guión bajo (_)</b></td>
	</tr>
	<tr>
		<td>
			<p>Dado que JavaScript trata un signo de dólar como una letra, los identificadores que contienen $ son nombres válidos de variables:</p>
			<div style="display:inline-block; background-color:lightgrey; padding:10px 20px;">
				<p></p>
				<p>var $$$ = "Hola mundo";<br>
					var $ = 2;<br>
					var $miDinero = 5;<br>
					document.getElementById("demo-13").innerHTML = $ + $miDinero;
				</p>
				<p id=demo-13></p>
				<script>
					var $$$ = "Hola mundo";	
					var $ = 2;
					var $miDinero = 5;
					document.getElementById("demo-13").innerHTML = $ + $miDinero;
				</script>
			</div>
			<p>El uso del signo de dólar no es muy común en JavaScript, pero los programadores profesionales a menudo lo usan como un alias para la función principal en una biblioteca de JavaScript.<br>
				En la biblioteca de JavaScript jQuery, por ejemplo, la función principal <code style="color:red;">$</code> se usa para seleccionar elementos HTML. En jQuery <code style="color:red;">$("p");</code> significa "seleccionar todos los elementos p".</p>
			</td>
			<td>
				<p>Dado que JavaScript trata el subrayado como una letra, los identificadores que contienen _ son nombres de variables válidos:</p>
				<div style="display:inline-block; background-color:lightgrey; padding:10px 20px;">
					<p>var _apellido = "Moreno";<br>
						var _x = 2;<br>
						var _100 = 5;<br>
					document.getElementById("demo-14").innerHTML = _x + _100;</p>
					<p id=demo-14></p>
					<script>
						var _x = 2;
						var _100 = 5;
						document.getElementById("demo-14").innerHTML = _x + _100;
					</script>
				</div>
				<p>El uso del guión bajo no es muy común en JavaScript, pero una convención entre los programadores profesionales es usarlo como un alias para las variables "privadas (ocultas)".</p>
			</td>
		</tr>
	</table>
<img src="assets/img/identificadores.jpg">
</div>
<!-- ==================== Panel-4 ====================-->
<button class="accordion">El operador de asignación</button>
<div class="panel">
<h2>El operador de asignación</h2>
<p>En JavaScript, el signo igual (<code style="color:red;">=</code>) es un operador de "asignación", no un operador "igual a".<br>
Esto es diferente al álgebra. Lo siguiente no tiene sentido en álgebra:</p>
<code style="color:red;">x = x + 5</code>
<p>En JavaScript, sin embargo, tiene mucho sentido: asigna el valor de x + 5 a x.<br>
(Calcula el valor de x + 5 y pone el resultado en x. El valor de x se incrementa en 5.)</p>
<img src="assets/img/operador_asignacion.jpg"><br>
<i>El operador "igual a" está escrito como <code style="color:red;">==</code> en JavaScript.</i>
</div>
<!-- ==================== Panel-5 ====================-->
<button class="accordion">Tipos de datos</button>
<div class="panel">
<h2>Tipos de datos</h2>
<p>Las variables de Javascript pueden contener muchos tipos de datos, pero los más comunes son números o cadenas.</p>
<table>
	<tr>
		<td><b>Tipo de dato</b></td>
		<td><b>Descripción</b></td>
		<td><b>Ejemplo</b></td>
	</tr>
	<tr>
		<td>Números</td>
		<td>Se escriben sin comillas, pero si se ponen entre comillas se tratará como una cadena de texto.</td>
		<td>100, 10.5</td>
	</tr>
	<tr>
		<td>Cadenas</td>
		<td>Son valores de texto y se escriben entre comillas simples o dobles.</td>
		<td>"Wuicho",'Pepe', "20"</td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td></td>
	</tr>
</table>
<div style="display:inline-block; background-color:lightgrey; padding:10px 20px;">
  <h4>Ejemplo</h4>
  <p>var pi = 3.14;<br>
  var persona = "Paquito";<br>
  var responder = '¡Sí lo soy!';</p>
  <p id=demo-3></p>
  <script>
    var pi = 3.14;
    var persona = "Paquito";
    var responder = '¡Sí lo soy!';
    document.getElementById("demo-3").innerHTML =
    pi + "<br>" + persona + "<br>" + responder;
  </script>
</div>
</div>
<!-- ==================== Panel-6 ====================-->
<button class="accordion">Declaración (creación) de variables</button>
<div class="panel">
<h2>Declaración (creación) de variables</h2>
<p>La creación de una variable en JavaScript se denomina <b>"declarar"</b> una variable.<br>
Declaras una variable de JavaScript con la palabra clave <code style="color:red;">var</code>:</p>
<div style="display:inline-block; background-color:lightgrey; padding:10px 20px;">
<p>var nombreCarro;</p>
</div>

<p>Después de la declaración, la variable no tiene valor (técnicamente tiene el valor de <code style="color:red;">undefined</code>).<br>
Para <b>asignar</b> un valor a la variable al declararla, use el signo igual seguido del valor:</p>
<div style="display:inline-block; background-color:lightgrey; padding:10px 20px;">
<p>nombreCarro = "Derby";</p>
</div>
<p>En el siguiente ejemplo, creamos una variable llamada nombreCarro y le asignamos el valor "Derby".<br>
Luego "mostramos" el valor dentro de un párrafo HTML con id = "demo-4":</p>
<div style="display:inline-block; background-color:lightgrey; padding:10px 20px;">
  <h4>Ejemplo</h4>
  <p>Crear una variable, asignarle un valor y mostrarla:<br>
  var nombreCarro = "Derby";<br>
  document.getElementById("demo-4").innerHTML = nombreCarro;</p>
  <p id=demo-4></p>
  <script>
    var nombreCarro = "Derby";
    document.getElementById("demo-4").innerHTML = nombreCarro;
  </script>
</div><br>
<i style="color:blue;">Es una buena práctica de programación declarar todas las variables al comienzo de un script.</i><br>
<img src="assets/img/declaracion_variable.jpg">


<table>
	<tr>
		<td><b>Declarar en una sóla línea</b></td>
		<td><b>Declarar en varias líneas</b></td>
	</tr>
	<tr>
		<td>
			<p>Puede declarar muchas variables en una declaración.<br>
				Inicie la declaración con <code style="color:red;">var</code> y separe las variables con <b>comas</b> :</p>
				<div style="display:inline-block; background-color:lightgrey; padding:10px 20px;">
					<p>var persona = "Pepe", nombreCarro = "Derby", precio = 200;<br>
					document.getElementById("demo-5").innerHTML = nombreCarro;</p>
					<p id=demo-5></p>
					<script>
						var persona = "Pepe", nombreCarro = "Derby", precio = 200;
						document.getElementById("demo-5").innerHTML = nombreCarro;
					</script>
				</td>
				<td>
					<p>Pero también una declaración puede abarcar varias líneas:</p>
					<div style="display:inline-block; background-color:lightgrey; padding:10px 20px;">
						<p>var persona = "Pepe",<br>
							nombreCarro = "Derby",<br>
							precio = 200;<br>
						document.getElementById("demo-6").innerHTML = nombreCarro;</p>
						<p id=demo-6></p>
						<script>
							var persona = "Pepe",
							nombreCarro = "Derby",
							precio = 200;
							document.getElementById("demo-6").innerHTML = nombreCarro;
						</script>
					</div>
				</td>
			</tr>
		</table>

	</div>
<!-- ==================== Panel-8 ====================-->
<button class="accordion">Valor = indefinido</button>
<div class="panel">
<h2>Valor = indefinido</h2>
<p>En los programas de computadora, las variables a menudo se declaran sin valor.<br>
El valor puede ser algo que deba calcular o algo que se proporcione más adelante, como una entrada del usuario.<br>
Una variable declarada sin valor tendrá el valor <code style="color:red;">undefined</code>.<br>
La variable nombreNovia tendrá el valor <code style="color:red;">undefined</code> después de la ejecución de esta declaración:</p>
<div style="display:inline-block; background-color:lightgrey; padding:10px 20px;">
<h4>Ejemplo</h4>
<p>var nombreNovia;</p>
<p id=demo-7></p>
<script>
var nombreNovia;
document.getElementById("demo-7").innerHTML = nombreNovia;
</script>
</div><br>
<img src="assets/img/undefined.jpg" width="400px">
</div>
<!-- ==================== Panel-9 ====================-->
<button class="accordion">Volver a declarar variables</button>
<div class="panel">
  <h2>Volver a declarar variables</h2>
<p>Si vuelve a declarar una variable de JavaScript, no perderá su valor.<br>
La variable <code style="color:red;">nombreUniversidad</code> seguirá teniendo en cuenta el valor "UNAM" de la ejecución de estas declaraciones:</p>
<div style="display:inline-block; background-color:lightgrey; padding:10px 20px;">
  <h4>Ejemplo</h4>
  <p>var nombreUniversidad = "UNAM";<br>
  var nombreUniversidad;</p>
  <p id=demo-8></p>
  <script>
    var nombreUniversidad = "UNAM";
    var nombreUniversidad;
    document.getElementById("demo-8").innerHTML = nombreUniversidad;
  </script>
</div>
</div>
<!-- ==================== Panel-10 ====================-->
<button class="accordion">JavaScript Aritmética</button>
<div class="panel">
  <h2>JavaScript Aritmética</h2>
<p>Al igual que con el álgebra, puede hacer aritmética con variables de JavaScript utilizando operadores como <code style="color:red;">=</code> y <code style="color:red;">+</code>.</p>
<ul>
	<li><b>Números:</b> el resultado será una sumatoria.</li>
	<li><b>Cadenas:</b> el resultado será una concatenación.</li>
</ul>
<table>
	<tr>
		<td width="50%"><b>Números</b></td>
		<td width="50%"><b>Cadenas</b></td>
	</tr>
	<tr>
		<td>
			<div style="display:inline-block; background-color:lightgrey; padding:10px 20px;">
				<p>var d = 5 + 2 + 3;</p>
				<p id=demo-9></p>
				<script>
					var d = 5 + 2 + 3;
					document.getElementById("demo-9").innerHTML = d;
				</script>
			</div>
		</td>
		<td>
			<div style="display:inline-block; background-color:lightgrey; padding:10px 20px;">
				<p>var e = "José" + " " + "Luis";</p>
				<p id=demo-10></p>
				<script>
					var e = "José" + " " + "Luis";
					document.getElementById("demo-10").innerHTML = e;
				</script>
			</div>
		</td>
	</tr>
	<tr>
		<td>
			<p>Ahora bien, si pone un número entre comillas, el resto de los números se tratarán como cadenas y se concatenarán en lugar de sumarse.</p>
			<div style="display:inline-block; background-color:lightgrey; padding:10px 20px;">
				<p>var f = "5" + 2 + 3;</p>
				<p id=demo-11></p>
				<script>
					f = "5" + 2 + 3;
					document.getElementById("demo-11").innerHTML = f;
				</script>
			</div>
		</td>
		<td></td>
	</tr>
	<tr>
		<td>
			<p>Cosa que no ocurre si el número entre comillas se coloca al final:</p>
			<div style="display:inline-block; background-color:lightgrey; padding:10px 20px;">
				<p>var g = 2 + 3 + "5";</p>
				<p id=demo-12></p>
				<script>
					var g = 2 + 3 + "5";
					document.getElementById("demo-12").innerHTML = g;
				</script>
			</td>
			<td></td>
	</tr>	
</table>
</div>

</div>
</div>
<!-- Javascript-->
<script src="assets/js/accordion.js"></script>
</body>
</html>
