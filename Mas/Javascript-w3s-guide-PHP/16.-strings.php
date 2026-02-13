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
  <title>JS - 16.Cadenas</title>
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
<h1>Cadenas</h1><hr>
<p>Las cadenas de JavaScript se utilizan para almacenar y manipular texto.</p>

<!-- ==================== Cadenas de JavaScript ====================-->
<button class="accordion">Cadenas de JavaScript</button>
<div class="panel">
<h2>Cadenas de JavaScript</h2>
<table>
  <tr>
    <td>
      <p>Una cadena de JavaScript tiene cero o más caracteres escritos entre comillas.</p>
    </td>
    <td>
      <p>Las cadenas se escriben entre comillas. Puede utilizar comillas simples o dobles.</p>
    </td>
    <td>
      <p>Puede usar comillas dentro de una cadena, siempre que no coincidan con las comillas que rodean la cadena.</p>
    </td>
  </tr> 
  <tr>
    <td>
      <h4>Ejemplo</h4>
      <p>var x = "David Mendoza";</p>
      <p id="demo"></p>
      <script>
      var x = "David Mendoza"; // Cadena escrita entre comillas
      document.getElementById("demo").innerHTML = x;
      </script>
    </td>
    <td>
      <h4>Ejemplo</h4>
      <p>var carName1 = "Derby";<br>
      var carName2 = '2015';</p>
      <p id="demo-two"></p>
      <script>
      var carName1 = "Derby"; // Comillas dobles
      var carName2 = '2015'; // Comillas simples
      document.getElementById("demo-two").innerHTML =
      carName1 + " " + carName2; 
      </script>
    </td>
    <td>
      <h4>Ejemplo</h4>
      <p>var answer1 = "It's alright";<br>
      var answer2 = "El se llama 'Pepe'";<br>
      var answer3 = 'Ella se llama "Juana"';</p>
      <p id="demo-three"></p>
      <script>
      var answer1 = "It's alright";
      var answer2 = "El se llama 'Pepe'";
      var answer3 = 'Ella se llama "Juana"'; 
      document.getElementById("demo-three").innerHTML =
      answer1 + "<br>" + answer2 + "<br>" + answer3; 
      </script>
    </td>
  </tr>    
</table>

</div>

<!-- ==================== Longitud de la cadena ====================-->
<button class="accordion">Longitud de la cadena</button>
<div class="panel">
<h2>Longitud de la cadena</h2>
<p>Para encontrar la longitud de una cadena, use la propiedad length la cual devuelve este dato.</p>
<div style="display:inline-block; background-color:lightgrey; padding:10px 20px;">
  <h4>Ejemplo</h4>
  <p>var txt = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";<br>
  var sln = txt.length;
  </p>
  <p id="demo-four"></p>
  <script>
  var txt = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
  var sln = txt.length;
  document.getElementById("demo-four").innerHTML = sln;
  </script>
</div>
</div>

<!-- ==================== Carácter de escape ====================-->
<button class="accordion">Carácter de escape</button>
<div class="panel">
<h2>Carácter de escape</h2>
<p>Debido a que las cadenas deben escribirse entre comillas, JavaScript malinterpretará esta cadena: <br> var x = "Somos los llamados "Vikingos" del norte.";<br>
La cadena se cortará a "Somos los llamados".</p>

<p>La solución para evitar este problema es utilizar el <b>carácter de escape de barra invertida (\).</b> <br> El cual convierte los carácteres especiales en carácteres de cadena:</p>

<table>
  <tr>
    <th>Código</th>
    <th>Resultado</th>
    <th>Descripción</th>
  </tr>
  <tr>
    <td>\'</td>
    <td>'</td>
    <td>Comilla simple</td>
  </tr>
  <tr>
    <td>\"</td>
    <td>"</td>
    <td>Comilla doble</td>
  </tr>
  <tr>
    <td>\\</td>
    <td>\</td>
    <td>Barra invertida</td>
  </tr>      
</table>

<br>

<table>
  <tr>
    <th>Insertar comilla doble \"</th>
    <th>Insertar comilla simple \'</th>
    <th>Insertar barra invertida \\</th>
  </tr>
  <tr>
  <td>
    <p>La secuencia de escape \" inserta una comilla doble en una cadena.</p>
  </td>
  <td>
    <p>La secuencia de escape \' inserta una comilla simple en una cadena.</p>
  </td>
  <td>
    <p>La secuencia de escape \\ inserta una barra invertida en una cadena.</p>
  </td>
  </tr>
  <tr>
    <td>
      <h4>Ejemplo</h4>
      <p>var x = "Nosotros somos los llamados \"Vikingos\" del Norte.";</p>
      <p id="demo-five"></p>
      <script>
      var x = "Nosotros somos los llamados \"Vikingos\" del Norte.";
      document.getElementById("demo-five").innerHTML = x; 
      </script>
    </td>
    <td>
      <h4>Ejemplo</h4>      
      <p>var x = 'It\'s alright.';</p>
      <p id="demo-six"></p>
      <script>
      var x = 'It\'s alright.';
      document.getElementById("demo-six").innerHTML = x; 
      </script>
    </td>
    <td>
      <h4>Ejemplo</h4>
      <p>var x = "El carácter \\ se llama barra invertida.";</p>
      <p id="demo-seven"></p>
      <script>
      var x = "El carácter \\ se llama barra invertida.";
      document.getElementById("demo-seven").innerHTML = x; 
      </script>
    </td>
  </tr>        
</table>

<p>Otras seis secuencias de escape son válidas en JavaScript son las de la siguiente tabla, las cuales se diseñaron originalmente para controlar máquinas de escribir, teletipos y máquinas de fax y no tienen ningún sentido en HTML.</p>

<table>
  <tr>
    <th>Código</th>
    <th>Resultado</th>
  </tr>
  <tr>
    <td>\b</td>
    <td>Retroceso</td>
  </tr>
    <tr>
    <td>\f</td>
    <td>Alimentación de formulario</td>
  </tr>
  <tr>
    <td>\n</td>
    <td>Nueva línea</td>
  </tr>
  <tr>
    <td>\r</td>
    <td>Retorno de carro</td>
  </tr>
  <tr>
    <td>\t</td>
    <td>Tabulador horizontal</td>
  </tr>
  <tr>
    <td>\v</td>
    <td>Tabulador vertical</td>
  </tr>            
</table>

</div>

<!-- ==================== Rompiendo líneas de código largas ====================-->
<button class="accordion">Rompiendo líneas de código largas</button>
<div class="panel">
<h2>Rompiendo líneas de código largas</h2>

<p>Para una mejor legibilidad, a los programadores a menudo les gusta evitar las líneas de código de más de 80 carácteres.<br>

Si una declaración de JavaScript no cabe en una línea, el mejor lugar para romperla es después de un operador:</p>

<div style="overflow-x:auto;">
<table>
  <tr>
    <td>
      <p>El mejor lugar para romper una línea de código es después de un operador o una coma.</p>      
    </td>
    <td>
      <p>Puede romper una línea de código dentro de una cadena de texto con una barra invertida.</p>      
      <p>(El método \ puede que no tenga soporte universal en todos los navegadores).</p>
    </td>
    <td>
      <p>Una forma más segura de romper una cadena es utilizar la suma de cadenas.</p>
    </td>
    <td>
      <p>No puede romper una línea de código con una barra invertida \.</p>
    </td>
  </tr>  
  <tr>
    <td>
      <h4>Ejemplo</h4>
      <p>document.getElementById("demo").innerHTML = <br>
      "¡Hola Rony!";</p>
      <p id="demo-eight"></p>
      <script>
      document.getElementById("demo-eight").innerHTML =
      "¡Hola Rony!";
      </script>      
    </td>
    <td>
      <h4>Ejemplo</h4>
      <p>document.getElementById("demo").innerHTML = "¡Hola \<br>
      Rony!";</p>
      <p id="demo-nine"></p>
      <script>
      document.getElementById("demo-nine").innerHTML = "¡Hola \
      Rony!";
      </script>      
    </td>
    <td>
      <h4>Ejemplo</h4>
      <p>document.getElementById("demo").innerHTML = "Hola " + <br>
      "¡Rony!";</p>
      <p id="demo-ten"></p>
      <script>
      document.getElementById("demo-ten").innerHTML = "Hola " +
      "¡Rony!";
      </script>      
    </td>
    <td>
      <h4>Ejemplo</h4>
      <p>document.getElementById("demo").innerHTML = \<br>
      "¡Hola Rony!";</p>
      <p id="demo-eleven">No puede romper una línea de código con barra invertida</p>
      <script>
      document.getElementById("demo-eleven").innerHTML = \
      "¡Hola Rony!";
      </script>      
    </td>
  </tr>

</table>
</div>

</div>

<!-- ==================== Las cadenas pueden ser objetos ====================-->
<button class="accordion">Las cadenas pueden ser objetos</button>
<div class="panel">
<h2>Las cadenas pueden ser objetos</h2>
<p>Normalmente, las cadenas de JavaScript son valores primitivos, creadas a partir de literales:<br>
var firstName = "Luis";</p>
<p>Pero las cadenas también se pueden definir como objetos con la palabra clave new:<br>
var firstName = new String("David");</p>

<div style="display:inline-block; background-color:lightgrey; padding:10px 20px;">
  <h4>Ejemplo</h4>
  <p>Si devolvemos el valor con typeof de las siguientes variables nos arrojarán una cadena y un objeto</p>
  <p>var x = "John"; // x es una cadena<br>
  var y = new String("John"); // y es un objeto</p>
  <p id="demo-twelve"></p>
  <script>
  var x = "Luis"; // x es una cadena
  var y = new String("David"); // y es un objeto
  document.getElementById("demo-twelve").innerHTML =
  typeof x + "<br>" + typeof y;
  </script>
</div>

<h2>No cree cadenas como objetos.</h2>
<p>Nunca cree cadenas como objetos por las siguietes razones:</p>
<ul>
  <li>Ralentiza la velocidad de ejecución</li>
  <li>La palabra clave new complica el código.</li>
  <li>Las cadenas y los objetos no se pueden comparar de forma segura.</li>
  <li>La comparación de dos objetos JavaScript siempre devolverá false.</li>
</ul>
<p>Tenga en cuenta la diferencia entre (x==y) y (x===y).</p>

<table>
  <tr>
    <th>Comparando con el operador ==</th>
    <th>Comparando con el operador ===</th>
    <th colspan="2">Comparando con los operadores == y ===</th>
  </tr>  
  <tr>
    <td>
      <p>Cuando se usa el operador == para comparar cadenas con objetos si los valores son iguales, el resultado es verdadero.</p>      
    </td>
    <td>
      <p>Al usar el operador === para comparar cadenas con objetos, el resultado será falso, ya que aunque tienen el mismo valor son de distinto tipo (cadena y objeto).</p>      
    </td>
    <td colspan="2">
      <p>Los objetos de JavaScript no se pueden comparar, y su resultado será falso usando los operadores == y ===</p>
    </td>
  </tr>
  <tr>
    <td>
      <h4>Ejemplo</h4>
      <p>var x = "Abraham";<br>             
      var y = new String("Abraham");<br>
      // (x == y)</p>
      <p id="demo-thirteen"></p>
      <script>
      var x = "Abraham"; // x es una cadena
      var y = new String("Abraham"); // y es un objeto
      document.getElementById("demo-thirteen").innerHTML = (x==y);
      </script>
    </td>
    <td>
      <h4>Ejemplo</h4>
      <p>var x = "Lupe";<br>
      var y = new String("Lupe");<br>
      // (x === y) </p>
      <p id="demo-fourteen"></p>
      <script>
      var x = "Lupe"; // x es una cadena
      var y = new String("Lupe"); // y es un objeto
      document.getElementById("demo-fourteen").innerHTML = (x===y);
      </script>
    </td>
    <td>      
      <h4>Ejemplo</h4>
      <p>var x = new String("Eduardo");<br>
      var y = new String("Eduardo");<br>
      // (x == y)</p>
      <p id="demo-sixteen"></p>
      <script>
      var x = new String("Eduardo");  // x es un objeto
      var y = new String("Eduardo");  // y es un objeto
      document.getElementById("demo-sixteen").innerHTML = (x==y);
      </script>
    </td>
    <td>
      <h4>Ejemplo</h4>
      <p>var x = new String("Betty");<br>             
      var y = new String("Betty");<br>
      // (x === y)</p>
      <p id="demo-seventeen"></p>
      <script>
      var x = new String("Betty");  // x es un objeto
      var y = new String("Betty");  // y es un objeto
      document.getElementById("demo-seventeen").innerHTML = (x===y);
      </script>   
    </td>
  </tr>
</table>

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
