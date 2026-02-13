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
  <title>JS - 14.Objects</title>
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
<h1>Objetos</h1><hr>
<h2>Objetos, propiedades y métodos de la vida real</h2>
<p>En la vida real, un automóvil es un <b>objeto</b>.<br>
Un automóvil tiene <b>propiedades</b> como el peso y el color, y <b>métodos</b> como arrancar y parar:</p>

<table>
	<tr>
		<th>Objeto</th>
		<th>Propiedades</th>
		<th>Métodos</th>
	</tr>
	<tr>
		<td rowspan="4" width="30%"><img src="assets/img/objectExplained.gif"></td>
		<td>coche.nombre = Fiat</td>
		<td>coche.arrancar ( )</td>
	</tr>
	<tr>
		<td>coche.modelo = 500</td>
		<td>coche.conducir ( )</td>
	</tr>
	<tr>
		<td>coche.peso = 850kg</td>
		<td>coche.frenar ( )</td>
	</tr>
	<tr>
		<td>coche.color = blanco</td>
		<td>coche.parar ( )</td>
	</tr>	
</table>

<p>Todos los automóviles tienen las mismas <b>propiedades</b>, pero los <b>valores de</b> las propiedades difieren de un automóvil a otro.<br>
Todos los coches tienen los mismos <b>métodos</b>, pero los métodos se realizan <b>en momentos diferentes</b>.</p>

<!-- ==================== Objetos JavaScript ====================-->
<button class="accordion">Objetos JavaScript</button>
<div class="panel">
	<h2>Objetos JavaScript</h2>
	<p>Ya ha aprendido que las variables de JavaScript son contenedores de valores de datos.<br>Este código asigna un <b>valor simple</b> (Fiat) a una <b>variable</b> llamada carro:</p>
	<div style="display:inline-block; background-color:lightgrey; padding:10px 20px;">
		<h4>Variables</h4>
		<p>var coche = "Fiat";</p>
		<p id="demo-one"></p>
		<script>
			// Crea y muestra una variable:
			var coche = "Fiat";
			document.getElementById("demo-one").innerHTML = coche;
		</script>
	</div>
	<p>Los objetos también son variables. Pero los objetos pueden contener muchos valores.<br>
	Este código asigna <b>muchos valores</b> (Fiat, 500, blanco) a una <b>variable</b> denominada coche:</p>
	<div style="display:inline-block; background-color:lightgrey; padding:10px 20px;">
		<h4>Objetos</h4>
		<p>var coche = {type:"Fiat", model:"500", color:"blanco"};</p>
		<p id="demo-two"></p>
		<script>
			// Crea un objeto:
			var coche = {type:"Fiat", model:"500", color:"blanco"};
			// Muestra algunos datos del objeto:
			document.getElementById("demo-two").innerHTML = "El tipo de coche es " + coche.type;
		</script>
	</div>
	<p>Los valores se escriben como pares <b>nombre: valor</b> (nombre y valor separados por dos puntos).<br>
	<i>Los objetos JavaScript son contenedores de valores con nombre llamados propiedades o métodos.</i></p>
</div>
<!-- ==================== Definición de objeto ====================-->
<button class="accordion">Definición de objeto</button>
<div class="panel">
	<h2>Definición de objeto</h2>
	<p>Usted define (y crea) un objeto JavaScript con un objeto literal:</p>
	<div style="display:inline-block; background-color:lightgrey; padding:10px 20px;">
		<h4>Objetos</h4>
		<p>var persona = {nombre:"Daniel", apellido:"Santander", edad:50, colorOjos:"azul"};</p>
		<p id="demo-three"></p>
		<script>
		// Crea un objeto:
		var persona = {nombre:"Daniel", apellido:"Santander", edad:50, colorOjos:"azul"};
		// Mostrar algunos datos del objeto:
		document.getElementById("demo-three").innerHTML =
		persona.nombre + " tiene " + persona.edad + " años de edad.";
		</script>
	</div>
	<p>Los espacios y los saltos de línea no son importantes. Una definición de objeto puede abarcar varias líneas:</p>
	<div style="display:inline-block; background-color:lightgrey; padding:10px 20px;">
		<h4>Objetos</h4>
		<p>var persona = {<br>
		nombre: "Ivonne",<br>
		apellido: "Mayoral",<br>
		edad: 50,<br>
		colorOjos: "azul"<br>
		};</p>
		<p id="demo-four"></p>
		<script>
		// Crea un objeto:
		var persona = {
			nombre: "Ivonne",
			apellido: "Mayoral",
			edad: 50,
			colorOjos: "azul"
		};
		// Muestra algunos datos del objeto:
		document.getElementById("demo-four").innerHTML =
		persona.nombre + " tiene " + persona.edad + " años de edad.";
		</script>
	</div>
</div>
<!-- ==================== Propiedades del objeto ====================-->
<button class="accordion">Propiedades del objeto</button>
<div class="panel">
	<h2>Propiedades del objeto</h2>
	<p>Los pares <b>nombre.valores</b> en los objetos de JavaScript se denominan <b>propiedades</b>:</p>
	<table>
		<tr>
			<th>Propiedad</th>
			<th>Valor de la propiedad</th>
		</tr>
		<tr>
			<td>nombre</td>
			<td>Juan</td>
		</tr>
		<tr>
			<td>apellido</td>
			<td>Barbosa</td>
		</tr>
		<tr>
			<td>años</td>
			<td>50</td>
		</tr>
		<tr>
			<td>color de los ojos</td>
			<td>azul</td>
		</tr>
	</table>
</div>
<!-- ==================== Acceder a las propiedades del objeto ====================-->
<button class="accordion">Acceder a las propiedades del objeto</button>
<div class="panel">
	<h2>Acceder a las propiedades del objeto</h2>
	<p>Puede acceder a las propiedades del objeto de dos formas:</p>
	<p>nombreObjeto.nombrePropiedad<br>o<br>nombreObjeto["nombrePropiedad"]</p>
	<div style="display:inline-block; background-color:lightgrey; padding:10px 20px;">
		<h4>Ejemplo 1</h4>
		<p>nombreObjeto.nombrePropiedad</p>
		<p id="demo-five"></p>
		<script>
		// Crea un objeto:
		var persona = {
			nombre: "Luis",
			apellido : "Moreno",
			id     :  5566
		};
		// Muestra algunos datos del objeto:
		document.getElementById("demo-five").innerHTML =
		persona.nombre + " " + persona.apellido;
		</script>
	</div><br><br>
	<div style="display:inline-block; background-color:lightgrey; padding:10px 20px;">
		<h4>Ejemplo 2</h4>
		<p>nombreObjeto["nombrePropiedad"]</p>
		<p id="demo-six"></p>
		<script>
			// Crea un objeto:
			var persona = {
				nombre: "Regina",
				apellido : "Arias",
				id     :  5566
			};
			// Muestra algunos datos del objeto:
			document.getElementById("demo-six").innerHTML =
			persona["nombre"] + " " + persona["apellido"];
		</script>
	</div>
</div>
<!-- ==================== Métodos de objetos ====================-->
<button class="accordion">Métodos de objetos</button>
<div class="panel">
	<h2>Métodos de objetos</h2>
	<p>Los objetos también pueden tener <b>métodos</b>.<br>
	Los métodos son <b>acciones</b> que se pueden realizar en objetos.<br>
	Los métodos se almacenan en propiedades como <b>definiciones de funciones</b>.</p>
	<table>
		<tr>
			<th>Propiedad</th>
			<th>Valor de la propiedad</th>
		</tr>
		<tr>
			<td>nombre</td>
			<td>David</td>
		</tr>
		<tr>
			<td>apellido</td>
			<td>Cisneros</td>
		</tr>
		<tr>
			<td>años</td>
			<td>50</td>
		</tr>
		<tr>
			<td>color de los ojos</td>
			<td>azul</td>
		</tr>
		<tr>
			<td>nombre completo</td>
			<td>function () {return this.nombre + "" + this.apellido;}</td>
		</tr>				
	</table>
	<p><i>Un método es una función almacenada como propiedad.</i></p>
</div>
<!-- ==================== La palabra clave this ====================-->
<button class="accordion">La palabra clave this</button>
<div class="panel">
	<h2>La palabra clave this</h2>
	<p>En una definición de función, <code style="color:red;">this</code> se refiere al "propietario" de la función.<br>
	En el ejemplo siguiente, <code style="color:red;">this</code> es el <b>objeto persona</b> que "posee" la función <code style="color:red;">nombreCompleto</code>.<br>
	En otras palabras, <code style="color:red;">this.nombre</code> significa la propiedad <code style="color:red;">nombre</code> de <b>este objeto</b>.<br>
	Lea más sobre la palabra clave <code style="color:red;">this</code> en <a href="https://www.w3schools.com/js/js_this.asp" target="_blank">JS this Keyword</a>.</p>
	<p>var persona = {<br>	
	nombre: "Laura",<br>
	apellido : "Toriz",<br>
	id: 5566,<br>
	nombreCompleto : function() {<br>
	return this.nombre + " " + this.apellido;<br>
	}<br>
	};</p>
</div>
<!-- ==================== Acceso a métodos de objeto ====================-->
<button class="accordion">Acceso a métodos de objeto</button>
<div class="panel">
	<h2>Acceso a métodos de objeto</h2>
	<p>	Se accede a un método de objeto con la siguiente sintaxis:</p>
	<div style="display:inline-block; background-color:lightgrey; padding:10px 20px;">
		<p>objectName.methodName()</p>
	</div><br><br>	
	<div style="display:inline-block; background-color:lightgrey; padding:10px 20px;">
		<h4>Ejemplo</h4>
		<p>nombre = persona.nombreCompleto();<br>	
		document.getElementById("demo-seven").innerHTML = persona.nombreCompleto();</p>
		<p id="demo-seven"></p>
		<script>
		// Crea un objeto:
		var persona = {
			nombre: "Luis",
			apellido : "Moreno",
			id: 5566,
			nombreCompleto : function() {
				return this.nombre + " " + this.apellido;
			}
		};
		// Mostrar datos del objeto:
		document.getElementById("demo-seven").innerHTML = persona.nombreCompleto();
		</script>
	</div>
	<p>Si accede a un método <b>sin</b> los paréntesis (), devolverá la <b>definición de</b> la <b>función</b>:</p>
	<div style="display:inline-block; background-color:lightgrey; padding:10px 20px;">
		<h4>Ejemplo</h4>
		<p>name = persona.nombreCompleto;<br>	
		document.getElementById("demo-eight").innerHTML = persona.nombreCompleto;</p>
		<p id="demo-eight"></p>
		<script>
		// Crea un objeto:
		var persona = {
			nombre: "Luis",
			apellido : "Moreno",
			id : 5566,
			nombreCompleto : function() {
				return this.nombre + " " + this.apellido;
			}
		};
		// Mostrar datos del objeto:
		document.getElementById("demo-eight").innerHTML = persona.nombreCompleto;
		</script>
	</div>
</div>
<!-- ===== ¡No declare cadenas, números y booleanos como objetos! =====-->
<button class="accordion">¡No declare cadenas, números y booleanos como objetos!</button>
<div class="panel">
	<h2>¡No declare cadenas, números y booleanos como objetos!</h2>
	<p>Cuando se declara una variable de JavaScript con la palabra clave <code style="color:red;">"new"</code>, la variable se crea como un objeto:</p>
	<p>var x = new String(); // Declara x como un objeto cadena<br>	var y = new Number(); // Declara y como un objeto número<br> var z = new Boolean(); // Declara z como un objeto booleano</p>
	<p>Evite objetos <code style="color:red;">String</code>, <code style="color:red;">Number</code> y <code style="color:red;">Boolean</code>. Complican su código y ralentizan la velocidad de ejecución.</p>
	<p><i>Aprenderá más sobre los objetos más adelante en este tutorial.</i></p>
</div>

</div>

<!-- Javascript-->
<script src="assets/js/accordion.js"></script>
</body>
</html>
