<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
// El alcance de la variable se refiere al lugar
// donde la variable esta habilitada

// Por Ejemplo las variables GLOBALES, estaran habilitadas
// en DENTRO Y FUERA de las funciones
// Por lo tanto se dice que su alcance es GLOBAL

$variable_simple = "guitarra"; //el alcance de esta variable es global

// Por al definicion anterior, la funcion de cambiar_valor
// no afectara a $variable_simple
// por que esta variable solo esta habilitada FUERA de las funciones
// La razon por la que esta habilitada FUERA de las funciones
// es porque se le ha definido a fuera de las funciones
cambiar_valor();

function cambiar_valor() {
  //el alcance de esta variable es interna
  $variable_simple = "soy una cadena";
}

echo $variable_simple;

// Para el caso que se desee cambiar si o si el valor de una variable
// pue se la debe defenidir como global de la siguiente manera

$variable_simple2 = "charango";

cambiar_valor2();

function cambiar_valor2() {
  global $variable_simple2; //con global, ya podemos alterar la variable global $variable_simple2
  $variable_simple2 = "cadena modificada";
}

echo $variable_simple2;
?>
</body>
</html>