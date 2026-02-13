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
  <title>JS - 12.Data Types</title>
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
  <h1>Tipos de datos</h1><hr>
  <h2>Tipos de datos de JavaScript</h2>
  <p>Las variables de JavaScript pueden contener muchos tipos de datos : números, cadenas, objetos y más:</p>

  <div style="display:inline-block; background-color:lightgrey; padding:10px 20px;">
    <p>var longuitud = 16; // Número <br>
    var apellido = "Moreno"; // Cadena <br>
    var x = {Nombre:"Luis", Apellido:"Moreno"}; // Objeto</p>
  </div>

<br><br>

<!-- ==================== El concepto de tipo de datos ====================-->
<button class="accordion">El concepto de tipo de datos</button>
<div class="panel">
  <h2>El concepto de tipos de datos</h2>
  <p>En programación, los tipos de datos son un concepto importante.<br>
    Para poder operar con variables, es importante saber algo sobre el tipo.<br>
  Sin tipos de datos, una computadora no puede resolver esto de manera segura:</p>

  <div style="display:inline-block; background-color:lightgrey; padding:10px 20px;">
    var x = 16 + "Volvo";
  </div>

  <p>¿Tiene algún sentido agregar "Volvo" a dieciséis? ¿Producirá un error o producirá un resultado?<br>
  JavaScript tratará el ejemplo anterior como:</p>

  <div style="display:inline-block; background-color:lightgrey; padding:10px 20px;">
    <p>var x = "16" + "Volvo";</p>
  </div>

  <br><br>

  <table>
    <tr>
      <td>Al agregar un número y una cadena, JavaScript tratará el número como una cadena.</td>
      <td>Al agregar una cadena y un número, JavaScript tratará el número como una cadena.</td>
    </tr>
    <tr>
      <td>
        <h4>Ejemplo</h4>
        <p>var x = 16 + "Volvo";<br>
        document.getElementById("demo-one").innerHTML = x;</p>
        <p id=demo-one></p>
        <script>
          var x = 16 + "Volvo";
          document.getElementById("demo-one").innerHTML = x;
        </script>
      </td>
      <td>
        <h4>Ejemplo</h4>
        <p>var x = "Volvo" + 16;<br>
        document.getElementById("demo-two").innerHTML = x;</p>
        <p id=demo-two></p>
        <script>
          var x = "Volvo" + 16;
          document.getElementById("demo-two").innerHTML = x;
        </script>
      </td>
    </tr>
  </table>

  <br><br>

  <table>
    <tr>
      <td colspan="2">
        <p align="center">JavaScript evalúa expresiones de izquierda a derecha. Diferentes secuencias pueden producir diferentes resultados:</p>        
      </td>
    </tr>
    <tr>
      <td>
        <h4>Ejemplo:</h4>
        <p>var x = 16 + 4 + "Volvo";<br>
        document.getElementById("demo-three").innerHTML = x;</p>
        <p id=demo-three></p>
        <script>
          var x = 16 + 4 + "Volvo";
          document.getElementById("demo-three").innerHTML = x;
        </script>        
      </td>
      <td>
        <h4>Ejemplo:</h4>
        <p>var x = "Volvo" + 16 + 4;<br>
        document.getElementById("demo-four").innerHTML = x;</p>
        <p id=demo-four></p>
        <script>
          var x = "Volvo" + 16 + 4;
          document.getElementById("demo-four").innerHTML = x;
        </script>        
      </td>
    </tr>
    <tr>
      <td>JavaScript trata 16 y 4 como números, hasta que llega a "Volvo".</td>
      <td>En el segundo ejemplo, dado que el primer operando es una cadena, todos los operandos se tratan como cadenas.</td>
    </tr>
  </table>  
</div>

<!-- ==================== Tipos de datos (dinámicos) ====================-->
<button class="accordion">Tipos de datos (dinámicos)</button>
<div class="panel">
<h2>Tipos de datos (dinámicos)</h2>
<p>JavaScript tiene tipos dinámicos. Esto significa que la misma variable se puede utilizar para contener diferentes tipos de datos:</p>

<div style="display:inline-block; background-color:lightgrey; padding:10px 20px;">
<h4>Ejemplo</h4>
<p>var x;  // Ahora x no está definido<br>
x = 5;  // Ahora x es un número<br>
x = "Pepe";  // Ahora x es una cadena<br>
document.getElementById("demo-five").innerHTML = x;</p>
<p id=demo-five></p>
<script>
var x;  // Ahora x no está definido
x = 5;  // Ahora x es un número
x = "Pepe";  // Ahora x es una cadena
document.getElementById("demo-five").innerHTML = x;
</script>
</div>
</div>

<!-- ==================== Strings (Cadenas) ====================-->
<button class="accordion">Strings (Cadenas)</button>
<div class="panel">
<h2>Strings (Cadenas)</h2>
<p>Una cadena (o una cadena de texto) es una serie de caracteres como "José Luis".</p>
<p><b>Las cadenas se escriben con comillas</b><br>Las cadenas se escriben con comillas, y puede utilizar comillas simples o dobles:</p>
<div style="display:inline-block; background-color:lightgrey; padding:10px 20px;">
<h4>Ejemplo</h4>
<p>var nombreCarro1 = "Derby"; // Uso de comillas dobles<br>
var nombreCarro2 = 'Tsuru'; // Uso de comillas simples<br>
document.getElementById("demo-six").innerHTML =<br>
nombreCarro1 + "&#60;br&#62;" + <br>
nombreCarro2; 
</p>
<p id=demo-six></p>
<script>
var nombreCarro1 = "Derby"; // Uso de comillas dobles
var nombreCarro2 = 'Tsuru'; // Uso de comillas simples
document.getElementById("demo-six").innerHTML =
nombreCarro1 + "<br>" + 
nombreCarro2; 
</script>
  </div>

<p><b>Comillas dentro de una cadena</b> <br> Puede usar comillas dentro de una cadena, siempre que no coincidan con las comillas que rodean la cadena:</p> 

 <div style="display:inline-block; background-color:lightgrey; padding:10px 20px;">
<h4>Ejemplo</h4>
<p>var respuesta1 = "It's alright"; // Comillas simples dentro de comillas dobles<br>
var respuesta2 = "El es llamado 'Wuicho'"; // Comillas simples dentro de comillas dobles<br>
var respuesta3 = 'El es llamado "Wuicho"'; // Comillas dobles dentro de comillas simples<br>
document.getElementById("demo-seven").innerHTML =<br>
respuesta1 + "&#60;br&#62;" + <br>
respuesta2 + "&#60;br&#62;" + <br>
respuesta3;</p>
<p id=demo-seven></p>
<script>
var respuesta1 = "It's alright"; // Comillas simples dentro de comillas dobles
var respuesta2 = "El es llamado 'Wuicho'"; // Comillas simples dentro de comillas dobles
var respuesta3 = 'El es llamado "Wuicho"'; // Comillas dobles dentro de comillas simples
document.getElementById("demo-seven").innerHTML =
respuesta1 + "<br>" + 
respuesta2 + "<br>" + 
respuesta3;
</script>
 </div>
 <p><i>Aprenderá más sobre cadenas más adelante en este tutorial.</i></p>
</div>

<!-- ==================== Números ====================-->
<button class="accordion">Números</button>
<div class="panel">
 <h2>Números</h2>
 <p>JavaScript tiene solo un tipo de números. <br>
Los números se pueden escribir con o sin decimales:</p>
<div style="display:inline-block; background-color:lightgrey; padding:10px 20px;">
<h4>Ejemplo</h4>
<p>var x1 = 34.00; // Escrito con decimales<br>
var x2 = 34; // Escrito sin decimales<br>
var x3 = 3.14;<br>
document.getElementById("demo-eight").innerHTML =<br>
x1 + "&#60;br&#62;" + x2 + "&#60;br&#62;" + x3;</p>
<p id=demo-eight></p>
<script>
var x1 = 34.00; // Escrito con decimales
var x2 = 34; // Escrito sin decimales
var x3 = 3.14;
document.getElementById("demo-eight").innerHTML =
x1 + "<br>" + x2 + "<br>" + x3;
</script>
</div>

<p><b>Uso de notación científica exponencial</b><br> Los números extra grandes o extra pequeños se pueden escribir con notación científica (exponencial):</p>

<div style="display:inline-block; background-color:lightgrey; padding:10px 20px;">
<h4>Ejemplo</h4>
<p>var y = 123e5; // 12300000<br>
var z = 123e-5; // 0.00123<br>
document.getElementById("demo-nine").innerHTML =<br>
y + "&#60;br&#62;" + z;</p>
<p id=demo-nine></p>
<script>
var y = 123e5; // 12300000
var z = 123e-5; // 0.00123
document.getElementById("demo-nine").innerHTML =
y + "<br>" + z;
</script>
</div>

<p><i>Aprenderá más sobre los números más adelante en este tutorial.</i></p>
</div>

<!-- ==================== Booleanos ====================-->
<button class="accordion">Booleanos</button>
<div class="panel">
<h2>Booleanos</h2>
<p>Los booleanos solo pueden tener dos valores: verdadero o falso, y a menudo se utilizan en pruebas condicionales.</p>

<div style="display:inline-block; background-color:lightgrey; padding:10px 20px;">
<h4>Ejemplo</h4>
<p>var x = 5;<br>
var y = 5;<br>
var z = 6;<br>
document.getElementById("demo-ten").innerHTML = <br>
(x == y) // Devuelve verdadero<br>
+ "&#60;br&#62;" + <br> 
(x == z);  // Devuelve falso</p>
<p id=demo-ten></p>
<script>
var x = 5;
var y = 5;
var z = 6;
document.getElementById("demo-ten").innerHTML =
(x == y) + // Devuelve verdadero
"<br>" + 
(x == z); // Devuelve falso
</script>
  </div>

<p><i>Aprenderá más sobre las pruebas condicionales más adelante en este tutorial.</i></p>
</div>

<!-- ====================  Arrays (Matrices) ====================-->
<button class="accordion"> Arrays (Matrices)</button>
<div class="panel">
  <h2> Arrays (Matrices)</h2>
  <p>Las matrices de JavaScript se escriben entre corchetes, y sus elementos están separados por comas.<br>
  Los índices de matriz están basados ​​en cero, lo que significa que el primer elemento es [0], el segundo es [1] y así sucesivamente.<br>
  El siguiente código declara (crea) una matriz llamada carros, que contiene tres elementos (nombres de automóviles):</p>

<div style="display:inline-block; background-color:lightgrey; padding:10px 20px;">
<h4>Ejemplo</h4>
<p>var carros = ["Derby","Tsuru","BMW"];<br>
document.getElementById("demo-eleven").innerHTML = carros[0];</p>
<p id=demo-eleven></p>
<script>
var carros = ["Derby","Tsuru","BMW"];
document.getElementById("demo-eleven").innerHTML = carros[0];
</script>
  </div>

<p><i>Aprenderá más sobre matrices más adelante en este tutorial.</i></p>
</div>

<!-- ==================== Objetos ====================-->
<button class="accordion">Objetos</button>
<div class="panel">
<h2>Objetos</h2>
<p>Los objetos de JavaScript se escriben con llaves {}.<br>
Las propiedades de los objetos se escriben como nombre: pares de valores, separados por comas.<br>
El objeto (persona) en el siguiente ejemplo tiene 4 propiedades: nombre, apellido, edad y color de ojos.</p>
<div style="display:inline-block; background-color:lightgrey; padding:10px 20px;">
<h4>Ejemplo</h4>
<p>var persona = { <br>
nombre:"Ramón", <br>
apellido:"Valencia", <br>
edad:50, <br>
colorOjos:"azul <br>
"}; <br>
document.getElementById("demo-twelve").innerHTML = persona.nombre + " tiene " + persona.edad + " años de edad.";</p>
<p id=demo-twelve></p>
<script>
var persona = {
  nombre : "Ramón",
  apellido : "Valencia",
  edad : 50,
  colorOjos : "azul"
};
document.getElementById("demo-twelve").innerHTML =
persona.nombre + " tiene " + persona.edad + " años de edad.";
</script>
</div>

<p><i>Aprenderá más sobre los objetos más adelante en este tutorial.</i></p>
</div>

<!-- ==================== El operador typeof ====================-->
<button class="accordion">El operador typeof</button>
<div class="panel">
<h2>El operador typeof</h2>
<p>El operador typeof devuelve el tipo de variable o expresión:</p>
<table>
  <tr>
    <td>Devuelve cadenas</td>
    <td>Devuelve números</td>
  </tr>
  <tr>
    <td>
    <p>document.getElementById("demo-thirteen").innerHTML = <br>
    typeof "" + "&#60;br&#62;" + // Devuelve una "cadena"<br>
    typeof "José" + "&#60;br&#62;" + // Devuelve una "cadena"<br>
    typeof "José Luis"; // Devuelve una "cadena"</p>
    <p id=demo-thirteen></p>
    <script>
    document.getElementById("demo-thirteen").innerHTML = 
    typeof "" + "<br>" + // Devuelve una "cadena"
    typeof "José" + "<br>" + // Devuelve una "cadena"
    typeof "José Luis"; // Devuelve una "cadena"
    </script>
    </td>
    <td><p>document.getElementById("demo-fourteen").innerHTML = <br>
    typeof 0 + "&#60;br&#62;" + // Devuelve un "número"<br>
    typeof 314 + "&#60;br&#62;" + // Devuelve un "número"<br>
    typeof 3.14 + "&#60;br&#62;" + // Devuelve un "número"<br>
    typeof (3) + "&#60;br&#62;" + // Devuelve un "número"<br>
    typeof (3 + 4); // Devuelve un "número"</p>
    <p id=demo-fourteen></p>
    <script>
    document.getElementById("demo-fourteen").innerHTML = 
    typeof 0 + "<br>" + // Devuelve un "número"
    typeof 314 + "<br>" + // Devuelve un "número"
    typeof 3.14 + "<br>" + // Devuelve un "número"
    typeof (3) + "<br>" + // Devuelve un "número"
    typeof (3 + 4); // Devuelve un "número"
    </script>      
    </td>
  </tr>
</table>
</div>
<!-- ==================== Undefined (Indefinido)  ====================-->
<button class="accordion">Undefined (Indefinido) </button>
<div class="panel">
<h2>Undefined (Indefinido) </h2>
<p>El valor (y el tipo de datos) de una variable sin valor será indefinido.</p>

<div style="display:inline-block; background-color:lightgrey; padding:10px 20px;">
<h4>Ejemplo</h4>
<p>var carro; // El valor no está definido, el tipo no está definido<br>
document.getElementById("demo-fifteen").innerHTML =<br>
carro + "&#60;br&#60;" + typeof carro;</p>
<p id=demo-fifteen></p>
<script>
var carro; // El valor no está definido, el tipo no está definido.
document.getElementById("demo-fifteen").innerHTML =
carro + "<br>" + typeof carro;
</script>
</div>

<p>Las variables se pueden vaciar si establece el valor en undefined. Y el tipo por lo tanto también será undefined</p>

<div style="display:inline-block; background-color:lightgrey; padding:10px 20px;">
<h4>Ejemplo</h4>
<p>var carro = "Derby";<br>
car = undefined; // El valor se ha reseteado a indefinido.<br>
document.getElementById("demo-sixteen").innerHTML =<br>
car + "&#60;br&#62;" + typeof car;</p>
<p id=demo-sixteen></p>
<script>
var carro = "Derby";
carro = undefined; // El valor se ha reseteado a indefinido
document.getElementById("demo-sixteen").innerHTML =
carro + "<br>" + typeof carro;
</script>
</div>
</div>

<!-- ==================== Valores vacíos ====================-->
<button class="accordion">Valores vacíos</button>
<div class="panel">
<h2>Valores vacíos</h2>
<p>Un valor vacío no tiene nada que ver undefined.<br>
Una cadena vacía tiene tanto un valor legal como un tipo.</p>

<div style="display:inline-block; background-color:lightgrey; padding:10px 20px;">
<h4>Ejemplo</h4>
<p>var carro = ""; // El valor es "", el tipo de "cadena"<br>
document.getElementById("demo-seventeen").innerHTML =<br>
"El valor es: " + carro <br>
+ "&#60;br&#62;" + <br>
"El tipo es: " + typeof carro;</p>
<p id=demo-seventeen></p>
<script>
var carro = ""; // El valor es "", el typeof es una "cadena"
document.getElementById("demo-seventeen").innerHTML =
"El valor es: " + carro 
+ "<br>" +
"El tipo es: " + typeof carro;
</script>
</div>
</div>

<!-- ==================== Null (Nulo) ====================-->
<button class="accordion">Null (Nulo)</button>
<div class="panel">
<h2>Null (Nulo)</h2>
<p>En JavaScript null es "nada". Se supone que es algo que no existe.<br>
Sin embargo JavaScript interpreta el typeof de null como un objeto.</p>

<table>
  <tr>
    <td>Estableciendo un objeto como null</td>
    <td>Estableciendo un objeto como undefined</td>
  </tr>
  <tr>
    <td>
      <h4>Ejemplo</h4>
      <p>var persona = {<br>
        nombre:"José", <br>
        apellido:"Moreno", <br>
        edad:50, <br>
        colorOjos:"azul <br>
        "};<br>
      person = null;</p>
    </td>
    <td>
      <h4>Ejemplo</h4>
      <p>var persona = {<br>
        nombre:"José", <br>
        apellido:"Moreno", <br>
        edad:50, <br>
        colorOjos:"azul"<br>
      };<br>
      persona = undefined; <br>
      document.getElementById("demo-eighteen").innerHTML = persona;</p>
      <p id=demo-eighteen></p>
      <script>
      var persona = {
        nombre:"José", 
        apellido:"Moreno", 
        edad:50, 
        colorOjos:"azul"
      };
      persona = undefined;
      document.getElementById("demo-eighteen").innerHTML = persona;
      </script>      
    </td>
  </tr>
  <tr>
    <td><p>Puede vaciar un objeto configurándolo en null, el valor ahora será null pero el tipo seguirá siendo un objeto.</p></td>
    <td><p>También puede vaciar un objeto estableciendo el valor en undefined, ahora tanto el valor como el tipo no están definidos.</p></td>
  </tr>
</table>

</div>

<!-- ==================== Datos primitivos y complejos ====================-->
<button class="accordion">Datos primitivos y complejos</button>
<div class="panel">
<h2>Datos primitivos y complejos</h2>
<table>
  <tr>
    <th>Datos primitivos</th>
    <th>Datos complejos</th>
  </tr>
  <tr>
    <td>
      <p>Un valor de datos primitivo es un valor de datos simple y único sin propiedades ni métodos adicionales.</p>
      <p>El operador typeof puede devolver uno de estos tipos primitivos:</p>
      <ul>
        <li>string</li>
        <li>number</li>
        <li>boolean</li>
        <li>undefined</li>
      </ul>      
    </td>
    <td>
    <p>El operador typeof puede devolver uno de dos tipos complejos:</p>
    <ul>
      <li>function</li>
      <li>object</li>
    </ul>
    <p>El operador typeof devuelve "objeto" para objetos, matrices (arrays) y null.</p>
    <p>El operador typeof devuelve " object" para matrices (arrays) porque en JavaScript las matrices son objetos.</p>      
    </td>
  </tr>  
  <tr>
    <td>
      <h4>Ejemplo</h4>
      <p>El operador typeof devuelve el tipo de variable o expresión.</p>
      <p>document.getElementById("demo-nineteen").innerHTML = <br>
      typeof "Jorge" + "&#60;br&#62;" + // Devolución "cadena" <br>
      typeof 3.14 + "&#60;br&#62;" + // Devolución "número" <br>
      typeof true + "&#60;br&#62;" + // Devolución "booleano" <br>
      typeof false + "&#60;br&#62;" + // Devolución "booleano" <br>
      typeof x; // Devolución "indefinido" (si x no tiene valor)</p>
      <p id=demo-nineteen></p>
      <script>
      document.getElementById("demo-nineteen").innerHTML = 
      typeof "Jorge" + "<br>" + // Devolución "cadena"
      typeof 3.14 + "<br>" + // Devolución "número"
      typeof true + "<br>" + // Devolución "booleano"
      typeof false + "<br>" + // Devolución "booleano"
      typeof x; // Devolución "indefinido" (si x no tiene valor)
      </script>    
    </td>
    <td>
      <h4>Ejemplo</h4>
      <p>document.getElementById("demo-twenty").innerHTML = <br>
      typeof {name:'john', age:34} + "br" + // Devuelve "objeto" <br>
      typeof [1,2,3,4] + "br" + // Devuelve "objeto" (no "array", consulte la nota a continuación) <br>
      typeof null + "br" + // Devuelve "objeto" <br>
      typeof function myFunc(){}; // Devuelve "función"</p>
      <p id=demo-twenty></p>
      <script>
      document.getElementById("demo-twenty").innerHTML = 
      typeof {name:'john', age:34} + "<br>" + // Devuelve "objeto"
      typeof [1,2,3,4] + "<br>" + // Devuelve "objeto"
      typeof null + "<br>" + // Devuelve "objeto"
      typeof function myFunc(){}; // Devuelve "función"
      </script>
    </td>
  </tr>
</table>

</div>

<!-- ==================== Diferencia entre indefinido y nulo ====================-->
<button class="accordion">Diferencia entre indefinido y nulo</button>
<div class="panel">
<h2>Diferencia entre indefinido y nulo</h2>
<p>undefinedy null son iguales en valor pero diferentes en tipo:</p>
<div style="display:inline-block; background-color:lightgrey; padding:10px 20px;">
<p>document.getElementById("demo-twenty-one").innerHTML =<br>
typeof undefined + "&#60;br&#62;" + // indefinido<br>
typeof null + "&#60;br&#62; &#60;br&#62;" + // objeto<br>
(null === undefined) + "br" + // falso<br>
(null == undefined); // verdadero</p>
<p id=demo-twenty-one></p>
<script>
document.getElementById("demo-twenty-one").innerHTML =
typeof undefined + "<br>" + // indefinido
typeof null + "<br><br>" + // objeto
(null === undefined) + "<br>" + // falso
(null == undefined); // verdadero
</script>
</div>
</div>

<!-- ==================== Panel-1 ====================-->
<!--
<button class="accordion">Lorem</button>
<div class="panel">
  <h2>Lorem</h2>
  <p>Lorem</p>
</div>
-->

</div>
<!-- Javascript-->
<script src="assets/js/accordion.js"></script>
</body>
</html>
