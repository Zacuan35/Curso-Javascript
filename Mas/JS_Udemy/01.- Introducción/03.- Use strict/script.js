'use strict'
// LET Y VAR

/*=============
Prueba con var
==============*/
// Declaramos la variable numero con un valor de 40.
var numero = 40;
console.log(numero);

// En la siguiente expresión cambiamos el valor de la variable a 50 
if(true){
  var numero = 50;
  console.log(numero);
}

// El valor de la variable ahora es de 50, ya que en la expresión anterior se modificó a nivel global, es decir el nuevo valor se aplica fuera del bloque de código.
console.log(numero);

/*=============
Prueba con let
==============*/
// Declaramos la variable texto con el valor de perro.
var texto = "perro";
console.log(texto);

/*Let a diferencia de var actua a nivel de bloque, en la siguiente expresión la palabra let crea una nueva variable local que es aplicable sólamente al nivel del bloque de código (dentro de la expresión) y no fuera de ella*/
if (true) {
  let texto = "gato";
  console.log(texto); //Valor gato
}

/*Si mandamos llamar nuevamente la variable fuera del bloque el valor de la variable seguirá siendo la inicial (perro) ya que let no altera los valores a nivel global*/ 
console.log(texto);


