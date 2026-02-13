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
  <title>JS - 10.Arithmertic</title>
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
  <h1>JavaScript Aritmética</h1><hr>

<!-- ==================== Panel-1 ====================-->
<button class="accordion">Operadores aritméticos</button>
<div class="panel">
	<h2>Operadores aritméticos</h2>
	<p>Los operadores aritméticos realizan operaciones aritméticas con números (literales o variables).</p>
	<table>
		<tr>
			<th>Operador</th>
			<th>Descripción</th>
		</tr>
		<tr>
			<td>+</td>
			<td>Adición</td>
		</tr>
		<tr>
			<td>-</td>
			<td>Sustracción</td>
		</tr>
		<tr>
			<td>*</td>
			<td>Multiplicación</td>
		</tr>
		<tr>
			<td>**</td>
			<td>Exponentiación (<a href="https://translate.googleusercontent.com/translate_c?depth=1&hl=es&prev=search&pto=aue&rurl=translate.google.com&sl=en&sp=nmt4&u=https://www.w3schools.com/js/js_es6.asp&usg=ALkJrhjcPm1_9PoA_Zd_EGCPoIOwpLLhMQ" target="_blank">ES2016</a>)</td>
		</tr>
		<tr>
			<td>/</td>
			<td>Division</td>
		</tr>
		<tr>
			<td>%</td>
			<td>Módulo (Remanente)</td>
		</tr>
		<tr>
			<td>++</td>
			<td>Incremento</td>
		</tr>
		<tr>
			<td>--</td>
			<td>Decremento</td>
		</tr>   	  	  	  	  	  	  	
	</table>
</div>
<!-- ==================== Panel-2 ====================-->
<button class="accordion">Operadores y operandos</button>
<div class="panel">
	<h2>Operadores y operandos</h2>
	<p>En una operación aritmética los números se denominan operandos, y la operación que se ejecuta entte ellos la define un operador.</p>
	<table>
		<tr>
			<th>Operando</th>
			<th>Operador</th>
			<th>Operando</th>
		</tr>
		<tr>
			<td>100</td>
			<td>+</td>
			<td>50</td>
		</tr>
	</table>
</div>
<!-- ==================== Panel-3 ====================-->
<button class="accordion">Operaciones aritmeticas</button>
<div class="panel">
	<h2>Operaciones aritmeticas</h2>
	<p>Una operación aritmética típica toma dos números los cuales pueden ser literales, variables o expresiones y produce un nuevo número.</p>
	<table>
		<tr>
			<th>Ejemplo con literales</th>
			<th>Ejemplo con variables</th>
			<th>Ejemplo con expresiones</th>
		</tr>
		<tr>
			<td>
				<p>var x = 100 + 50;<br>
				document.getElementById("demo-one").innerHTML = x;</p>
				<p id=demo-one></p>
				<script>
					var x = 100 + 50;
					document.getElementById("demo-one").innerHTML = x;
				</script>
			</td>
			<td>
				<p>var a = 100;<br>
					var b = 50;<br>
					var x = a + b;<br>
				document.getElementById("demo-two").innerHTML = x;</p>
				<p id=demo-two></p>
				<script>
					var a = 100;
					var b = 50;
					var x = a + b;
					document.getElementById("demo-two").innerHTML = x;
				</script>
			</td>
			<td>
				<p>var a = 3;<br>
					var x = (100 + 50) * a;<br>
				document.getElementById("demo-three").innerHTML = x;</p>
				<p id=demo-three></p>
				<script>
					var a = 3;
					var x = (100 + 50) * a;
					document.getElementById("demo-three").innerHTML = x;
				</script>  			
			</td>
		</tr>
	</table>
</div>
<!-- ==================== Panel-4 ====================-->
<button class="accordion">Operaciones aritmeticas 2</button>
<div class="panel">
	<table>
		<tr>
			<th>Añadir</th>
			<th>Restar</th>
			<th>Multiplicar</th>
			<th>Dividir</th>
		</tr>
		<tr>
			<td>
				<p>El <b>operador de suma (+)</b> agrega números:</p>
				<p>var x = 5;<br>
					var y = 2;<br>
					var z = x + y;<br>
				document.getElementById("demo-four").innerHTML = z;</p>
				<p id=demo-four></p>
				<script>
					var x = 5;
					var y = 2;
					var z = x + y;
					document.getElementById("demo-four").innerHTML = z;
				</script>
			</td>
			<td>
				<p>El <b>operador de resta (-)</b> resta números.</p>
				<p>var x = 5;<br>
					var y = 2;<br>
					var z = x - y;<br>
				document.getElementById("demo-five").innerHTML = z;</p>
				<p id=demo-five></p>
				<script>
					var x = 5;
					var y = 2;
					var z = x - y;
					document.getElementById("demo-five").innerHTML = z;
				</script>  			
			</td>
			<td>
				<p>El <b>operador de multiplicación (*)</b> multiplica números.</p>
				<p>var x = 5;<br>
					var y = 2;<br>
					var z = x * y;<br>
				document.getElementById("demo-six").innerHTML = z;</p>
				<p id=demo-six></p>
				<script>
					var x = 5;
					var y = 2;
					var z = x * y;
					document.getElementById("demo-six").innerHTML = z;
				</script>  			
			</td>
			<td>
				<p>El <b>operador de división (/)</b> divide números.</p>
				<p>var x = 5;<br>
					var y = 2;<br>
					var z = x / y;<br>
				document.getElementById("demo-seven").innerHTML = z;</p>
				<p id=demo-seven></p>
				<script>
					var x = 5;
					var y = 2;
					var z = x / y;
					document.getElementById("demo-seven").innerHTML = z;
				</script>  			
			</td>
		</tr>
	</table>

	<table>
		<tr>
			<th>Remanente</th>
			<th>Incrementando</th>
			<th>Decrementando</th>
			<th>Exponenciación</th>
		</tr>
		<tr>
			<td>
				<p>El <b>operador de módulo (%)</b> devuelve el resto de la división.</p>
				<p>var x = 5;<br>
					var y = 2;<br>
					var z = x % y;<br>
				document.getElementById("demo-eight").innerHTML = z;</p>
				<p id=demo-eight></p>
				<script>
					var x = 5;
					var y = 2;
					var z = x % y;
					document.getElementById("demo-eight").innerHTML = z;
				</script>   			
			</td>
			<td>
				<p>El <b>operador de incremento (++)</b> incrementa los números.</p>
				<p>var x = 5;<br>
					x++;<br>
					var z = x;<br>
				document.getElementById("demo-nine").innerHTML = z;</p>
				<p id=demo-nine></p>
				<script>
					var x = 5;
					x++;
					var z = x;
					document.getElementById("demo-nine").innerHTML = z;
				</script>  			
			</td>
			<td>
				<p>El <b>operador de decremento (--)</b> reduce los números.</p>
				<p>var x = 5;<br>
					x--;<br>
					var z = x;<br>
				document.getElementById("demo-ten").innerHTML = z;</p>
				<p id=demo-ten></p>
				<script>
					var x = 5;
					x--;
					var z = x;
					document.getElementById("demo-ten").innerHTML = z;
				</script>  			
			</td>
			<td>
				<p>El <b>operador de exponenciación (**)</b> eleva el primer operando a la potencia del segundo operando.</p>
				<p>var x = 5;<br>
					<!--var z = x ** 2; // El resultado es 25-->
					document.getElementById("demo-eleven").innerHTML = x ** 2;
					<!--document.getElementById("demo-eleven").innerHTML = z;--></p>
					<p id=demo-eleven></p>
					<script>
						var x = 5;
						document.getElementById("demo-eleven").innerHTML = x ** 2;
					</script>
				</td>
			</tr>
		</table>

		<table>
			<tr>
				<th>Exponenciación</th>
			</tr>
			<tr>
				<td>
					<h4>Math.pow()</h4>
					<p>x ** y produce el mismo resultado que Math.pow(x,y):</p>
					<p>var x = 5;<br>
						<!--var z = Math.pow(x,2);   // El resultado es 25 -->
						document.getElementById("demo-twelve").innerHTML = Math.pow(x,2);
						<!--document.getElementById("demo-twelve").innerHTML = z;--></p>
						<p id=demo-twelve></p>
						<script>
							var x = 5;
							document.getElementById("demo-twelve").innerHTML = Math.pow(x,2);
						</script>			
					</td>
				</tr>
			</table>
			<p><i>En aritmética, la división de dos enteros produce un <b>cociente</b> y un <b>residuo.</b> <br>
				En matemáticas, el resultado de una <b>operación de módulo</b> es el <b>resto</b> de una división aritmética.</i></p>
			</div>
<!-- ==================== Panel-5 ====================-->
<button class="accordion">Prioridad del operador</button>
<div class="panel">
	<h2>Prioridad del operador</h2>
	<p>La precedencia del operador describe el orden en el que se realizan las operaciones en una expresión aritmética.</p>
	<table>
		<tr>
			<th>Prioridad de la (*) y (/)</th>
			<th>Prioridad de los ()</th>
			<th>Igualdad de prioridad</th>
		</tr>
		<tr>
			<td>La multiplicación (*) y la división ( /) tienen mayor <b>prioridad</b> que la suma (+) y la resta (-).</td>
			<td>Las operaciones dentro de los paréntesis tienen <b>prioridad</b></td>
			<td>Operaciones con la misma <b>prioridad</b> (como la suma y la resta), se calculan de izquierda a derecha:</td>
		</tr>
		<tr>
			<td>
				<p>var x = 100 + 50 * 3;<br>
					document.getElementById("demo-thirtheen").innerHTML = x;
					<!--document.getElementById("demo-thirtheen").innerHTML = 100 + 50 * 3;--></p>
					<p id=demo-thirtheen></p>
					<script>
						var x = 100 + 50 * 3;
						document.getElementById("demo-thirtheen").innerHTML = x;
					</script>			
				</td>
				<td>
					<p>var x = (100 + 50) * 3;<br>
						document.getElementById("demo-fourtheen").innerHTML = x;
						<!-- document.getElementById("demo-fourtheen").innerHTML = (100 + 50) * 3; --></p>
						<p id=demo-fourtheen></p>
						<script>
							var x = (100 + 50) * 3;
							document.getElementById("demo-fourtheen").innerHTML = x;
						</script>			
					</td>
					<td>
						<p>var x = 100 + 50 - 3;
							document.getElementById("demo-fifteen").innerHTML = x;<br>
							<!-- document.getElementById("demo-fifteen").innerHTML = 100 + 50 - 3; --></p>
							<p id=demo-fifteen></p>
							<script>
								var x = 100 + 50 - 3;	
								document.getElementById("demo-fifteen").innerHTML = x;
							</script>			
						</td>
					</tr>
				</table>
			</div>
<!-- ==================== Panel-6 ====================-->
<button class="accordion">Valores de prioridad del operador de JavaScript</button>
<div class="panel">
	<h2>Valores de prioridad del operador de JavaScript</h2>
	<p><i>Las entradas de color rojo pálido indican ECMAScript 2015 (ES6) o superior.</i></p>
	<table>
		<tr>
			<th>Valor</th>
			<th>Operador</th>
			<th>Descripción</th>
			<th>Ejemplo</th>
		</tr>
		<tr>
			<td>20</td>
			<td>()</td>
			<td>Agrupación de expresiones</td>
			<td>(3 + 4)</td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td>19</td>
			<td>.</td>
			<td>Miembro</td>
			<td>person.name</td>
		</tr>
		<tr>
			<td>19</td>
			<td>[]</td>
			<td>Miembro</td>
			<td>person ["name"]</td>
		</tr>
		<tr>
			<td>19</td>
			<td>()</td>
			<td>Llamada de función</td>
			<td>myFunction ()</td>
		</tr>
		<tr>
			<td>19</td>
			<td>new</td>
			<td>Crear</td>
			<td>new date ()</td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td>17</td>
			<td>++</td>
			<td>Incremento de sufijo</td>
			<td>i++</td>
		</tr>
		<tr>
			<td>17</td>
			<td>-</td>
			<td>Decremento de sufijo</td>
			<td>i--</td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td>16</td>
			<td>++</td>
			<td>Incremento de prefijo</td>
			<td>++i</td>
		</tr>
		<tr>
			<td>16</td>
			<td>-</td>
			<td>Decremento de prefijo</td>
			<td>--i</td>
		</tr>
		<tr>
			<td>16</td>
			<td>!</td>
			<td>Lógico no</td>
			<td>! (x == y)</td>
		</tr>
		<tr>
			<td>16</td>
			<td>typeof</td>
			<td>Type</td>
			<td>typeof x</td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr style="background-color:red; color:#fff;">
			<td>15</td>
			<td>**</td>
			<td>Exponenciación (ES2016)</td>
			<td>10 ** 2</td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td>14</td>
			<td>*</td>
			<td>Multiplicación</td>
			<td>10 * 5</td>
		</tr>
		<tr>
			<td>14</td>
			<td>/</td>
			<td>División</td>
			<td>10/5</td>
		</tr>
		<tr>
			<td>14</td>
			<td>%</td>
			<td>Resto de división</td>
			<td>10% 5</td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td>13</td>
			<td>+</td>
			<td>Adición</td>
			<td>10 + 5</td>
		</tr>
		<tr>
			<td>13</td>
			<td>-</td>
			<td>Sustracción</td>
			<td>10 - 5</td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td>12</td>
			<td>&#60;&#60;</td>
			<td>Desplazar a la izquierda</td>
			<td>x &#60;&#60; 2</td>
		</tr>
		<tr>
			<td>12</td>
			<td>&#62;&#62;</td>
			<td>Cambiar a la derecha</td>
			<td>x &#62;&#62; 2</td>
		</tr>
		<tr>
			<td>12</td>
			<td>&#62;&#62;&#62;</td>
			<td>Mayús a la derecha (sin firmar)</td>
			<td>x &#62;&#62;&#62; 2</td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td>11</td>
			<td>&#60;</td>
			<td>Menos que</td>
			<td>x&#60;y</td>
		</tr>
		<tr>
			<td>11</td>
			<td>&#60;&#61;</td>
			<td>Menor o igual</td>
			<td>x&#60;&#61;y</td>
		</tr>
		<tr>
			<td>11</td>
			<td>&#62;</td>
			<td>Mas grande que</td>
			<td>x&#62;y</td>
		</tr>
		<tr>
			<td>11</td>
			<td>&#62;&#61;</td>
			<td>Mayor que o igual</td>
			<td>x&#62;&#61;y</td>
		</tr>
		<tr style="background-color:red; color:#fff;">
			<td>11</td>
			<td>in</td>
			<td>Propiedad en objeto</td>
			<td>"PI" in matemáticas</td>
		</tr>	
		<tr style="background-color:red; color:#fff;">
			<td>11</td>
			<td>instanceof</td>
			<td>Instancia de objeto</td>
			<td>instanceof Array</td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td>10</td>
			<td>==</td>
			<td>Igual</td>
			<td>x == y</td>
		</tr>
		<tr>
			<td>10</td>
			<td>===</td>
			<td>Estricto igual</td>
			<td>x === y</td>
		</tr>
		<tr>
			<td>10</td>
			<td>! =</td>
			<td>Desigual</td>
			<td>¡X! = y</td>
		</tr>
		<tr>
			<td>10</td>
			<td>! ==</td>
			<td>Estrictamente desigual</td>
			<td>¡X! == y</td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>	
		<tr>
			<td>9</td>
			<td>Y</td>
			<td>Y un poco</td>
			<td>x & y</td>
		</tr>
		<tr>
			<td>8</td>
			<td>^</td>
			<td>XOR un poco</td>
			<td>x ^ y</td>
		</tr>
		<tr>
			<td>7</td>
			<td>|</td>
			<td>O un poco</td>
			<td>	x | y</td>
		</tr>
		<tr>
			<td>6</td>
			<td>&&</td>
			<td>Y lógico</td>
			<td>x && y</td>
		</tr>
		<tr>
			<td>5</td>
			<td>||</td>
			<td>O lógico</td>
			<td>x || y</td>
		</tr>
		<tr>
			<td>4</td>
			<td>? :</td>
			<td>Condición</td>
			<td>? "Sí No"</td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td>3</td>
			<td>+ =</td>
			<td>Asignación</td>
			<td>x + = y</td>
		</tr>
		<tr>
			<td>3</td>
			<td>/ =</td>
			<td>Asignación</td>
			<td>x / = y</td>
		</tr>
		<tr>
			<td>3</td>
			<td>	- =</td>
			<td>Asignación</td>
			<td>x - = y</td>
		</tr>
		<tr>
			<td>3</td>
			<td>* =</td>
			<td>Asignación</td>
			<td>x * = y</td>
		</tr>
		<tr>
			<td>3</td>
			<td>% =</td>
			<td>Asignación</td>
			<td>x% = y</td>
		</tr>
		<tr>
			<td>3</td>
			<td>&#60;&#60; =</td>
			<td>Asignación</td>
			<td>x &#60;&#60; = y</td>
		</tr>
		<tr>
			<td>3</td>
			<td>&#62;&#62; =</td>
			<td>Asignación</td>
			<td>x &#62;&#62; = y</td>
		</tr>
		<tr>
			<td>3</td>
			<td>&#62;&#62;&#62; =</td>
			<td>Asignación</td>
			<td>x &#62;&#62;&#62; = y</td>
		</tr>
		<tr>
			<td>3</td>
			<td>& =</td>
			<td>Asignación</td>
			<td>x & = y</td>
		</tr>
		<tr>
			<td>3</td>
			<td>^ =</td>
			<td>Asignación</td>
			<td>x ^ = y</td>
		</tr>														
		<tr>
			<td>3</td>
			<td>| =</td>
			<td>Asignación</td>
			<td>x | = y</td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr style="background-color:red; color:#fff;">
			<td>2</td>
			<td>yield</td>
			<td>Función de pausa</td>
			<td>yield x</td>
		</tr>
		<tr>
			<td>1</td>
			<td>,</td>
			<td>Coma</td>
			<td>5, 6</td>
		</tr>		
	</table>
	<p><i>Las expresiones entre paréntesis se calculan completamente antes de usar el valor en el resto de la expresión.</i></p>
</div>

</div>
<!-- Javascript-->
<script src="assets/js/accordion.js"></script>
</body>
</html>
