<?php
//Sierra Muñoz Margarita Del Carmen
echo '<h2>Participación 27/04/2020</h2>';
echo '<h3>Ejercicio 1: Calcular el valor IMC</h3>';
$peso = 56;
$altura = 1.67;
$IMC = $peso/($altura*$altura);
echo 'Peso: '.$peso.'<br>'
     .'Altura: '.$altura.'<br>'
     .'Su IMC es: '.$IMC.'<br>';

echo '<h3>Ejercicio 2: Convertir grados °C a °F</h3>';
$gradC = 24;
$gradF = ($gradC * 1.8)+ 32;
echo $gradC.'°C = '
     .$gradF.'°F <br>';

echo '<h3>Ejercicio 3: Calcular el área de un circulo implementando constantes</h3>';
define('PiM', '3.1416');
$r = 8;
$areaCir = PiM * ($r**2);
echo 'El radio del circulo es: '.$r
     .'<br>El área es: '.$areaCir;
?>

