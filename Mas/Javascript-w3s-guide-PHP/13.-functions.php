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
  <title>JS - 13.Functions</title>
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
<h1>Funciones</h1><hr>
<p>Una función de JavaScript es un bloque de código diseñado para realizar una tarea en particular. y se ejecuta cuando "algo" la invoca (la llama).<br>
Este ejemplo llama a una función que realiza un cálculo y devuelve el resultado:</p>

<div style="display:inline-block; background-color:lightgrey; padding:10px 20px;">
  <h4>Ejemplo</h4>
  <p>function myFunction(p1, p2) {<br>
    regreso p1 * p2; // La función devuelve el producto de p1 y p2
  }</p>
  <p>document.getElementById("demo-one").innerHTML = myFunction(4, 3);</p>
  <p id="demo-one"></p>
  <script>
    function myFunction(p1, p2) {
      return p1 * p2; // La función devuelve el producto de p1 y p2
    }
    document.getElementById("demo-one").innerHTML = myFunction(4, 3);
  </script>
</div>
<br><br>
<!-- ==================== Sintaxis de funciones ====================-->
<button class="accordion">Sintaxis de funciones</button>
<div class="panel">
  <h2>Sintaxis de funciones</h2>
  <ul>
    <li><b>Declaración de la función</b></li>
    <li>Una función de JavaScript se define con la palabra clave <code style="color:red;">function</code>, seguida de un <b>nombre</b> , seguido de paréntesis <b>()</b>.</li>
    <li>Los nombres de funciones pueden contener letras, dígitos, subrayados y signos de dólar (las mismas reglas que las variables).</li>
    <li><b>Parámetros</b></li>
    <li>Los parámetros de la función se enumeran entre paréntesis () en la definición de la función.</li>
    <li>Los paréntesis pueden incluir nombres de parámetros separados por comas:
      ( <b>parametro1, parametro2, ... </b>)</li>
      <li>El código a ejecutar, por la función, se coloca entre llaves: <b>{}</b></li>
      <li><b>Argumentos</b></li>
      <li>Los argumentos de la función son los valores que recibe la función cuando se invoca.</li>
      <li>Dentro de la función, los argumentos (los parámetros) se comportan como variables locales.</li>
    </ul>
    <p><i>Una función es muy similar a un procedimiento o una sub rutina, en otros lenguajes de programación.</i></p>
    <div style="display:inline-block; background-color:lightgrey; padding:10px 20px;">
      <p><b>Declaración de la función</b><br>
        function nombreDeFuncion(parametro1, parametro2, parametro3) {<br>
        // Código a ejecutar<br>
      }</p>
      <p><b>Llamada de la función</b><br>
      document.getElementById("demo-one").innerHTML = myFunction(argumento1, argumento2, argumento3);</p>
    </div>
  </div>
<!-- ==================== Invocación de función ====================-->
<button class="accordion">Invocación de función</button>
<div class="panel">
  <h2>Invocación de función</h2>
  <p>El código dentro de la función se ejecutará cuando "algo" <b>invoca</b> (llama) a la función:</p>
  <ul>
    <li>Cuando ocurre un evento (cuando un usuario hace clic en un botón)</li>
    <li>Cuando se invoca (llama) desde el código JavaScript</li>
    <li>Automáticamente (autoinvocado)</li>
  </ul>
  <p>Aprenderá mucho más sobre la invocación de funciones más adelante en este tutorial.</p>
</div>
<!-- ==================== Retorno de función ====================-->
<button class="accordion">Retorno de función</button>
<div class="panel">
  <h2>Retorno de función</h2>
  <p>Cuando JavaScript llega a una declaración <code style="color:red;">return</code>, la función dejará de ejecutarse.<br>
    Si la función fue invocada desde una declaración, JavaScript "regresará" para ejecutar el código después de la declaración de invocación.<br>
    Las funciones a menudo calculan un valor de retorno . El <b>valor de retorno</b> se "devuelve" al "llamador":</p>
    <p>Este ejemplo llama a una función que calcula el producto de dos números y devuelve el resultado que será 12</p>
    <div style="display:inline-block; background-color:lightgrey; padding:10px 20px;">
      <h4>Ejemplo</h4>
      <p>var x = myFunction(4, 3); // Se llama a la función, el valor de retorno terminará en x <br>
        document.getElementById("demo-two").innerHTML = x; <br><br>
        function myFunction(a, b) { <br>
        return a * b; // La función devuelve el producto de a y b <br>
      }</p>
      <p id="demo-two"></p>
      <script>
    var x = myFunction(4, 3); // Se llama a la función, el valor de retorno terminará en x
    document.getElementById("demo-two").innerHTML = x;
    function myFunction(a, b) {
      return a * b; // La función devuelve el producto de a y b
    }
  </script>
</div>
</div>
<!-- ==================== ¿Por qué funciones? ====================-->
<button class="accordion">¿Por qué funciones?</button>
<div class="panel">
  <h2>¿Por qué funciones?</h2>
  <p>Puede reutilizar el código: defina el código una vez y utilícelo muchas veces.<br>
  Puede usar el mismo código muchas veces con diferentes argumentos para producir resultados diferentes.</p>
  <h4>Convertir Fahrenheit a Celsius:</h4>
  <p>Este ejemplo llama a una función para convertir de Fahrenheit a Celsius:</p>
  <div style="display:inline-block; background-color:lightgrey; padding:10px 20px;">
    <h4>Ejemplo</h4>
    <p>function aCelsius(fahrenheit) {<br>
      return (5/9) * (fahrenheit-32);<br>
    }<br><br>
  document.getElementById("demo").innerHTML = aCelsius(77);</p>
  <p id="demo-three"></p>
  <script>
    function aCelsius(f) {
      return (5/9) * (f-32);
    }
    document.getElementById("demo-three").innerHTML = aCelsius(77);
  </script>
</div>
</div>
<!-- ==================== El operador () invoca la función ====================-->
<button class="accordion">El operador () invoca la función</button>
<div class="panel">
  <h2>El operador () invoca la función</h2>
  <p>Usando el ejemplo anterior, aCelsius se refiere al objeto de función y aCelsius() se refiere al resultado de la función.<br>
  Acceder a una función sin () devolverá el objeto de la función en lugar del resultado de la función.</p>
  <div style="display:inline-block; background-color:lightgrey; padding:10px 20px;">
    <h4>Ejemplo, accediendo al objeto de la función</h4>
    <p>function aCelsius(fahrenheit) {<br>
      return (5/9) * (fahrenheit-32);<br>
    }<br>
  document.getElementById("demo-four").innerHTML = aCelsius;</p>
  <p id="demo-four"></p>
  <script>
    function aCelsius(f) {
      return (5/9) * (f-32);
    }
    document.getElementById("demo-four").innerHTML = aCelsius;
  </script>
</div>
</div>
<!-- ================ Funciones utilizadas como valores variables ================-->
<button class="accordion">Funciones utilizadas como valores variables</button>
<div class="panel">
  <h2>Funciones utilizadas como valores variables</h2>
  <p>Las funciones se pueden usar de la misma manera que usa variables, en todo tipo de fórmulas, asignaciones y cálculos.</p>
  <div style="display:inline-block; background-color:lightgrey; padding:10px 20px;">
    <h4>Ejemplo</h4>
    <p>En lugar de usar una variable para almacenar el valor de retorno de una función:<br>
      var x = aCelsius(77);<br>
    var text = "La temperatura es " + x + " Celsius";</p>
    <p>Puede utilizar la función directamente, como valor de variable:<br>
    var text = "La temperatura  es " + aCelsius(77) + " Celsius";</p>
    <p id="demo-five"></p>
    <script>
      document.getElementById("demo-five").innerHTML =
      "La temperatura es " + aCelsius(77) + " Celsius";
      function aCelsius(fahrenheit) {
        return (5/9) * (fahrenheit-32);
      } 
    </script>
  </div> 
  <p><i>Aprenderá mucho más sobre las funciones más adelante en este tutorial.</i></p>
</div>
<!-- ==================== Variables locales ====================-->
<button class="accordion">Variables locales</button>
<div class="panel">
  <h2>Variables locales</h2>
  <p>Las variables declaradas dentro de una función de JavaScript se vuelven <b>LOCALES</b> para la función.<br>
  Solo se puede acceder a las variables locales desde dentro de la función.</p>
  <div style="display:inline-block; background-color:lightgrey; padding:10px 20px;">
    <h4>Ejemplo</h4>
    <p>// El código aquí NO puede usar nombreCarro</p>
    <p>function myFunction() {<br>
      var nombreCarro = "Volvo";<br>
      // El código aquí PUEDE usar nombreCarro<br>
    }</p>
    <p>// El código aquí NO puede usar nombreCarro</p>
  </div><br><br>
  <div style="display:inline-block; background-color:lightgrey; padding:10px 20px;">
    <h4>Ejemplo</h4>
    <p>Fuera de myFunction () nombreCarro no está definido.</p>
    <p>myFunction();<br>
      function myFunction() {<br>
        var nombreCarro = "Derby";<br>
        document.getElementById("demo-six").innerHTML =<br>
        typeof nombreCarro + " " + nombreCarro;<br>
      }<br>
      document.getElementById("demo-seven").innerHTML =<br>
      typeof nombreCarro;</p>
    <p id="demo-six"></p>
    <p id="demo-seven"></p>
    <script>
      myFunction();
      function myFunction() {
        var nombreCarro = "Derby";
        document.getElementById("demo-six").innerHTML =
        typeof nombreCarro + " " + nombreCarro;
      }
      document.getElementById("demo-seven").innerHTML =
      typeof nombreCarro;
    </script>
  </div>
  <p>Dado que las variables locales solo se reconocen dentro de sus funciones, las variables con el mismo nombre se pueden usar en diferentes funciones.<br>
  Las variables locales se crean cuando se inicia una función y se eliminan cuando se completa la función.</p> 
</div>

</div>

<!-- Javascript-->
<script src="assets/js/accordion.js"></script>
</body>
</html>
