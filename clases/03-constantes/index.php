<?php
//definir constantes: define(nombre_constante, valor_constante)
define('pimine', '3.1416');
$area = 0.0;
$radio = 10;
 
$area=(pimine*($radio*$radio));
echo '<h1>'.$area.'</h1>';

//constantes predefinidas
echo __LINE__;
echo __FILE__;

?>
