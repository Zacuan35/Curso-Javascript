'use strict'

/*Hacer un programa que muestre todos los números que hay entre dos números introducidos por el usuario.

  Tenemos que hacer dos variables
  numero 1 que va a ser un prompt que por defecto va a ser 0, tenemos que hacer un parseInt para convertir el string a un número
*/

var numero1 = parseInt(prompt('Introduce el primer numero', 0));
var numero2 = parseInt(prompt('Introduce el primer numero', 0));

/*
Para mostrar todos los numeros entre estas dos variales podríamos hacer un bucle for
y que la variable que inicia el contador sea la variable numero 1, el form va a empezar a correr desde la variable que haya introducido en la variable1, mientras que i sea menor o igual a numero 2, ve suamdno al contador (++) y muestra esos numeros
*/

/*
Vamos a imprimir el resultado en un documento.write
La función document.write imprime texto en el body de la pagina
Dentro de for vamos a mostrar la variable i que elk que se va a incrementado del numero 1 al 2
*/

/* Desde el numero1 que esta guardado en la variable i hasta el numero2 esa variable se va a ir incrementando en uno en cada iteración del bucle y lo va a mostrar por pantalla. */

document.write("<h1>De "+numero1+" a "+numero2+" están estos números: </h1>");
for(var i = numero1; i <= numero2; i++){
  document.write(i+"<br/>");
}




