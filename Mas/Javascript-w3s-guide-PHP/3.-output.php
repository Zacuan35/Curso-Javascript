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
    <title>JS - 3.Salidas</title>
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
    
<h1>Visualización de Javascript</h1>
<hr>
<p>JavaScript puede "mostrar" datos de las siguientes formas:</p>

<!-- Accordion-->
<!-- ==================== Panel-1 ====================-->
<button class="accordion">1.-En un elemento HTML</b></button>
<div class="panel">
<h2>En un elemento HTMLL</h2>    
<p>Para ello se cambia la propiedad <code style="color:red;">innerHTML</code>, lo cual es una forma común de mostrar datos en HTML, a continuación se muestra la estructura:</p>

<h3>Estructura:</h3>

<table>
    <tr>
        <td><b>Método para acceder a un elemento HTML mediante su ID</b></td>
        <td><b>Código para definir el contenido HTML</b></td>
    </tr>
    <tr>
        <td>document.getElementById(idName")</td>
        <td>innerHTML=newContent</td>
    </tr>
    <tr>
        <td colspan="2">
            <p>El código completo quedaría de la siguiente manera:<br>
            <b>document.getElementById("idName").innerHTML = newContent;</b>
            </p>            
        </td>
    </tr>
</table><br>

<!-- Ejemplo-->
<div style="display:inline-block; background-color:lightgrey; padding:10px 20px;">
    <h4>Ejemplo</h4>
    <p>La suma de 5 + 6 es = <span id=demo></span></p>
    <!-- Script -->
    <script>
    document.getElementById("demo").innerHTML = 5 + 6;
    </script>
</div>

</div>

<!-- ==================== Panel-2 ====================-->
<button class="accordion">2.-Directamente en el HTML</b></button>
<div class="panel">
<h2>Directamente en el HTML</h2>
<h3>Uso del método</h3>
<p>Para fines sólo de prueba, es conveniente utilizar el método:<br>
<b>document.write ("Content");</b></p>
<!-- Ejemplo -->
<div style="display:inline-block; background-color:lightgrey; padding:10px 20px;">
    <h4>Ejemplo</h4>
    <p>El código quedaría de la siguiente forma: <b>document.write(5 + 6);</b></p>
    <p>La suma de 5 + 6 es = a:</p>
    <!-- Script -->
    <script>
    document.write(5 + 6);
    </script>
</div><br><br><br><br>

<h3>Sobrescribiendo el documento</h3>
<p>Nunca llame a <code style="color:red;">document.write();</code> después de cargar un documento HTML <b> ya que sobreescribirá todo el HTML existente</b> :</p>
<div style="display:inline-block; background-color:lightgrey; padding:10px 20px;">
    <h4>Ejemplo</h4>
    <p>Mi primer párrafo</p>
    <button type=button onclick="document.write(5 + 6)">Sobreescribir documento html</button>
</div>
</div>
<!-- ==================== Panel-3 ====================-->
<button class="accordion">3.-En un cuadro de alerta</b></button>
<div class="panel">
<h2>Escribiendo en un cuadro de alerta</h2>    
<p>Puede utilizar un cuadro de alerta para mostrar datos con lo siguiente:<br>
    <b>window.alert ("Content")</b>
</p>
<!-- Ejemplo-->
<div style="display:inline-block; background-color:lightgrey; padding:10px 20px;">
    <h4>Ejemplo</h4>
    <p>window.alert (5 + 6);</p>
    <!-- Script -->
    <!--
    <script>
        window.alert (5 + 6);
    </script>
    -->
</div> 
<h4>Puede omitir la palabra clave window</h4>
<p>En JavaScript, el objeto de ventana es el objeto de alcance global, lo que significa que las variables, propiedades y métodos por defecto pertenecen al objeto de ventana. Esto también significa que especificar la palabra clave  <code style="color:red;">window</code> es opcional:</p>

<!-- Ejemplo-->
<div style="display:inline-block; background-color:lightgrey; padding:10px 20px;">
    <h4>Ejemplo</h4>
    <p>alert (5 + 6);</p>
    <!-- Script -->
    <!--
    <script>
        alert (5 + 6);
    </script>
    -->
</div> 

</div>
<!-- ==================== Panel-4 ====================-->
<button class="accordion">4.-En la consola del navegador</b></button>
<div class="panel">
<h2>Escribiendo en la consola del navegador</h2>    
<p>Para fines de depuración puede llamar al console.log(), el cual es un método en el navegador que sirve para mostrar datos.<br>
<b>console.log ()</b></p>

<!-- Ejemplo -->
<div style="display:inline-block; background-color:lightgrey; padding:10px 20px;">
    <p>Abrir la ventana de inspeccion con F11 o F12.</p>
    <p>Luego seleccione "Consola".</p>
    <p>Escriba el script y de enter</p>
    <!-- Script -->
    <script>
    console.log(5 + 6);
    </script>
</div>
</div>
<!-- ==================== Panel-5 ====================-->
<button class="accordion">5.-En una impresión de página</button>
<div class="panel">
<h2>En una impresión de página</h2>    
<ul>
    <li>JavaScript no tiene ningún objeto de impresión ni métodos de impresión.</li>
    <li>No puede acceder a los dispositivos de salida desde JavaScript.</li>
    <li>La única excepción es que puede imprimir el contenido de la ventana actual llamando en el navegador al método. <br> <b>window.print()</b></li>
</ul>    
<!-- Ejemplo -->
<div style="display:inline-block; background-color:lightgrey; padding:10px 20px;">
    <h4>Ejemplo</h4>
    <p>Haga clic en el botón para imprimir la página actual.</p>
    <button onclick=window.print()>Imprime esta página</button>
</div>
</div>

</div>

<!-- Javascript-->
<script src="assets/js/accordion.js"></script>

</body>
</html>
