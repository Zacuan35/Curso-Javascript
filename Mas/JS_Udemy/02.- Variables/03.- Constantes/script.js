'use strict'

/* CONSTANTES
Es como una variable pero su valor no 
puede cambiar */
/*Una constante es como una variable, es un contenedor de datos pero su valor no puede ser modificado.*/

// Declaramos una variable y una constante
var web = "https://victor_web.es";
const ip = "192.88.0.12";

/*Cambiamos el valor de la variable comentando por el momento la reasignación del valor de la constante.*/ 
var web = "https://victor_cursos.es";
// const ip = "22232";

/*Si imprimimos en la consola los valores de las siguientes variables no habrá ningun problema, a menos que descomentemos la nueva asignación la constante (comentada en este momento), de hacerlo la consola marcará un error ya que los valores de las constantes no pueden definirse nuevamente.*/ 
console.log (web, ip);