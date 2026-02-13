'use strict'

/*
Mostrar todos los numeros divisores de un número introducidos en un prompt

1.- Creamos unas variables donde vamos a guardar el número que va a inbtroducir el usuario, parseInt para convertir un número a un string, por defaul vamos a poner el numero 1.

El bucle a utilizar será el for, por que vamos a ir desde el número 1 hasta el introducido por el usuario, la variable i esta inicializada en 1, la condición dice mientras i sea menor o igual al numero vamos a incrementar el contador a 1

Mostramos un console.log divisor y bvamos a concatenarle la i, que será el numero divisor que estamos reccoriendo hasta llegar al número.

Si se prueba esto hasta aqui saca todos los numeros del 1 al 123 pero lo que queremos mostrar los divisores.

¿Qué divisor tiene un número?
Un número es divisor de otr cuando al dividirlos entre si da como resultado 0

Hacemos un IF
En el caso de que número al dividirlo entre i de como resto 0, entonces ese numero i si es divisor del número introducido en pantalla.

*/

var numero = parseInt(prompt("Mete un número", 1));

for(var i = 1; i<= numero; i++){
  if(numero%1 == 0){
    console.log("Divisor: " + i);
  }
}