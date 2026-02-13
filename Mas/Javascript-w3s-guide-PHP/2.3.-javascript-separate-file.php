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
    <title>JS - 2.3.JavaScript como archivo aparte</title>
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
    
<h1>JavaScript como archivo aparte</h1>
<hr>

<!-- Menu -->
<ol>
    <li><a href="2.1.-javascript-in-the-head.php">En el head</a></li>
    <li><a href="2.2.-javascript-in-the-body.php">En el body</a></li>
    <li><a href="2.3.-javascript-separate-file.php">Como archivo externo</a></li>
    <li><a href="2.4.-javascript-external-reference.php">Como referencia externa</a></li>
</ol>
<p><a href="2.-where-to.php">Regresar</a></p>

<p>Los scripts también se pueden colocar en archivos externos: <br>
<i>(myFunction se almacena en un archivo externo llamado "myScript.js")</i></p>

<!-- Ejemplo -->
<div style="display:inline-block; background-color:lightgrey; padding:10px 20px;">
    <p id=demo>Párrafo uno.</p>
    <button type=button onclick=myFunction()>Cambiar párrafo</button>
</div><br><br>

<!-- Accordion-->
<!-- ==================== Panel-1 ====================-->
<button class="accordion">Consideraciones de uso</button>
<div class="panel">
<ul>
    <li>Los archivos JavaScript tienen la extensión <b>.js</b>.</li>
    <li>La referencia puede ir colocada en el <code style="color:red;">&#60;head&#62;</code> o <code style="color:red;">&#60;body&#62;</code>.</li>
    <li>Para utilizar un script externo, escriba una etiqueta <code style="color:red;">script</code>, dentro cree un atributo <code style="color:red;">src</code> y escriba el nombre del archivo del script.<br>
        &#60;script&#62; src="assets/js/accordion.js"- &#60;/script&#62;
    </li>
    <li>El script se comportará como si estuviera ubicado exactamente donde se encuentra la etiqueta <code style="color:red;">&#60;script&#62;</code>.</li>
    <li>Los scripts externos no pueden contener etiquetas <code style="color:red;">&#60;script&#62;</code>.</li>
</ul>
</div>

<!-- ==================== Panel-2 ====================-->
<button class="accordion">Ventajas de utilizar scripts en archivos externos</button>
<div class="panel">
<h3>Ventajas de utilizar scripts en archivos externos</h3>
<ul>
    <li>Separa HTML y código</li>
    <li>Hace que HTML y JavaScript sean más fáciles de leer y mantener</li>
    <li>Los archivos JavaScript en caché pueden acelerar la carga de la página</li>
    <li>Los scripts externos son prácticos cuando se usa el mismo código en muchas páginas web diferentes.</li>
</ul>
</div>
<!-- ==================== Panel-3 ====================-->
<button class="accordion">Agregar varios archivos</button>
<div class="panel">
<h3>Agregar varios archivos</h3>
<p>Para agregar varios archivos a una página, sólo hay que utilizar varias etiquetas de secuencia de comandos:</p>
<ul>
    <li>&#60;script src="myScript1.js">&#60;&#47;script&#62;</li>
    <li>&#60;script src="myScript2.js">&#60;&#47;script&#62;</li>
</ul>
</div>


</div>
<!-- Script -->
<script src="assets/js/accordion.js"></script>
<script src=assets/js/myScript.js></script>
</body>
</html>
