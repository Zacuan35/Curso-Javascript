<!DOCTYPE html>
<!--====================================================================================
                                /// START DOC.HTML ///
=====================================================================================-->
<html lang="en">
<!--====================================================================================
                                /// START HEAD ///
=====================================================================================-->
<head>
    <!--//////////
    Metadata
    ///////////-->   
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--//////////
    Document title
    ///////////-->
    <title>JS - Salidas</title>
    <!--//////////
    Favicon
    ///////////--> 
    <link rel="shorcut icon" href="assets/img/favicon.ico"/>
</head>
<!--=======
END HEAD
========-->
<!--====================================================================================
                                /// START BODY ///
=====================================================================================-->
<body>

<!-- Ejemplo #1 / Con texto -->
<div style="display:inline-block; background-color:lightgrey; padding:10px 20px;">
<p id="demo1"></p>
<script>
document.getElementById("demo1").innerHTML="Hola mundo";
</script>
</div><br><br>

<!-- Ejemplo #2 / Con números -->
<div style="display:inline-block; background-color:lightgrey; padding:10px 20px;">
<p id="demo2"></p>
<script>
document.getElementById("demo2").innerHTML= 5+5;
</script>
</div><br><br>

<!-- Ejemplo #3 / Con botón -->
<div style="display:inline-block; background-color:lightgrey; padding:10px 20px;">
<p id="demo3">Texto número 1</p>
<button type=button onclick='document.getElementById("demo3").innerHTML = "Texto número 2"'>
    Cambiar el texto original
</button>   
</div><br><br>

<!-- Editar estilos CSS -->
<!-- Con script -->
<div style="display:inline-block; background-color:lightgrey; padding:10px 20px;">
<p id="demo4">Este puntaje es pequeño</p>
<script>
document.getElementById("demo4").style.fontSize='30pt';
</script>
</div><br><br>

<!-- Con botón -->
<div style="display:inline-block; background-color:lightgrey; padding:10px 20px;">
<p id="demo5">Este puntaje es pequeño</p>
<button type=button onclick='document.getElementById("demo5").style.fontSize = "30pt"'>
    Aumentar el puntaje
</button>   
</div><br><br>

<!-- Ocultar texto -->
<div style="display:inline-block; background-color:lightgrey; padding:10px 20px;">
<p id="demo6">Este texto puede ocultarse</p>
<button type=button onclick='document.getElementById("demo6").style.display = "none"'>
    Ocultar texto
</button>   
<button type=button onclick='document.getElementById("demo6").style.display = "block"'>
    Aparecer texto
</button>  
</div><br><br>

<!-- Editar atributo html -->
<div style="display:inline-block; background-color:lightgrey; padding:10px 20px;">
    <P>Esta es mi mascota</p>
    <button onclick="document.getElementById('myImage').src='http://place-puppy.com/200x200'">
    Elegir perrito
    </button>
    <img id=myImage src="http://place-puppy.com/200x200" style="width:100px">
    <button onclick="document.getElementById('myImage').src='http://placekitten.com/200/300'">
    Elegir gatito
    </button>    
</div>

<!--  Sin colspan ni rowspan-->
<!-- Hay que arreglar los datos que estna mal-->
<!-- 
<div class="table-2">
<table width="100%">
<thead>
<tr>
<th align="left">Fecha</th>
<th align="left">Fecha</th>
<th align="left">Módulo-Semana</th>
<th align="left">Recuperación</th>
</tr>
</thead>
<tbody>
<tr>
<td align="left">Junio</td>
<td align="left">01-07</td>
<td align="left"></td>
<td align="left"></td>
</tr>
<tr>
<td align="left">Junio</td>
<td align="left">08-14</td>
<td align="left"></td>
<td align="left"></td>
</tr>
<tr>
<td align="left">Junio</td>
<td align="left">15-21</td>
<td align="left"></td>
<td align="left"></td>
</tr>
<tr>
<td align="left">Junio</td>
<td align="left">22-28</td>
<td align="left">M01-S1</td>
<td align="left"></td>
</tr>
<tr>
<td align="left">Junio</td>
<td align="left">29-05</td>
<td align="left">M01-S2</td>
<td align="left"></td>
</tr>
<tr>
<td align="left"> Julio</td>
<td align="left">M01-S3</td>
<td align="left">M01-S3</td>
<td align="left"></td>
</tr>
<tr>
<td align="left"> Julio</td>
<td align="left">Receso</td>
<td align="left">Receso</td>
<td align="left"></td>
</tr>
<tr>
<td align="left"> Julio</td>
<td align="left">M01-S4</td>
<td align="left">M01-S4</td>
<td align="left"></td>
</tr>
<tr>
<td align="left"> Julio</td>
<td align="left">Periodo de evaluación</td>
<td align="left">Periodo de evaluación</td>
<td align="left"></td>
</tr>
<tr>
<td align="left">Agosto</td>
<td align="left">03-09</td>
<td align="left">M02-S1</td>
<td align="left">Rec.M01 03 Ago al 14 Ago</td>
</tr>
<tr>
<td align="left">Agosto</td>
<td align="left">10-16</td>
<td align="left">M02-S2</td>
<td align="left">Rec.M01 03 Ago al 14 Ago</td>
</tr>
<tr>
<td align="left">Agosto</td>
<td align="left">17-23</td>
<td align="left">M02-S3</td>
<td align="left"></td>
</tr>
<tr>
<td align="left">Agosto</td>
<td align="left">24-30</td>
<td align="left">M02-S4</td>
<td align="left"></td>
</tr>
<tr>
<td align="left">Agosto</td>
<td align="left">31-06</td>
<td align="left">Periodo de evaluación</td>
<td align="left"></td>
</tr>
<tr>
<td align="left">Septiembre</td>
<td align="left">07-13</td>
<td align="left">M03-S1</td>
<td align="left">Rec.M02 07 Sep al 18 Sep</td>
</tr>
<tr>
<td align="left">Septiembre</td>
<td align="left">14-20</td>
<td align="left">M03-S2</td>
<td align="left">Rec.M02 07 Sep al 18 Sep</td>
</tr>
<tr>
<td align="left">Septiembre</td>
<td align="left">21-27</td>
<td align="left">M03-S3</td>
<td align="left"></td>
</tr>
<tr>
<td align="left">Septiembre</td>
<td align="left">28-04</td>
<td align="left">M03-S4</td>
<td align="left"></td>
</tr>
<tr>
<td align="left">Octubre</td>
<td align="left">05-11</td>
<td align="left">Periodo de evaluación</td>
<td align="left"></td>
</tr>
<tr>
<td align="left">Octubre</td>
<td align="left">12-18</td>
<td align="left">M04-S1</td>
<td align="left">Rec.M03 12 Oct al 23 Oct</td>
</tr>
<tr>
<td align="left">Octubre</td>
<td align="left">19-25</td>
<td align="left">M04-S2</td>
<td align="left">Rec.M03 12 Oct al 23 Oct</td>
</tr>
<tr>
<td align="left">Octubre</td>
<td align="left">26-01</td>
<td align="left">M04-S3</td>
<td align="left"></td>
</tr>
<tr>
<td align="left">Noviembre</td>
<td align="left">02-08</td>
<td align="left">M04-S4</td>
<td align="left"></td>
</tr>
<tr>
<td align="left">Noviembre</td>
<td align="left">09-15</td>
<td align="left">Periodo de evaluación</td>
<td align="left"></td>
</tr>
<tr>
<td align="left">Noviembre</td>
<td align="left">16-22</td>
<td align="left">M05-S1</td>
<td align="left">Rec. M04 16 Nov al 27 Nov</td>
</tr>
<tr>
<td align="left">Noviembre</td>
<td align="left">23-29</td>
<td align="left">M05-S2</td>
<td align="left">Rec. M04 16 Nov al 27 Nov</td>
</tr>
<tr>
<td align="left">Noviembre</td>
<td align="left">30-06</td>
<td align="left">M05-S3</td>
<td align="left"></td>
</tr>
<tr>
<td align="left">Diciembre</td>
<td align="left">07-13</td>
<td align="left">M05-S4</td>
<td align="left"></td>
</tr>
<tr>
<td align="left">Diciembre</td>
<td align="left">14-20</td>
<td align="left">Periodo de evaluación</td>
<td align="left"></td>
</tr>
<tr>
<td align="left">Diciembre</td>
<td align="left">21-27</td>
<td align="left">Receso</td>
<td align="left"></td>
</tr>
<tr>
<td align="left">Diciembre</td>
<td align="left">28-04</td>
<td align="left"></td>
<td align="left"></td>
</tr>
</tbody>
</table>
&nbsp;
</div>
-->




<div style="display: flex; align-items: flex-start;">

<!-- Primera tabla -->
<div style="display: inline-block;">
<div class="table-2">
<table>
<thead>
<tr>
<th colspan="2" align="left">Fecha</th>
<th align="left">Módulo-Semana</th>
<th align="left">Recuperación</th>
</tr>
</thead>
<tbody>
<tr>
<td rowspan="5" align="left">Junio</td>
<td align="left">01-07</td>
<td align="left"></td>
<td align="left"></td>
</tr>
<tr>
<td align="left">08-14</td>
<td align="left"></td>
<td align="left"></td>
</tr>
<tr>
<td align="left">15-21</td>
<td align="left"></td>
<td align="left"></td>
</tr>
<tr>
<td align="left">22-28</td>
<td align="left">M01-S1</td>
<td align="left"></td>
</tr>
<tr>
<td align="left">29-05</td>
<td align="left">M01-S2</td>
<td align="left"></td>
</tr>
<tr>
<td rowspan="4" align="left"> Julio</td>
<td align="left">06-12</td>
<td align="left">M01-S3</td>
<td align="left"></td>
</tr>
<tr>
<td align="left">13-19</td>
<td align="left">Receso</td>
<td align="left"></td>
</tr>
<tr>
<td align="left">20-26</td>
<td align="left">M01-S4</td>
<td align="left"></td>
</tr>
<tr>
<td align="left">27-02</td>
<td align="left">Periodo de
evaluación</td>
<td align="left"></td>
</tr>
<tr>
<td rowspan="5" align="left">Agosto</td>
<td align="left">03-09</td>
<td align="left">M02-S1</td>
<td rowspan="2" align="left">Rec.M01
03 Ago al 14 Ago</td>
</tr>
<tr>
<td align="left">10-16</td>
<td align="left">M02-S2</td>
</tr>
<tr>
<td align="left">17-23</td>
<td align="left">M02-S3</td>
<td align="left"></td>
</tr>
<tr>
<td align="left">24-30</td>
<td align="left">M02-S4</td>
<td align="left"></td>
</tr>
<tr>
<td align="left">31-06</td>
<td align="left">Periodo de
evaluación</td>
<td align="left"></td>
</tr>
<tr>
<td rowspan="4" align="left">Septiembre</td>
<td align="left">07-13</td>
<td align="left">M03-S1</td>
<td rowspan="2" align="left">Rec.M02
07 Sep al 18 Sep</td>
</tr>
<tr>
<td align="left">14-20</td>
<td align="left">M03-S2</td>
</tr>
<tr>
<td align="left">21-27</td>
<td align="left">M03-S3</td>
<td align="left"></td>
</tr>
<tr>
<td align="left">28-04</td>
<td align="left">M03-S4</td>
<td align="left"></td>
</tr>
<tr>
<td rowspan="4" align="left">Octubre</td>
<td align="left">05-11</td>
<td align="left">Periodo de
evaluación</td>
<td align="left"></td>
</tr>
<tr>
<td align="left">12-18</td>
<td align="left">M04-S1</td>
<td rowspan="2" align="left">Rec.M03
12 Oct al 23 Oct</td>
</tr>
<tr>
<td align="left">19-25</td>
<td align="left">M04-S2</td>
</tr>
<tr>
<td align="left">26-01</td>
<td align="left">M04-S3</td>
<td align="left"></td>
</tr>
<tr>
<td rowspan="5" align="left">Noviembre</td>
<td align="left">02-08</td>
<td align="left">M04-S4</td>
<td align="left"></td>
</tr>
<tr>
<td align="left">09-15</td>
<td align="left">Periodo de
evaluación</td>
<td align="left"></td>
</tr>
<tr>
<td align="left">16-22</td>
<td align="left">M05-S1</td>
<td rowspan="2" align="left">Rec. M04
16 Nov al 27 Nov</td>
</tr>
<tr>
<td align="left">23-29</td>
<td align="left">M05-S2</td>
</tr>
<tr>
<td align="left">30-06</td>
<td align="left">M05-S3</td>
<td align="left"></td>
</tr>
<tr>
<td rowspan="4" align="left">Diciembre</td>
<td align="left">07-13</td>
<td align="left">M05-S4</td>
<td align="left"></td>
</tr>
<tr>
<td align="left">14-20</td>
<td align="left">Periodo de
evaluación</td>
<td align="left"></td>
</tr>
<tr>
<td align="left">21-27</td>
<td align="left">Receso</td>
<td align="left"></td>
</tr>
<tr>
<td align="left">28-04</td>
<td align="left"></td>
<td align="left"></td>
</tr>
</tbody>
</table>
&nbsp;

</div>
</div>
<!-- Segunda tabla -->
<div style="display: inline-block;">
<div class="table-2">
<table>
<thead>
<tr>
<th align="left">Mes</th>
<th colspan="3" align="left">Recursamiento</th>
</tr>
</thead>
<tbody>
<tr>
<td rowspan="4" align="left">Mayo</td>
<td align="left">27-03</td>
<td align="left">S1</td>
<td rowspan="4" align="left">Rec 25</td>
</tr>
<tr>
<td align="left">04-10</td>
<td align="left">S2</td>
</tr>
<tr>
<td align="left">11-17</td>
<td align="left">S3</td>
</tr>
<tr>
<td align="left">18-24</td>
<td align="left">S4</td>
</tr>
<tr>
<td rowspan="4" align="left">Agosto</td>
<td align="left">03-09</td>
<td align="left">S1</td>
<td rowspan="4" align="left">Rec 26</td>
</tr>
<tr>
<td align="left">10-16</td>
<td align="left">S2</td>
</tr>
<tr>
<td align="left">17-23</td>
<td align="left">S3</td>
</tr>
<tr>
<td align="left">24-30</td>
<td align="left">S4</td>
</tr>
<tr>
<td rowspan="4" align="left">Noviembre</td>
<td align="left">02-08</td>
<td align="left">S1</td>
<td rowspan="4" align="left">Rec 27</td>
</tr>
<tr>
<td align="left">09-15</td>
<td align="left">S2</td>
</tr>
<tr>
<td align="left">16-22</td>
<td align="left">S3</td>
</tr>
<tr>
<td align="left">23-29</td>
<td align="left">S4</td>
</tr>
</tbody>
</table>
&nbsp;

</div>
</div>
<!-- Tercera tabla -->
<div class="table-2">
<table>
<thead>
<tr>
<th class="text-center" colspan="2" align="left">Remediales</th>
</tr>
</thead>
<tbody>
<tr>
<td align="left">R-22</td>
<td align="left">23 de marzo
al 5 de abril</td>
</tr>
<tr>
<td align="left">R-23</td>
<td align="left">29 de junio
al 12 de julio</td>
</tr>
<tr>
<td align="left">R-24</td>
<td align="left">7 al 20
de septiembre</td>
</tr>
<tr>
<td align="left">R-25</td>
<td align="left">16 al 29 de
noviembre</td>
</tr>
</tbody>
</table>
</div>
</div>



</body>

</html>