'use strict'

/* 
========
SINTÁXIS
========
if (Condición a cumplirse){
  // Bloque con el código de ejecución  en caso de que se cumpla la condición.
} else {
  // Bloque con el codigo de ejecución en caso de que no se cumpla la condición anterior.
}
*/

var edad1 = 30;
var edad2 = 12;

/* 
=================================
Condicional if / Comparando datos
=================================
En los condicionales podemos hacer comparaciones*/
if (edad1 > edad2) {
  document.getElementById("demo-01").innerHTML = "La edad 1 es MAYOR que la edad 2";
} else {
    document.getElementById("demo-01").innerHTML = "La edad 1 es MENOR que la edad 2";
}

/*
===========================
Condicional if / Ejercicio
===========================
Queremos comprobar que el usuario sea mayor de edad*/

var nombre =  'David Suárez';
var edad3 = 18;

if (edad3 >= 18) {
  // Es mayor de edad
    document.getElementById('demo-02').innerHTML = nombre + ' tiene ' +  edad3 + " es MAYOR de edad.";
} else {
  //Es menor de edad
  document.getElementById('demo-02').innerHTML = nombre + ' tiene ' +  edad3 + " es MENOR de edad.";
}
 
/*
===============
Anidación de if
===============
*/
if (edad3 >= 18) {
  // Es mayor de edad
    document.getElementById('demo-03').innerHTML = nombre + ' tiene ' +  edad3 + " es MAYOR de edad.";
    // Saber si el usuario es millenial
    if(edad3 <= 33){
      document.getElementById('demo-03').innerHTML = 'Eres millenial';
    }else {
      document.getElementById('demo-03').innerHTML = 'Ya no eres millenial';
    }
    
} else {
  //Es menor de edad
  document.getElementById('demo-03').innerHTML = nombre + ' tiene ' +  edad3 + " es MENOR de edad.";
}

/* 
========
Else if
========
Es lo mismo que hacer otro if, pero en lugar de anidarlo lo ponemos al lado.
*/

if (edad3 >= 18) {
  // Es mayor de edad
    document.getElementById('demo-04').innerHTML = nombre + ' tiene ' +  edad3 + " es MAYOR de edad.";
    
    // Saber si el usuario es millenial
    if(edad3 <= 33){
      document.getElementById('demo-04').innerHTML = 'Eres millenial';
    }else if (edad3 >= 70) {
       document.getElementById('demo-04').innerHTML = 'Eres anciano';
    }
    else {
      document.getElementById('demo-04').innerHTML = 'Ya no eres millenial';
    }
    
} else {
  //Es menor de edad
  document.getElementById('demo-04').innerHTML = nombre + ' tiene ' +  edad3 + " es MENOR de edad.";
}