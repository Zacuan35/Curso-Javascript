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
    <title>JS - 2.Ubicación</title>
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
    
<h1>Ubicación del Javascript</h1>
<hr>
<p>Javascript puede ir en:</p>

<ol>
    <li><a href="2.1.-javascript-in-the-head.php">En el head</a></li>
    <li><a href="2.2.-javascript-in-the-body.php">En el body</a></li>
    <li><a href="2.3.-javascript-separate-file.php">Como archivo externo</a></li>
    <li><a href="2.4.-javascript-external-reference.php">Como referencia externa</a></li>
</ol>

<!-- Accordion-->
<!-- ==================== Panel-1 ====================-->
<button class="accordion">Javascript en un documento HTML</button>
<div class="panel">
<h2>Javascript en un documento HTML</h2>
<i>Puede colocar cualquier número de scripts en un documento HTML, y se puede colocar en el <code style="color:red;">&#60;body&#62;</code>, en el <code style="color:red;">&#60;head&#62;</code> o en ambos</i>
</div>
<!-- ==================== Panel-2 ====================-->
<button class="accordion">La etiqueta Script</button>
<div class="panel">
<h2>La etiqueta script</h2>
<p>En HTML, el código JavaScript se inserta entre las etiquetas <code style="color:red;">&#60;script&#62;</code> javascriptCode <code style="color:red;">&#60;&#47;script&#62;</code>.<br><br>
<i>&#60;script&#62;<br>
document.getElementById("demo").innerHTML = "Mi primer JavaScript";<br>
&#60;&#47;script&#62;</i></p>

<!-- Ejemplo -->
<div style="display:inline-block; background-color:lightgrey; padding:10px 20px;">
    <h4>Ejemplo</h4>
    <p id=demo></p>
    <script>
    document.getElementById("demo").innerHTML = "Mi primer JavaScript";
    </script>    
</div>
</div>
<!-- ==================== Panel-3 ====================-->
<button class="accordion">Funciones y eventos de Javascript</button>
<div class="panel">
<h2>Funciones y eventos de JavaScript</h2>
<p>Una <code style="color:red;">function</code> en Javascript es un bloque de código que se puede ejecutar cuando se "solicita", por ejemplo se puede llamar a una función cuando ocurre un <b>evento</b>, como cuando el usuario hace clic en un botón.
</p>
</div>

</div>

<!-- Javascript-->
<script src="assets/js/accordion.js"></script>
</body>
</html>
