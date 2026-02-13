'use strict'

/*
Tabla de multiplicar de un número introducido por pantalla

Primero tenemos que capturar un número y vamos a crear una variable número y vamos a hacer un parseInt del resultado que nos devuelva el prompt, por defecto pondremos el 1.

¿Cómo hago para mulñtiplicar el número introducido por todos los numero del 1 al 10?

Para ello usamos un For
La variable i inica en uno
Mientras que i sea menor o igual a 10 que el bucle siga iterando y vamos incrementando el valor de i

Y luego puedo hacer un document.write para mostrarlo en el body de la página web.*/

var numero = parseInt(prompt('¿De qué numero quieres la tabla?', 1));

document.write("<h1> Tabla del " +numero+ "</h1>" );
for(var i = 1; i<= 10; i++){
  document.write(i+ " x " +numero+ " = " +(i*numero)+ "<br/>");
}



/*
Todas las tablas de multiplicar
Si yo quiero hacer la tabla de todos los número en vez de uno sólo

De esta manera estamos reccorriendo todas las tablas del 1 al 10, luego vuelvo a recorrer todo del 1 al 10, luego utilizo el numero de la tabla actual con el número del contador de esa multiplicación concreta.
*/

for(var c = 1; c <= 10; c++){
 document.write("<h1> Tabla del " + c + "</h1>");
 for (var i = 1; i <= 10; i++) {
   document.write(i + " x " + c + " = " + (i * c) + "<br/>");
 } 
}

// Aqui puedo cambiarlo por si quiero hasta la tabla del 13 <= 15

/*Ya hemos visto como hacer la tabla de multiplicar y como seleccionar una tabla de multiplicar única cuando yo introduzco un numero por el prompt*/
