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
  <title>JS - 15.Eventos</title>
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
<h1>Eventos</h1><hr>
<p>Los eventos HTML son <b>"cosas"</b> que les suceden a los elementos HTML.<br>
Cuando se utiliza JavaScript en páginas HTML, JavaScript puede <b>"reaccionar"</b> en estos eventos.</p>

<!-- ==================== Eventos HTML ====================-->
<button class="accordion">Eventos HTML</button>
<div class="panel">
  <h2>Eventos HTML</h2>
  <p>Un evento HTML puede ser algo que hace el navegador o algo que hace un usuario.<br>
  A continuación, se muestran algunos ejemplos de eventos HTML:</p>
  <ul>
    <li>Una página web HTML ha terminado de cargarse</li>
    <li>Se cambió un campo de entrada HTML</li>
    <li>Se hizo clic en un botón HTML</li>
  </ul>
  <p>A menudo, cuando suceden eventos, es posible que desee hacer algo.<br>
  JavaScript le permite ejecutar código cuando se detectan eventos.</p>
  <table>
    <tr>
      <td colspan="2">HTML permite que los atributos del controlador de eventos, <b>con código JavaScript</b>, se agreguen a los elementos HTML.</td>
    </tr>
    <tr>
      <th>Con comillas simples:</th>
      <th>Con comillas dobles:</th>
    </tr>
    <tr>
      <td>&#60;elemento event='algo de JavaScript'&#62;</td>
      <td>&#60;elemento event="algo de JavaScript"&#62;</td>
    </tr>    
  </table>  
  <br>
  <table>
    <tr>
      <th>Usando id = "demo"</th>
      <th>Usando this.innerHTML</th>
      <th>Llamando a funciones</th>
    </tr>
    <tr>
      <td><p>El código JavaScript cambia el contenido del elemento (p) usando getElementById('demo').innerHTML:</p></td>
      <td><p>El código cambia el contenido de su propio elemento usando this.innerHTML:</p></td>
      <td><p>El atributo de evento llama a la función displayDate():</p></td>
    </tr>
    <tr>
      <td>
        <p>&#60;button <span style="color:red;">onclick</span>="document.getElementById('demo')<br>.innerHTML=Date()"&#62;¿Que hora es?&#60;/button&#62;</p>
        <button onclick="document.getElementById('demo').innerHTML=Date()">¿Que hora es?</button>
        <p id=demo></p>
      </td>
      <td>
        <p>&#60;button <span style="color:red;">onclick</span>="this.innerHTML = Date()"&#62;¿Que hora es?&#60;/button&#62;</p>
        <button onclick="this.innerHTML = Date()">¿Que hora es?</button>
      </td>
      <td>
        <p>&#60;button <span style="color:red;">onclick</span>=displayDate()&#62;¿Que hora es?&#60;/button&#62;</p>
        <button onclick=displayDate()>¿Que hora es?</button>
        <script>
        function displayDate() {
          document.getElementById("demo-two").innerHTML = Date();
        }
        </script>
        <p id=demo-two></p>
      </td>
    </tr>    
  </table>
</div>

<!-- ==================== Eventos HTML comunes ====================-->
<button class="accordion">Eventos HTML comunes</button>
<div class="panel">
  <h2>Eventos HTML comunes</h2>
  <p>A continuación, se muestra una lista de algunos eventos HTML comunes:</p>
  <table>
    <tr>
      <th>Evento</th>
      <th>Descripción</th>
    </tr>
    <tr>
      <td>onchange</td>
      <td>Se ha cambiado un elemento HTML</td>
    </tr>
    <tr>
      <td>onclick</td>
      <td>El usuario hace clic en un elemento HTML.</td>
    </tr>
    <tr>
      <td>onmouseover</td>
      <td>El usuario mueve el mouse sobre un elemento HTML</td>
    </tr>
    <tr>
      <td>onmouseout</td>
      <td>El usuario aleja el mouse de un elemento HTML</td>
    </tr>
    <tr>
      <td>onkeydown</td>
      <td>El usuario presiona una tecla del teclado</td>
    </tr>
    <tr>
      <td>onload</td>
      <td>El navegador ha terminado de cargar la página.</td>
    </tr>              
  </table>
  <p>La lista es mucho más larga: <a href="https://translate.googleusercontent.com/translate_c?depth=1&hl=es&prev=search&pto=aue&rurl=translate.google.com&sl=en&sp=nmt4&u=https://www.w3schools.com/jsref/dom_obj_event.asp&usg=ALkJrhg3IrI23eHnQecm0wCA9USR6wXnwA" target="_blank">W3Schools JavaScript Referencia HTML DOM Eventos.</a></p>
</div>

<!-- ==================== ¿Qué puede hacer JavaScript? ====================-->
<button class="accordion">¿Qué puede hacer JavaScript?</button>
<div class="panel">
  <h2>¿Qué puede hacer JavaScript?</h2>
  <p>Los controladores de eventos se pueden usar para manejar y verificar la entrada del usuario, las acciones del usuario y las acciones del navegador:</p>
  <ul>
    <li>Cosas que se deben hacer cada vez que se carga una página</li>
    <li>Cosas que se deben hacer cuando la página está cerrada</li>
    <li>Acción que debe realizar cuando un usuario hace clic en un botón</li>
    <li>Contenido que debe verificar cuando un usuario ingresa datos</li>
    <li>Y más ...</li>
  </ul>
  <p>Se pueden usar muchos métodos diferentes para permitir que JavaScript funcione con eventos:</p>
  <ul>
    <li>Los atributos de eventos HTML pueden ejecutar código JavaScript directamente</li>
    <li>Los atributos de eventos HTML pueden llamar a funciones de JavaScript</li>
    <li>Puede asignar sus propias funciones de controlador de eventos a elementos HTML</li>
    <li>Puede evitar que los eventos se envíen o manejen</li>
    <li>Y más ...</li>  
  </ul>
  <p>Aprenderá mucho más sobre eventos y controladores de eventos en los capítulos HTML DOM.</p>
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
