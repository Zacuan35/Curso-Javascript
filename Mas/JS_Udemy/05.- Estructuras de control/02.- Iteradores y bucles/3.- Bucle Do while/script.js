'use strict'

/* ======================
Do while / Bucle infinito
=========================
En este ejemplo primero se ejecutará el bloque de instrucciones (alert).
Después se comprobará la condición del while, y si se cumple se volverá a ejecutar el bloque de instrucciones.

Si year es diferente a 20 volverá a entrar al bloque de instrucciones y se ejecutará de nuevo, en este ejemplo se va a ejecutar infinitamente.

var year = 20;
do {
  alert("Sólo cuando sea diferente a 20");
} while (year != 20)
*/

/* =====================
Do while / Para el bucle
========================
Le daremos un valor de 20 a year para que se pare en la primera ejecución.*/
var year = 18;
do {
  alert("Sólo cuando sea diferente a 20");
  year = 20;
} while (year != 20)

/* ========================
Do while / Ejecutar 5 veces
===========================
A continuación el bloque de instrucciones se ejecutará cinco veces:
var year = 30;
do {
  alert("Sólo cuando sea diferente a 20");
  year --;
} while (year > 25)
*/