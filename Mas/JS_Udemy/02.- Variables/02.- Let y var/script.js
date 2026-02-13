'use strict'

/* =====
Var
====== */ 
// Define una variable a nivel global

var animal = 'Perro'
if (true){
  var animal = 'Gato'
}
document.getElementById("demo-01").innerHTML= animal;

/* =====
Let
====== */ 
// Define una variable a nivel local

let carro = 'Tsuru'
if (true){
  let carro = 'Jetta'
}
document.getElementById("demo-02").innerHTML= carro;