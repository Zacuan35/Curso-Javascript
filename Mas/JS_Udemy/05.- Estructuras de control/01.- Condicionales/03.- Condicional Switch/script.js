"use strict"

/*
=============================
Condicional switch - Sintáxis
=============================
switch (varName) {
  case #1: // Para comprobar un caso
  break; // Es una instrucción que sirve para pasar al siguiente caso.
  default: // Cuando no sucede ninguno de los casos.
  break;
}
*/

var edad = 18;
var imprime = "";

switch (edad){
  
  case 18:
  imprime = "Acabas de cumplir la mayoría de edad";
  break;

  case 25:
  imprime = "Ya eres un adulto";
  break;
  
  case 40:
  imprime = "Crisis de los 40";
  break;
  
  case 75:
  imprime = "Eres un anciano";
  break;
  
  default:
  imprime = "Tu edad es neutra";
  break;
}

console.log (imprime);
