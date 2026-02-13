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
    <title>JS - 4.Programa</title>
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
    
<h1>Programa de JavaScript</h1>
<hr>

<h2>¿Que són los programas de JavaScript?</h2>
<p>Un <b>programa</b> es una lista de "instrucciones" que una computadora debe "ejecutar". <br>
En un lenguaje de programación, estas instrucciones se denominan <b>declaraciones</b>. <br>    
Un <b>programa JavaScript</b> es una lista de <b>declaraciones</b> que debe ejecutar una computadora.</p>

<!-- Ejemplo -->
<div style="display:inline-block; background-color:lightgrey; padding:10px 20px;">
<h4>Ejemplo de programa</h4>    
<p>
    var x, y, z;  // Declaración 1<br>
    x = 5;  // Declaración 2<br>
    y = 6;  // Declaración 3<br>
    z = x + y;  // Declaración 4 <br>
    document.getElementById("demo-1").innerHTML = "El valor de z es" + z + ".";  
</p>

<p id=demo></p>
<script>
var x, y, z;  // Declaración 1
x = 5;        // Declaración 2
y = 6;        // Declaración 3
z = x + y;    // Declaración 4
document.getElementById("demo").innerHTML = "El valor de z es" + z + ".";  
</script>
</div>

<br>

<i>En HTML, los programas JavaScript son ejecutados por el navegador web.</i>

</div>

</body>
</html>
