'use strict'

/* ===
Break
====== 
Dentro de las llaves colocamos un if con lo siguiente;
Si year es igual a 2000 que se detenga la ejecución, para detener colocamos la palabra break en las llaves del condicional if, de esta forma cuando year tenga un valor de 2000 se detendrá.*/

var year = 2018;

while (year != 1991) {
  console.log("Estamos en el año " + year);
  if(year == 2000){
    break;
  }
  year--;
}
