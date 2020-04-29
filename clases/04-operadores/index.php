<?php
//Operadore -> es un caracter que nos permite modificar el contenido de una o más variables

//Declaración de variables
$num1 = 55;
$num2 = 33;

//Aritmeticos
$resul = ($num1+$num2);
echo 'suma: '.$resul.'<br>';
echo 'resta: '.($num1-$num2).'<br>';
echo 'multiplicación: '.($num1*$num2).'<br>';
echo 'división: '.($num1/$num2).'<br>';
echo 'módulo: '.($num1%$num2).'<br>';

//Incremento y Decremento
$stock = 1000;
//++$var, $var++, --$var, $var--
++$stock;
echo '<h1>'.$stock.'</h1>';
$stock--;
echo '<h1>'.$stock.'</h1>';

//Asignación
$edad = 60;
echo $edad.'<br>';
echo ($edad+=5);
?>
