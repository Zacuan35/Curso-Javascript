'use strict'

/*
Hacer un programa que nos diga si un numero es par o impar, con ventana que nos pida el numero (ventana prompt), tiene que comprobar si cuando un numero no es valido que nos vuelva a pedir el numero, y que nos muestre si el numero es par o impar. 

Tenemos que comprobar si el número es un numero realmente, y en caso de que no sea volver a pedir el prompt.

While
Mientras que sea una letra o algo que no sea un numero va estar dando vueltas el bucle, y vamos a repetir hasta que no sea un número valido.

Si es valido, si el numero al dividirlo entre dos da 0, si number / 2 tiene como resto 0, podemos poner un alert que diga que es un numero par.

En el caso de que no ponemos un alert que diga es impar.
*/

var number = parseInt(prompt('introduce un numero', 0));

while(isNaN(number)){
  number = parseInt(prompt('Introduce un numero', 0));
}

if(number % 2 == 0){
  alert("Es un numero par");
} else {
  alert("Es impar")
}

