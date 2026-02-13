'use strict'

/*
Utilizando un bucle mostrar la media y la suma de los numeros introducido por el usuario hasta que metamos un numero negativo y hasta en ese caso se mostraria el resultado.

Utilizando un bucle mostar la media y la suma de los resultados introducidos por el usuario hasta que el usuario meta un numero negativo
*/

var suma = 0;
var contador = 0;

/* ¿Que bucle podemos usar para ejecutar un bloque de código antes de evaluar una condición y que ese bloque de código nos pida información al usuario, nos saque un prompt? El bucle que demos utilizar es el do while

Dentro de la variable do while creamos una variable numero y pedir un prompt para pédiur un numero al usuario.
Esto va a sumar número conforme los vaya introduciendo y hacer la media para mostrarlo en la consola o en un alert, por defecto el numero a tener será el 0, el prompt se tiene que convertir a un entero, a un numero.

//If
Si no es un numero el valor introducido por el usuario, pues el valor de numero será igual a 0.

// else if
Si no vamos a comprobar si el numero es mayor o igual 0, si metemos un numero menor a 0 nos va a mostrar un resultado ya no se va a cumplir la condición del bucle.

En el caso de que numero sea mayor o igual a 0, suma va a ser igual a el vaor que ya tenga suma mas numero.
esto sería igual a a hacer esto
suma += numero;
por que este operador (+=) agarra la variable suma y la suma con la variable numero y guarda el valor nuevamente en la variable suma. 

Ahora hacemos un contador ++ para sumarle uno al contador y ver las iteraciones que esta haciendo el bucle y luego poder sacar la maedia, ¿Cómo se saca la media? el resultado de la suma entre el numero de intentos, entre el numero de elementos que se han sumado.
si se itera 100 veces y el resultado es 4000, pues 4000 / 1000 y saldría la media de cada una de esas iteraciones.

// While
Si numero es mayor o igual a 0, en ese caso se seguirá ejecutando el contenido del do, se va a seguir ejecutando el bucle, pero en el caso de que sea menor a 0 vamos a seguir en el bucle, se va a hacer un break en automático.
*/

// Comprobando en la ventana
/*La ventana  nos va a pedir números hasta que metamos un numero negativo con lo cual pararia*/

/*Si vamso haciendo en cada iteración del bucle un console.log de loq eu hay en suma y de lo que hay en contador vamos a ver lo que pasa me va n apareciendo en la consola los numeros ingresados, la suma que se va haciendo y los numeros de iteracciones que van hasta el momento.

Hasta el final se muestra una alerta con la suma de todos los números es el resultado de la suma.
La media de todos los numeros es la división entre la suma de todos los numeros, el resultado total entre la cabtidad de numeros que hemos introducido o la cantidad de iteracciones que se han hecho, el contador.

Si he metido 100 números, vamos a dividir el resultado de la suma de todos esos numeros entre los numeros que he introducido y me sale la media aproximada*/

do{
  var numero = parseInt(prompt('introduce numeros hasta que metas uno negativo', 0 ));
  
  if(isNaN(numero)){
    numero = 0;
    
  }else if (numero >= 0){
    suma = suma + numero;
    // suma += numero;
    contador ++;
  }
  console.log(suma);
  console.log(contador);
}while (numero >= 0) {
  alert("La suma de todos los numeros es: " + suma);
  alert("La media de todos los numeros es: " + (suma/contador));
}

/*El resultado de lo que sucede podemos verlo en la consola.*/
