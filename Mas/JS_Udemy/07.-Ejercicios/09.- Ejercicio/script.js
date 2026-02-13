'use strict'

/*
Vamos a hacer una calculadora
- Que pida dos numeros por pantalla, 
- Si metemos un numero mal que nos lo vuelva a pedir
- Que nos muestre en el cuerpo de la página en una alerta y por la consola el resultado de sumar, restar, multiplicar y dividir esas dos cifras que hemos pedido.
*/


// Pedir las dos cifras
var numero1 = parseInt(prompt('introduce el primer numero', 0));
var numero2 = parseInt(prompt('introduce el segundo numero', 0));

// Comprobar si esos numeros vienen con numeros correctos
/*Mientras que el numero 1 sea menor a 0 o el numero 2 sea menor a 0 y sea una letra el numero 1 o sea o un NAN el numero 2, si eso pasa voy a pedir que vuelva a pedir nuevamente el numero*/
while (numero1 < 0 || numero2 < 0 || isNan(numero1) || isNan(numero2) ){
  numero1 = parseInt(prompt('introduce el primer numero', 0));
  numero2 = parseInt(prompt('introduce el segundo numero', 0));
}

/*Creamso una variable resultado, y hacemos un string para mostrarlo en el body y en la consola

La variable string lleva todo este resultado que puedo agarrar y reutilizarlo y psarlo a todoas las funciuones que quiera o hacer lo que quiera con él*/
var resultado = "La suma es: " +(numero1 + numero2)+ "<br/>"+
                "La resta es: " +(numero1 - numero2)+ "<br/>"+
                "La multiplicación es: " +(numero1 * numero2)+ "<br/>"+
                "La división es: " +(numero1 / numero2)+ "<br/>";


/*Con el resultado podemos hacer un document.write para colocarlo en el cuerpo de la página*/

document.write(resultado);

/*¿Cómo mostrarlo en una alerta?
La etiqueta br es propia del html, para mostrar un salto de línea en una consola o en una alerta tenemos que utilizar /n
*/

var resultadoCMD = "La suma es: " + (numero1 + numero2) + "/n" +
  "La resta es: " + (numero1 - numero2) + "/n" +
  "La multiplicación es: " + (numero1 * numero2) + "/n" +
  "La división es: " + (numero1 / numero2) + "/n";

alert(resultadoCMD);
console.log(resultadoCMD);
