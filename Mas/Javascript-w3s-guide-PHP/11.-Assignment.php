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
  <title>JS - 11.Asignación</title>
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
  <h1>Asignación</h1><hr>

<!-- ==================== Panel-1 ====================-->
<button class="accordion">Operadores de asignación de JavaScript</button>
<div class="panel">
  <h2>Operadores de asignación de JavaScript</h2>
  <p>Los operadores de asignación asignan valores a las variables de JavaScript.</p>
  <table>
    <tr>
      <th>Operador</th>
      <th>Ejemplo</th>
      <th>Igual que</th>
    </tr>
    <tr>
      <td>=</td>
      <td>x = y</td>
      <td>x = y</td>
    </tr>
    <tr>
      <td>+=</td>
      <td>x += y</td>
      <td>x = x + y</td>
    </tr>
    <tr>
      <td>-=</td>
      <td>x -= y</td>
      <td>x = x - y</td>
    </tr>
    <tr>
      <td>*=</td>
      <td>x *= y</td>
      <td>x = x * y</td>
    </tr>
    <tr>
      <td>/=</td>
      <td>x /= y</td>
      <td>x = x / y</td>
    </tr>
    <tr>
      <td>%=</td>
      <td>x %= y</td>
      <td>x = x % y</td>
    </tr>
    <tr>
      <td>&#60;&#60;&#61;</td>
      <td>x&#60;&#60;&#61;y</td>
      <td>x&#61;x&#60;&#60;y</td>
    </tr>
    <tr>
      <td>&#62;&#62;&#61;</td>
      <td>x&#62;&#62;&#61;y</td>
      <td>x&#61;x&#62;&#62;y</td>
    </tr>
    <tr>
      <td>&#62;&#62;&#62;&#61;</td>
      <td>x&#62;&#62;&#62;&#61;y</td>
      <td>x&#61;x&#62;&#62;&#62;y</td>
    </tr>
    <tr>
      <td>&=</td>
      <td>x &= y</td>
      <td>x = x & y</td>
    </tr>
    <tr>
      <td>^=</td>
      <td>x ^= y</td>
      <td>x = x ^ y</td>
    </tr>
    <tr>
      <td>|=</td>
      <td>x |= y</td>
      <td>x = x | y</td>
    </tr>
    <tr>
      <td>**=</td>
      <td>x **= y</td>
      <td>x = x ** y</td>
    </tr>                                                       
  </table>
  <p><i>El operador **= es parte de <a href="https://translate.googleusercontent.com/translate_c?depth=1&hl=es&prev=search&pto=aue&rurl=translate.google.com&sl=en&sp=nmt4&u=https://www.w3schools.com/js/js_2016.asp&usg=ALkJrhht7b-yJNq9CFhitGvK5U-0RfEgLw" target="_blank">ECMAScript 2016</a>.</i></p>
</div>
<!-- ==================== Panel-2 ====================-->
<button class="accordion">Ejemplos de asignaciones</button>
<div class="panel">
  <h2>Ejemplos de asignaciones</h2>
  <table>
    <tr>
      <th>El operador =</th>
      <th>El operador +=</th>
      <th>El operador -=</th>
    </tr>
    <tr>
      <td>
        <p>El <b>operador de asignación =</b> asigna un valor a una variable.</p>
        <p>var x = 10;<br>
        document.getElementById("demo-one").innerHTML = x;</p>
        <p id=demo-one></p>
        <script>
          var x = 10;
          document.getElementById("demo-one").innerHTML = x;
        </script>
      </td>
      <td>
        <p>El <b>operador de asignación +=</b> agrega un valor a una variable.</p>
        <p>var x = 10;<br>
          x += 5;<br>
        document.getElementById("demo-two").innerHTML = x;</p>
        <p id=demo-two></p>
        <script>
          var x = 10;
          x += 5;
          document.getElementById("demo-two").innerHTML = x;
        </script>
      </td>
      <td>
        <p>El <b>operador de asignación -=</b> resta un valor de una variable.</p>
        <p>var x = 10;<br>
          x -= 5;<br>
        document.getElementById("demo-three").innerHTML = x;</p>
        <p id=demo-three></p>
        <script>
          var x = 10;
          x -= 5;
          document.getElementById("demo-three").innerHTML = x;
        </script>
      </td>
    </tr>    
  </table>

  <table>
    <tr>
      <th>El operador *=</th>
      <th>El operador /=</th>
      <th>El operador %=</th>
    </tr>
    <tr>
      <td>
        <p>El <b>operador de asignación *=</b> multiplica una variable.</p>
        <p>var x = 10;<br>
          x *= 5;<br>
        document.getElementById("demo-four").innerHTML = x;</p>
        <p id=demo-four></p>
        <script>
          var x = 10;
          x *= 5;
          document.getElementById("demo-four").innerHTML = x;
        </script>
      </td>
      <td>
        <p>La <b>asignación /=</b> divide una variable.</p>
        <p>var x = 10;<br>
          x /= 5;<br>
        document.getElementById("demo-five").innerHTML = x;</p>    
        <p id=demo-five></p>
        <script>
          var x = 10;
          x /= 5;
          document.getElementById("demo-five").innerHTML = x;
        </script>
      </td>
      <td>
        <p>El <b>operador de asignación %=</b> asigna un resto a una variable.</p>
        <p>var x = 10;<br>
          x %= 5;<br>
        document.getElementById("demo-six").innerHTML = x;</p>
        <p id=demo-six></p>
        <script>
          var x = 10;
          x %= 5;
          document.getElementById("demo-six").innerHTML = x;
        </script>
      </td>
    </tr>    
  </table>
</div>

</div>
<!-- Javascript-->
<script src="assets/js/accordion.js"></script>
</body>
</html>
