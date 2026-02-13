'use strict'

/*
Mostrar todos los numeros impares que estén entre dos números introducidos por el usuario,

Creamos un prompt para solicitar datos al usuario y lo guardamos dentro de un parseInt para convertir a enteros ese dato, todo ello lo adignamos ala variable numero1, y hacemos lo smimo con la variable numero2
Con ello ya estamso solicitándole dos números al usuario.
*/

var numero1 = parseInt(prompt("Introduce el primer número", 0));
var numero2 = parseInt(prompt("Introduce el segundo número", 0));

/*
Mostrar todos los números impares
para ello utilizamos un while, mientras que el numero1 sea menor a numero2 pues ejecuta lo que haya dentro del while.

En las llaves se utilizará un operador de incremento para que se vaya reduciendo hasta que llegue un momento en que las dos variables sean iguales y no itere más dentro del bucle.

¿Cómo comprobamos si numero 1 es impar?
Tenemos que hacer un if y una operación

//if
Si el resto de número1 dividido entre dos es diferente a 0 entonces es un numero impar
Si la condición se cumple hacemos un console.log donde diga que el numero1 es impar

Por ejemplo si colocamos el numero 1 y el 10.
Si lo revisamo en la consola aparecen todos los números impares entre las dos cifras ingresadas, 
*/

while(numero1 < numero2){
  numero1++;
  
  if (numero1%2 != 0) {
    console.log("El " +numero1+);
  }
  
}