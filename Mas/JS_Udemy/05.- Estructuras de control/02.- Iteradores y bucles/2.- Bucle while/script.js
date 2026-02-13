'use strict'

/* ======
Ejercicio
=========
var year = 2018; 
while (year <= 2050) {
  console.log("Estamos en el año " + year);
}
*/

/* ==============================
Detener el bucle / Incremento (++)
=================================
Para detener el bucle, colocamos la variable year en el bloque de instrucciones y le agregamos un operador de incremento (++), para que en cierto punto de la iteración la variable year tenga el valor de 2050, la condición no cumpla y por ende, el ciclo se detenga.*/

var year = 2018;

while (year <= 2050) {
  console.log("Estamos en el año " + year);
  // Suma 1 a year
  year++;
}

/* ===============================
Detener el bucle / Decremento (--)
==================================
Si quiero hacer lo contrario, que vaya del 2018 hacia abajo utilizamos el operador de decremento (--) y cambiamos la condición a lo siguiente:

Mientras que la variable yaers sea diferente a 1991 que se ejecute el bucle, en el momento que sea igual a 1991 la ejecución se va a parar.*/

var years = 2018;

while (years != 1991) {
  console.log("Estamos en el año " + years);
  // Resta 1 a year
  years--;
}
