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
  <title>JS - 9.Operadores</title>
  <!-- Favicon -->
  <link rel="shorcut icon" href="assets/img/favicon.ico"/>
  <!-- Stylesheets -->
  <link href="assets/css/custom-style.css" rel="stylesheet">
  <link href="assets/css/grid.css" rel="stylesheet">
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
  <h1>Operadores de JavaScript</h1><hr>

<!-- ==================== Panel-1 ====================-->
<button class="accordion">Introducción</button>
<div class="panel">
	<p>Los operadores más comunes son los de asignación y los aritméticos.</p>
	<table>
		<tr>
			<th>Operador de asignación (<code style="color:red;">=</code>)</th>
			<th>Operador de suma (<code style="color:red;">+</code>)</th>
			<th>Operador de multiplicación (<code style="color:red;">*</code>)</th>
		</tr>
		<tr>
			<td>
				<p>El operador de asignación (<code style="color:red;">=</code>) asigna un valor a una variable.</p>
				<p>x = 10; // asignar el valor 10 a x</p>
				<h4>Ejemplo</h4>
				<p>var x = 10;<br>
				document.getElementById("demo-two").innerHTML = x;</p>
				<p id=demo-two></p>
				<script>
					var x = 10;
					document.getElementById("demo-two").innerHTML = x;
				</script>
			</td>
			<td>
				<p>El operador de suma (<code style="color:red;">+</code>) suma números:</p>
				<p>z = x + y; // sumar los valores de x y y</p>
				<h4>Ejemplo</h4>
				<p>var x = 5;<br>
					var y = 2;<br>
					var z = x + y;<br>
				document.getElementById("demo-three").innerHTML = z;</p>
				<p id=demo-three></p>
				<script>
					var x = 5;
					var y = 2;
					var z = x + y;
					document.getElementById("demo-three").innerHTML = z;
				</script>
			</td>
			<td>
				<p>El operador de multiplicación (<code style="color:red;">*</code>) multiplica números.</p>
				<p>z = x * y; // multiplicar los valores de x y y</p>
				<h4>Ejemplo</h4>
				<p>var x = 5;<br>
					var y = 2;<br>
					var z = x * y;<br>
				document.getElementById("demo-four").innerHTML = z;</p>
				<p id=demo-four></p>
				<script>
					var x = 5;
					var y = 2;
					var z = x * y;
					document.getElementById("demo-four").innerHTML = z;
				</script>
			</td>
		</tr>		
	</table>

<p>Asignar valores a las variables y sumarlos:</p>
<p>x = 5, // asignar el valor 5 a x<br>
	y = 2, // asignar el valor 2 a y<br>
	calcula z = x + y, // asignar el valor (5 + 2) a z<br>
muestra z:</p>

<div style="display:inline-block; background-color:lightgrey; padding:10px 20px;">
	<h4>Ejemplo</h4>
	<p>var x = 5;<br>
		var y = 2;<br>
		var z = x + y;<br>
	document.getElementById("demo-one").innerHTML = z;</p>
	<p id=demo-one></p>
	<script>
		var x = 5;
		var y = 2;
		var z = x + y;
		document.getElementById("demo-one").innerHTML = z;
	</script>
</div>	
</div>
<!-- ==================== Panel-2 ====================-->
<button class="accordion">Operadores de números</button>
<div class="panel">
	<main class="clear"> 
		<!--/// Icons ejample ///-->
		<div class="group">
			<div class="one_third first">
				<h2>Operadores aritméticos</h2>
				<p>Los operadores aritméticos se utilizan para realizar operaciones aritméticas en números.</p>
				<table>
					<tr>
						<th>Operador</th>
						<th>Descripción</th>
					</tr>
					<tr>
						<td>+</td>
						<td>Suma</td>
					</tr>
					<tr>
						<td>-</td>
						<td>Resta</td>
					</tr>
					<tr>
						<td>*</td>
						<td>Multiplicación</td>
					</tr>
					<tr>
						<td>**</td>
						<td>Exponenciación <a href="https://www.w3schools.com/js/js_es6.asp" target="auto">(ES2016)</a></td>
					</tr>
					<tr>
						<td>/</td>
						<td>División</td>
					</tr>
					<tr>
						<td>%</td>
						<td>Módulo (Resto de división)</td>
					</tr>
					<tr>
						<td>++</td>
						<td>Incremento</td>
					</tr>
					<tr>
						<td>--</td>
						<td>Decremento</td>
					</tr>   	  	  	  	  	  	  	
				</table><br>
				<i>Los operadores aritméticos se describen detalladamente en el capítulo <a href="https://www.w3schools.com/js/js_arithmetic.asp" target="auto">Aritmética de JS.</a></i>
			</div>
			<div class="one_third">
				<h2>Operadores de asignación</h2>
				<p>Los operadores de asignación, asignan valores a las variables de JavaScript.</p>
				<table>
					<tr>
						<th>Operador</th>
						<th>Ejemplo</th>
						<th>Igual que</th>
					</tr>
					<tr>
						<td>=</td>
						<td>x = y</td>
						<td>x = y</td>
					</tr>
					<tr>
						<td>+=</td>
						<td>x += y</td>
						<td>x = x + y</td>
					</tr>
					<tr>
						<td>-=</td>
						<td>x -= y</td>
						<td>x = x - y</td>
					</tr>
					<tr>
						<td>*=</td>
						<td>x *= y</td>
						<td>x = x * y</td>
					</tr>
					<tr>
						<td>/=</td>
						<td>x /= y</td>
						<td>x = x / y</td>
					</tr>
					<tr>
						<td>%=</td>
						<td>x %= y</td>
						<td>x = x % y</td>
					</tr>
					<tr>
						<td>**=</td>
						<td>x **= y</td>
						<td>x = x ** y</td>
					</tr>
				</table>
				<!-- crear propio espacio
				<p>El operador de <b>asignación de suma</b> (<code style="color:red;">+=</code>) agrega un valor a una variable.</p>
				<div style="display:inline-block; background-color:lightgrey; padding:10px 20px;">
					<h4>Ejemplo</h4>
					<p>var x = 10;<br>
						x += 5;<br>
					document.getElementById("demo-five").innerHTML = x;</p>
					<p id=demo-five></p>
					<script>
						var x = 10;
						x += 5;
						document.getElementById("demo-five").innerHTML = x;
					</script>
				</div><br>
				<i>Los operadores de asignación se describen detalladamente en el capítulo <a href="https://www.w3schools.com/js/js_assignment.asp" target="_blank">Asignación de JS.</a></i>					
				-->
			</div>
			<div class="one_third">
				<h2>Operadores de comparación</h2>
				<table>
					<tr>
						<th>Operador</th>
						<th>Descripción</th>
					</tr>
					<tr>
						<td>==</td>
						<td>Igual a</td>
					</tr>
					<tr>
						<td>===</td>
						<td>Igual valor y tipo igual</td>
					</tr>
					<tr>
						<td>!=</td>
						<td>No es igual</td>
					</tr>
					<tr>
						<td>!==</td>
						<td>No igual valor o no igual tipo</td>
					</tr>
					<tr>
						<td>></td>
						<td>Mas grande que</td>
					</tr>
					<tr>
						<td><</td>
						<td>Menos que</td>
					</tr>
					<tr>
						<td>>=</td>
						<td>Mayor qué o igual a</td>
					</tr>
					<tr>
						<td><=</td>
						<td>Menos que o igual a</td>
					</tr>
					<tr>
						<td>?</td>
						<td>Operadora ternaria</td>
					</tr>				
				</table>
				<p>Los operadores de comparación se describen detalladamente en el capítulo <a href="https://www.w3schools.com/js/js_comparisons.asp" target="_blank">Comparaciones de JS.</a></p>				
			</div>
		</div>
		<div class="group">
			<div class="one_half first">
				<h2>Operadores lógicos</h2>
				<table>
					<tr>
						<th>Operador</th>
						<th>Descripción</th>
					</tr>
					<tr>
						<td>&&</td>
						<td>Lógica y</td>
					</tr>
					<tr>
						<td>||</td>
						<td>Lógica o</td>
					</tr>
					<tr>
						<td>!</td>
						<td>Lógica no</td>
					</tr>			
				</table>
				<p>Los operadores lógicos se describen en su totalidad en el capítulo <a href="https://www.w3schools.com/js/js_comparisons.asp" target="_blank">Comparaciones JS.</a></p>
			</div>
			<div class="one_half">
				<h2>Operadores de tipo</h2>
				<table>
					<tr>
						<th>Operador</th>
						<th>Descripción</th>
					</tr>
					<tr>
						<td>typeof</td>
						<td>Devuelve el tipo de variable</td>
					</tr>
					<tr>
						<td>nstanceof</td>
						<td>Devuelve verdadero si un objeto es una instancia de un tipo de objeto</td>
					</tr>		
				</table>
				<p>Los operadores de tipo se describen detalladamente en el capítulo <a href="https://www.w3schools.com/js/js_type_conversion.asp" target="_blank">Conversión de tipo JS.</a></p>
			</div>
		</div>
		<div class="content">
			<h2>Operadores bit a bit</h2>
			<p>Los operadores de bits funcionan con números de 32 bits.</p>
			<p>Cualquier operando numérico de la operación se convierte en un número de 32 bits. El resultado se convierte de nuevo a un número de JavaScript.</p>
			<table>
				<tr>
					<th>Operador</th>
					<th>Descripción</th>
					<th>Ejemplo</th>
					<th>Igual que</th>
					<th>Resultado</th>
					<th>Decimal</th>
				</tr>
				<tr>
					<td>&</td>
					<td>y</td>
					<td>5 & 1</td>
					<td>0101 & 0001</td>
					<td>0001</td>
					<td>1</td>
				</tr>
				<tr>
					<td>|</td>
					<td>o</td>
					<td>5 | 1</td>
					<td>0101 | 0001</td>
					<td>0101</td>
					<td>5</td>
				</tr>
				<tr>
					<td>~</td>
					<td>No</td>
					<td>~ 5</td>
					<td>~0101</td>
					<td>1010</td>
					<td>10</td>
				</tr>
				<tr>
					<td>^</td>
					<td>XOR</td>
					<td>5 ^ 1</td>
					<td>0101 ^ 0001</td>
					<td>0100</td>
					<td>4</td>
				</tr>
				<tr>
					<td><<</td>
					<td>Desplazamiento a la izquierda de llenado cero</td>
					<td>5 << 1</td>
					<td>0101 << 1</td>
					<td>1010</td>
					<td>10</td>
				</tr>
				<tr>
					<td>>></td>
					<td>Desplazamiento a la derecha firmado</td>
					<td>5 >> 1</td>
					<td>0101 >> 1</td>
					<td>0010</td>
					<td>2</td>
				</tr>
				<tr>
					<td>>>></td>
					<td>Desplazamiento a la derecha de llenado cero</td>
					<td>5 >>> 1</td>
					<td>0101 >>> 1</td>
					<td>0010</td>
					<td>2</td>
				</tr>					
			</table>
			<p>Los ejemplos anteriores usan ejemplos sin firmar de 4 bits. Pero JavaScript usa números con signo de 32 bits.<br>
				Debido a esto, en JavaScript, ~ 5 no devolverá 10. Devolverá -6.<br>
				~ 00000000000000000000000000000101 devolverá 11111111111111111111111111111010<br>
			Los operadores bit a bit se describen completamente en el capítulo JS Bitwise0.</p>
		</div>
	</main>
</div>
<!-- ==================== Panel-3 ====================-->
<button class="accordion">Operadores de cadenas</button>
<div class="panel">
	<h2>Operadores de cadenas</h2>
	<p>El operador aritmético <code style="color:red;">+</code> se usa para concatenar cadenas.<br>
	<i>Cuando se usa en cadenas, el operador <code style="color:red;">+</code> se denomina operador de concatenación.</i></p>
	<div style="display:inline-block; background-color:lightgrey; padding:10px 20px;">
		<h4>Ejemplo</h4>
		<p>var txt1 = "José";<br>
			var txt2 = "Luis";<br>
		document.getElementById("demo-six").innerHTML = txt1 + " " + txt2;		</p>
		<p id=demo-six></p>
		<script>
			var txt1 = "José";
			var txt2 = "Luis";
	//var txt3 = txt1 + " " + txt2;
	document.getElementById("demo-six").innerHTML = txt1 + " " + txt2;
	//document.getElementById("demo-five").innerHTML = txt3;
</script>
</div><br>
<p>El operador de asignación <code style="color:red;">+=</code> también se puede usar para concatenar cadenas.</p>

<div style="display:inline-block; background-color:lightgrey; padding:10px 20px;">
	<h4>Ejemplo</h4>
	<p>	txt1 = "Que día";<br>
		txt1 += "tan lindo";<br>
	document.getElementById("demo-seven").innerHTML = txt1;</p>
	<!--<p>var txt1 = "Que día";<br>
	txt1 += "tan lindo";</p>-->
	<p id=demo-seven></p>
	<script>
		txt1 = "Que día ";
		txt1 += "tan lindo";
		document.getElementById("demo-seven").innerHTML = txt1;
	</script>
</div>
</div>
<!-- ==================== Panel-4 ====================-->
<button class="accordion">Sumar cadenas con números</button>
<div class="panel">
	<h2>Sumar cadenas con números</h2>
	<p>Agregar dos números devuelve una suma, pero sumar un número y una cadena devolverá una cadena.</p>

	<div style="display:inline-block; background-color:lightgrey; padding:10px 20px;">
		<h4>Ejemplo</h4>
		<p>Añadiendo un número y una cadena, devuelve una cadena.</p>
		<p>	var x = 5 + 5;<br>
			var y = "5" + 5;<br>
			var z = "Hola" + 5;<br>
			document.getElementById("demo-eight").innerHTML =<br>
		x + "&#60;br&#62;" + y + "&#60;br&#62;" + z;</p>
		<p id=demo-eight></p>
		<script>
			var x = 5 + 5;
			var y = "5" + 5;
			var z = "Hola" + 5;
			document.getElementById("demo-eight").innerHTML =
			x + "<br>" + y + "<br>" + z;
		</script>
	</div>
</div>

</div>
<!-- Javascript-->
<script src="assets/js/accordion.js"></script>
</body>
</html>
