'use strict'

var numero1 = prompt('Introduce el primer número' , 0);
var numero2 = prompt('Introduce el segundo número' , 0);

// console.log(numero1,numero2);

/*Si yo introduzco un número que fuera menor que 0 o incluso que fuera una letra nos dice "introduce numeros correctos" devuelve un NAN not a number en la consola, no es un número.

Plus
Si los numeros no son un número o son menor o iguales a 0, nos vuelva a pedir que introduzcamos los datos.

En el caso de que numero1 o numero 2 no fueran correctos que nos hiciera un while y nos volviera a pedir las variables hasta que esas variables sean correctas.
Con el while vamos a evaluar una condición y vamos a ejecutar un bloque de código, en este caso volvemos a pedir los numeros, pero sin la palabra var por que ya es una asignación definida.

Si el numnero es menor o igual a 0, o el numero2 es menor o igual a 0, o es un NAN (not a number) es un string, son letras, existe una función llamada isNAN que como parámetro le pasamos la variable, esto nos devuelve un true o false, si numero 1 no fuera un número, si fuera un NAN devolviera true, si esta función devuelve true significa que no es un numero con lo cual va a seguir ejecutando el contenido del bucle.

su numero2 no es un numero de igual forma me va a pedir los valores.
Ahora si hasta que no metamos numeros correctos mayores que 0 y que sean numero me va a seguir que introduzcamos datos correctamente.
*/

/*While*/
while(numero1 <= 0 || numero2 <=0 || isNaN(numero1) || isNaN(numero2) ){
  numero1 = parseInt( prompt('Introduce el primer numero', 0) );
  numero2 = parseInt( prompt('Introduce el segundo numero', 0) );
}

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
