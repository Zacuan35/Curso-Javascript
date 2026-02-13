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
  <title>JS - 1.Introducción</title>
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
  <h1>Introducción a JavaScript</h1><hr>
  <h2>¿Que puede hacer Javascript?</h2>
  <p>Javascript puede cambiar 3 cosas:</p>
  <ol>
    <li>El contenido html</li>
    <li>Los valores de los atributos html</li>
    <li>Los estilos de las etiquetas HTML</li>
  </ol>
  <p>Para ello Javascript utiliza el método <b>getElementById('idName')</b>, con el cual le indica al navegador que busque un elemento html mediante su id y le cambie alguna de las tres cosas vistas.</p>
<!--=======
Accordion
========-->
<!-- ==================== Panel-1 ====================-->
<button class="accordion">1.-Cambiar el contenido html</b></button>
<div class="panel">

  <h2>Cambiar el contenido html</h2>

  <h3>Estructura</h3>
  
  <p>Para cambiar el contenido de un elemento HTML seguimos la siguiente estructura:</p>
  <!-- table -->
  <table>
    <tr>
      <td><b>Método</b></td>
      <td><b>innerHTML</b></td>
    </tr>
    <tr>
      <td>getElementById('idName')</td>  
      <td>innerHTML='newContent';</td>
    </tr>
  </table>

  <p>El código completo quedaría de la siguiente forma:<br>
    <b>document.getElementById("idName").innerHTML = "newContent";</b>
  </p>

  <br><br>  
  
  <h3>Uso de comillas</h3>
  <p>En JavaScript podemos escribir con comillas simples y dobles:</p>

  <ul>
    <li>Comillas simples: "document.getElementById('demo-two').innerHTML = 'Adios'"</li>
    <li>Comillas dobles: 'document.getElementById("demo").innerHTML = "Adios"'</li>
  </ul>

  <!-- Table -->
  <table>
    <tr>
      <td><b>Ejemplo con comillas simples</b></td>
      <td><b>Ejemplo con comillas dobles</b></td>
    </tr>
    <tr>
      <td>
        <div style="display:inline-block; background-color:lightgrey; padding:10px 20px;">
          <p id=demo-two>Hola</p>
          <button type=button onclick="document.getElementById('demo-two').innerHTML = 'Adios'">
            Cambiar el contenido html
          </button>    
        </div>        
      </td>
      <td>
        <div style="display:inline-block; background-color:lightgrey; padding:10px 20px;">
          <p id=demo>Hola</p>
          <button type=button onclick='document.getElementById("demo").innerHTML = "Adios"'>
            Cambiar el contenido html
          </button>    
        </div>        
      </td>
    </tr>    
  </table>

</div>

<!-- ==================== Panel-2 ====================-->
<button class="accordion">2.- Cambiar los valores de los atributos HTML</b>.</button>
<div class="panel">
  <h2>Cambiar los valores de los atributos HTML</h2>
  <h3>Estructura</h3>
  <p>Para cambiar los valores de los atributos seguimos la siguiente estructura:</p>
  
  <!-- Table -->
  <table>
    <tr>
      <td><b>Método</b></td>
      <td><b>Atributo + Valor que deseamos cambiar</b></td>
    </tr>
    <tr>
      <td>getElementById('idName')</td>  
      <td>src='newValue';</td>
    </tr>
  </table>

  <br><br>

  <p>En este ejemplo se cambia el valor del atributo fuente de una imagen, el código completo quedaría de la siguiente forma:<br> <b>document.getElementById('idName').src='newValue';</b></p>

  <div style="display:inline-block; background-color:lightgrey; padding:10px 20px;">
    <h4>Ejemplo cambio de la ruta de imagen del atributo (src)</h4>
    <button onclick="document.getElementById('myImage').src='assets/img/foco_encendido.gif'">
      Enciende la luz
    </button>
    <img id=myImage src="assets/img/foco_apagado.gif" style="width:100px">
    <button onclick="document.getElementById('myImage').src='assets/img/foco_apagado.gif'">
      Apaga la luz
    </button>    
  </div> 
</div>
<!-- ==================== Panel-3 ====================-->
<button class="accordion">3.- Cambiar los estilos CSS de las etiquetas HTML.</button>
<div class="panel">
  <h2>Cambiar los estilos CSS de las etiquetas HTML</h2>

  <h3>Estructura</h3>
  <p>Para cambiar el estilo CSS de un elemento HTML (el cual es una variante de cambiar un atributo HTML), seguimos la siguiente estructura:</p>

  <!-- Table -->
  <table>
    <tr>
      <td><b>Método</b></td>
      <td><b>CSS Property + Valor que deseamos cambiar</b></td>
    </tr>
    <tr>
      <td>getElementById('idName')</td>  
      <td>.style.cssPropery = "newValue";</td>
    </tr>
  </table>

  <p>El código quedaría de la siguiente manera: <br>
  <b>document.getElementById("demo").style.cssProperty = "New value";</b></p>

    <!-- Table -->
    <table>
      <tr>
        <td>
          <p><b>Ejemplo Cambiar el puntaje de la fuente</b> <br> document.getElementById("demo").style.fontSize = "35px";</p>
        </td>
        <td>
          <p><b>Ejemplo Mostrar y ocultar elementos html</b> <br>document.getElementById("demo").style.display = "none";</p>      
        </td>
      </tr>
      <tr>
        <td>
          <div style="display:inline-block; background-color:lightgrey; padding:10px 20px;">
            <p id=demo-three>Un lindo caballo en la pradera</p>
            <button type=button onclick="document.getElementById('demo-three').style.fontSize='35px'">
              Aumentar el puntaje
            </button>
            <button type=button onclick="document.getElementById('demo-three').style.fontSize='16px'">
              Disminuir el puntaje
            </button>    
          </div>          
        </td>
        <td>
          <div style="display:inline-block; background-color:lightgrey; padding:10px 20px;">
            <img id=demo-four src="https://placedog.net/300"><br>
            <button type=button onclick="document.getElementById('demo-four').style.display='none'">
              Oculta el contenido HTML
            </button>    
            <button type=button onclick="document.getElementById('demo-four').style.display='block'">
              Mostrar el contenido html
            </button>    
          </div>          
        </td>
      </tr>
    </table>
  </div>

</div>
<!-- Javascript-->
<script src="assets/js/accordion.js"></script>
</body>
</html>
