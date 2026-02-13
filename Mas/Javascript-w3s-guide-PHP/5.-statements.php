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
    <title>JS - 5.Declaraciones</title>
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

<h1>Declaraciones de JavaScript</h1>
<hr>    
<h2>¿Cómo se componen las declaraciones de JavaScript?</h2>
<p>Las declaraciones de JavaScript se componen de: <br>
Valores, operadores, expresiones, palabras clave y comentarios.</p>
<p>Esta declaración le dice al navegador que escriba "Hola Rony". dentro de un elemento HTML con id = "demo": <br>
<b>document.getElementById("demo").innerHTML = "Hola Rony.";</b></p>
<ul>
    <li>En HTML, las declaraciones de JavaScript son ejecutadas por el navegador.</li>
    <li>La mayoría de los programas JavaScript contienen muchas declaraciones JavaScript.</li>
    <li>Las declaraciones se ejecutan, una a una, en el mismo orden en que están escritas.</li>
    <li>Los programas y declaraciones JavaScript a menudo se denominan código JavaScript.</li>
</ul>
<p>A continuación se muestra una serie de consideraciones a la hora de escribir declaraciones:</p>

<!-- ==================== Panel-1 ====================-->
<button class="accordion">1.-Punto y coma;</button>
<div class="panel">
  <h2>Punto y coma;</h2>
  <p>El punto y coma sirve para separar las declaraciones de JavaScript, por lo cual se agregan al final de cada instrucción ejecutable</p>
<!-- Ejemplo-->
<div style="display:inline-block; background-color:lightgrey; padding:10px 20px;">
    <h4>Ejemplo de declaraciones separadas por punto y coma:</h4>
    <p>
        var a, b, c;<br>
        a = 5;<br>
        b = 6;<br>
        c = a + b;<br>
        document.getElementById("demo1").innerHTML = c;
    </p>
    <p id=demo1></p>
    <script>
        var a, b, c;
        a = 5;
        b = 6;
        c = a + b;
        document.getElementById("demo1").innerHTML = c;
    </script>
</div>
</div>
<!-- ==================== Panel-2 ====================-->
<button class="accordion">2.-Declaraciones en una sóla línea</button>
<div class="panel">
  <h2>Declaraciones en una sóla línea</h2>
  <p>Cuando están separados por punto y coma, se permiten varias declaraciones en una línea:</p>
  <!-- Ejemplo-->
  <div style="display:inline-block; background-color:lightgrey; padding:10px 20px;">
    <h4>Ejemplo:</h4>
    <p>
        var a, b, c;<br>
        a = 5; b = 6; c = a + b;<br>
        document.getElementById("demo4").innerHTML = c;
    </p>
    <p id=demo2></p>
    <script>
        var a, b, c;
        a = 5; b = 6; c = a + b;
        document.getElementById("demo2").innerHTML = c;
    </script>
</div><br>    
<i>En la web, es posible que vea ejemplos sin punto y coma.
No se requiere terminar las declaraciones con punto y coma, pero se recomienda encarecidamente.</i>
</div>
<!-- ==================== Panel-3 ====================-->
<button class="accordion">3.-Espacio en blanco</button>
<div class="panel">
    <h2>Espacio en blanco</h2>
    <p>JavaScript ignora espacios en blanco, por lo que los puede agregar a su secuencia de comandos para que sea más legible.</p>
    <!-- Ejemplo-->
    <div style="display:inline-block; background-color:lightgrey; padding:10px 20px;">
        <h4>Ejemplo:</h4>
        <p>Las siguientes líneas son equivalentes:</p>
        <p>
            var person = "Hege";<br>
            var person="Hege";
        </p>
    </div>
    <p>Una buena práctica es poner espacios alrededor de los operadores (= + - * /):</p>
    <div style="display:inline-block; background-color:lightgrey; padding:10px 20px;">
        <h4>Ejemplo:</h4>
        <p>var x = y + z;</p>
    </div>
</div>
<!-- ==================== Panel-4 ====================-->
<button class="accordion">4.-Longitud de línea y saltos de línea</button>
<div class="panel">
  <h2>Longitud de línea y saltos de línea</h2>
  <p>Para una mejor legibilidad, a los programadores a menudo les gusta evitar las líneas de código de más de 80 caracteres.<br>
  Si una declaración de JavaScript no cabe en una línea, el mejor lugar para romperla es después de un operador o una coma:</p>
  <!-- Ejemplo-->
  <div style="display:inline-block; background-color:lightgrey; padding:10px 20px;">
    <h2>Ejemplo:</h2>
    <p>document.getElementById("demo").innerHTML <br>
    ="Content";</p>
    <p id=demo-3></p><script>
        document.getElementById("demo-3").innerHTML =
        "¡Hola Rony!";
    </script>
</div>
</div>
<!-- ==================== Panel-5 ====================-->
<button class="accordion">5.-Bloques de código</button>
<div class="panel">
    <h2>Bloques de código</h2>
    <p>Las declaraciones de JavaScript se pueden agrupar en bloques de código, dentro de corchetes {...}.<br>
        El propósito de los bloques de código es definir declaraciones que se ejecutarán juntas.<br>
    Un lugar donde encontrará declaraciones agrupadas en bloques es en las funciones de JavaScript:</p>
    <div style="display:inline-block; background-color:lightgrey; padding:10px 20px;">
        <h4>Ejemplo:</h4>
        <p>Los bloques de código JavaScript se escriben entre corchetes {...}</p>
        <p>function myFunction() {<br>
          document.getElementById("demo1").innerHTML = "Hola Mario";<br>
          document.getElementById("demo2").innerHTML = "Hola Regina";<br>
      }</p>
      <p id=demo4></p>
      <p id=demo5></p>
      <button type=button onclick=myFunction()>Haz clic en mí</button>
      <script>
        function myFunction() {
          document.getElementById("demo4").innerHTML = "Hola Mario";
          document.getElementById("demo5").innerHTML = "Hola Regina";
      }
  </script>
</div><br>
<i>En este tutorial usamos 2 espacios de sangría para bloques de código.
Aprenderá más sobre las funciones más adelante en este tutorial.</i>
</div>
<!-- ==================== Panel-6 ====================-->
<button class="accordion">6.-Palabras clave</button>
<div class="panel">
    <h2>Palabras clave</h2>
    <p>Las declaraciones de JavaScript a menudo comienzan con una palabra clave para identificar la acción de JavaScript que se debe realizar.<br>
        Visite nuestra referencia de palabras reservadas para ver una lista completa de <a href="https://translate.googleusercontent.com/translate_c?depth=1&hl=es&prev=search&pto=aue&rurl=translate.google.com&sl=en&sp=nmt4&u=https://www.w3schools.com/js/js_reserved.asp&usg=ALkJrhiyTi8mEGt3VxEQx4OBLBIjO1G-cA" target="_blank">palabras clave</a> de <a href="https://translate.googleusercontent.com/translate_c?depth=1&hl=es&prev=search&pto=aue&rurl=translate.google.com&sl=en&sp=nmt4&u=https://www.w3schools.com/js/js_reserved.asp&usg=ALkJrhiyTi8mEGt3VxEQx4OBLBIjO1G-cA" target="_blank">JavaScript</a>.<br>
    Aquí hay una lista de algunas de las palabras clave que aprenderá en este tutorial:</p>
    <table>
        <tr>
            <th>Palabra clave</th>
            <th>Descripción</th>
        </tr>
        <tr>
            <td>break</td>
            <td>Termina un interruptor o un bucle</td>
        </tr>
        <tr>
            <td>continue</td>
            <td>Salta de un bucle y comienza en la parte superior.</td>
        </tr>
        <tr>
            <td>debugger</td>
            <td>Detiene la ejecución de JavaScript y llama (si está disponible) a la función de depuración</td>
        </tr>
        <tr>
            <td>do ... while</td>
            <td>Ejecuta un bloque de declaraciones y repite el bloque, mientras que una condición es verdadera</td>
        </tr>
        <tr>
            <td>for</td>
            <td>Marca un bloque de declaraciones para ejecutar, siempre que una condición sea verdadera</td>
        </tr>
        <tr>
            <td>function</td>
            <td>Declara una función</td>
        </tr>
        <tr>
            <td>if ... else</td>
            <td>Marca un bloque de declaraciones que se ejecutarán, según una condición.</td>
        </tr>
        <tr>
            <td>return</td>
            <td>Venta de una función</td>
        </tr>
        <tr>
            <td>switch</td>
            <td>Marca un bloque de sentencias para ejecutar, dependiendo de los diferentes casos.</td>
        </tr>
        <tr>
            <td>try ... catch</td>
            <td>Implementa el manejo de errores en un bloque de declaraciones</td>
        </tr>
        <tr>
            <td>var</td>
            <td>Declara una variable</td>
        </tr>                
    </table>
    <i>Las palabras clave de JavaScript son palabras reservadas. Las palabras reservadas no se pueden utilizar como nombres de variables.</i>
</div>

</div>

<!-- Javascript-->
<script src="assets/js/accordion.js"></script>

</body>
</html>
