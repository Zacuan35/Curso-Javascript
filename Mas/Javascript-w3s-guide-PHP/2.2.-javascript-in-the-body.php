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
    <title>JS - 2.2.Javascript en el body</title>
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
    
<h1>JavaScript en el Body</h1>
<hr>

<!-- Menu -->
<ol>
    <li><a href="2.1.-javascript-in-the-head.php">En el head</a></li>
    <li><a href="2.2.-javascript-in-the-body.php">En el body</a></li>
    <li><a href="2.3.-javascript-separate-file.php">Como archivo externo</a></li>
    <li><a href="2.4.-javascript-external-reference.php">Como referencia externa</a></li>
</ol>
<p><a href="2.-where-to.php">Regresar</a></p>

<p>En este ejemplo el script se ha colocado en el body de un html <code style="color:red;">&#60;body&#62; ... &#60;&#47;body&#62;</code>. <br> La función dentro de ella se invoca o se llama cuando se hace clic en un botón:</p>

<!-- Ejemplo -->
<div style="display:inline-block; background-color:lightgrey; padding:10px 20px;">
<p id=demo>Párrafo uno.</p>
<button type=button onclick=myFunction()>Cambiar párrafo</button>
</div>

<p><i>La colocación de scripts en la parte inferior del elemento &#60;body&#62; mejora la velocidad de visualización, porque la interpretación del script ralentiza la visualización.</i></p>
</div>
     
<!-- Script -->
<script>
function myFunction() {
  document.getElementById("demo").innerHTML = "Párrafo dos.";
}
</script>
</body>
</html>
