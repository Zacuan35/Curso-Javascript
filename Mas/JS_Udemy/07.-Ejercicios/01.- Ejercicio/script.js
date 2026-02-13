'use strict'

/*Programa que pida dos números y que nos diga cual es el mayor, el menor y si son iguales*/ 
/*
Para pedir al usuario un dato lo hacemos con la función prompt, como texto que se va a mostrar en el prompt será, introduce el primer y segundo número, y el valor por defecto será 0.
Como el promp recoge siempre un string tenemos que hacer un parseInt para convertir  el string  que recoga el prompt a número y poder hacer operaciones con ellos.
*/

var numero1 = prompt('Introduce el primer número' , 0);
var numero2 = prompt('Introduce el segundo número' , 0);
console.log(numero1,numero2);

/* Hasta aqui ya tenemos los dos números, ahora veremos cual es el mayor y cual es el menor.
Para hacer eso lo podemos hacer con un if, el cual nos va a comprobar si el numero1 e igual a numero dos nos va a soltar un alert que nos diga los numeros son iguales, con el else if ebn caso de que no sean igual comprobaremos si numero 1 es mayor a numero dos, ponemos un alert que nos diga el numero mayor es numero 1, y el numero menor es numero 2.

Ahora comprobamos el caso en el que el numero 2 sea mayor a numero 1, entonces lo hacemos con un else if, tenemos que comprobar si el numero 2 es mayor al numero 1, en ese caso mostramos los alert y el numero mayor es el dos, y el numero menor es el 1.

En el caso de que ninguna cosa se cumpliera ponemos un alert que diga, introduce números completos.
*/

// Colocar que sucede aquí
if(numero1 == numero2){
  alert('Los números son iguales');
// Colocar que sucede aquí  
} else if (numero1 > numero2 ){
  alert('El número mayor es: ' + numero1);
  alert('El número menor es: ' + numero2);
// Colocar que sucede aquí  
} else if (numero2 > numero1) {
  alert('El número mayor es: ' + numero2);
  alert('El número menor es: ' + numero1);
// Colocar que sucede aquí
}else{
  alert('Introduce números completos');
}

/*Si yo introduzco un número que fuera menor que 0 o incluso que fuera una letra nos dice "introduce numeros correctos"*/






