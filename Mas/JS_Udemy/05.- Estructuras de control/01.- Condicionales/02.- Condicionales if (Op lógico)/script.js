var year = 2018;

/* ======
Negación
=======*/ 
if(year != 2016){
  console.log("El año no es 2016, realmente es " + year);
}

/* ======
- And
=======*/
if(year >= 2000 && year <= 2020 && year != 2018){
  console.log("Estamos en la era actual " + year);
} else {
  console.log ("Estamos en la era post moderna");
}

if(year >= 2000 && year <= 2020){
  console.log("Estamos en la era actual " + year);
} else {
  console.log ("Estamos en la era post moderna");
}

/* ======
- Or
=======*/
if(year == 2008 || year == 2018){
  console.log("El año acaba en 8");
}

/* =======
Paréntesis 
==========
Podemos usar los paréntesis para dar prioridad a una operación sobre otra*/
if(year == 2008 || (year <= 2018 && year == 2028)){
  console.log("El año acaba en 8");
} else {
  console.log("Año no registrado");
}