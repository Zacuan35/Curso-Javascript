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
    <title>JS - 2.4.Javascript referencia externa</title>
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

    
<h1>JavaScript referencia externa</h1>
<hr>

<!-- Menu -->
<ol>
    <li><a href="2.1.-javascript-in-the-head.php">En el head</a></li>
    <li><a href="2.2.-javascript-in-the-body.php">En el body</a></li>
    <li><a href="2.3.-javascript-separate-file.php">Como archivo externo</a></li>
    <li><a href="2.4.-javascript-external-reference.php">Como referencia externa</a></li>
</ol>
<p><a href="2.-where-to.php">Regresar</a></p>    

<p>Se puede hacer referencia a los scripts externos con una URL completa o con una ruta relativa a la página web actual.<br> Este ejemplo usa una URL completa para vincular a un script:</p>

<!-- Ejemplo -->
<div style="display:inline-block; background-color:lightgrey; padding:10px 20px;">
    <p id=demo>Párrafo uno.</p>
    <button type=button onclick=myFunction()>Cambiar párrafo</button>
</div>

<p><i>(myFunction se almacena en un archivo externo llamado "myScript.js")</i></p>


</div>
<!-- Script -->
<script src="https://www.w3schools.com/js/myScript.js"></script>
</body>
</html>
