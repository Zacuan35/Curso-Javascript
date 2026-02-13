/* ========================
Declaración de una variable
===========================
En este ejemplo tenemos una variable llamada pais cuyo contenido es el nombre España*/
var antiguedad = "2019";
var pais = "España";
var continente = "Europa";

/* Mostrar datos de las variables
A continuación le pedimos a la consola que muestre los valores de las variables declaradas anteriormente*/ 
console.log (antiguedad);
console.log (pais, continente);

/* ========================
Concatenar cadenas de texto
======================== */
var pais_y_continente = pais + " " + continente;
//Mostrar los datos de la variable concatenada
alert (pais_y_continente);

/* =============================
Reasignar valores a una variable
============================= */
pais = "México";
continente = "Latinoamerica";
antiguedad = "2030";
alert(pais_y_continente);