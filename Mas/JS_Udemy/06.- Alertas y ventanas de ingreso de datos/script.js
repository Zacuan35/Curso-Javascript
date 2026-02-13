'use strict'

/* ================
Ventanas emergentes
===================
Para hacer una ventana emergente o alerta utilizamos la función alert */
alert("¡Esto es una alerta!");

/* =====================
Ventanas de confirmación
========================
Para hacer una ventana de confirmación utilizamos la función confirm
confirm("¿?Estas seguro de querer continuar");

Para poder saber y ver el resultado que la ventana de confirmación devuelve podemos asignarlo a una variable e imprimir el resultado de esa variable en un console.log lo que devolverá true o false.*/
var resultado = confirm("¿Estas seguro de querer continuar?");
console.log(resultado);

/* =========================
Ventanas de ingreso de datos
============================
La función promp puede recibir dos parámetros, la primera es el texto que va a aparecer en la ventana, y la segunda es el valor por defecto que aparecerá en el input.

prompt("¿Qué edad tienes?", 18);

Para poder conocer el dato que capturará la función podemos asignarlo a una variable e imprimir su valor en la consola.*/

var resultado = prompt("¿Qué edad tienes?", 18);
console.log(resultado);

/*Ahora bien, el valor capturado por la ventana siempre va a ser un string y podemos comprobarlo colocando un typeof a la variable que contiene la función promt

var resultado = prompt("¿Que edad tienes?", 18);
console.log(typeof resultado);

Si quisieramos convertir el valor de prompt a otro tipo de dato para utilizarlo en operaciones podemos usar funciones como Numbre,  parseInt, parseFloat etc*/






