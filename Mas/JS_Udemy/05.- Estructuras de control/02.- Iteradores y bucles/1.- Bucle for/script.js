'use strict'

/* =======
Ejercicio
==========
En este ejercicio se muestra lo siguiente:
Si el valor del contador (variable i) es menor al valor de número (100) ejecuta el código dentro de las llaves y súmale 1 al valor del contador (variable i) 

Para mostrar el número 100 debemos cambiar el operador < por <=, de lo contrario sólo se mostrará hasta el número 99. */ 

var numero = 100;

for(var i = 0; i < numero; i++){
  console.log("vamos por el número " + i);
}

/*Instrucción debugger
Si utilizamos la instrucción debugger podemos ver lo que está pasando dentro del bucle en la consola.

for (var i = 0; i < numero; i++) {
  console.log("vamos por el número " + i);
  debugger;
}*/


