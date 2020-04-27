<?php

echo (5 + 3)."<br>"; //adición
echo (5 - 3)."<br>"; //sustracción
echo (5 * 3)."<br>"; //multiplicación
echo (5 / 3)."<br>"; //división
echo (5 % 3)."<br>"; //módulo
echo (5 ** 3)."<br>"; //exponenciación

//asignación
$a = ($b = 4) + 5; // ahora $a es igual a 9 y $b se ha establecido en 4.

echo "<h3>Postincremento</h3>";
$b = 5;
echo "Debe ser 5: " . $b++ . "<br />\n";
echo "Debe ser 6: " . $b . "<br />\n";

echo "<h3>Preincremento</h3>";
$c = 5;
echo "Debe ser 6: " . ++$c . "<br />\n";
echo "Debe ser 6: " . $c . "<br />\n";

echo "<h3>Postdecremento</h3>";
$a = 5;
echo "Debe ser 5: " . $a-- . "<br />\n";
echo "Debe ser 4: " . $a . "<br />\n";

echo "<h3>Predecremento</h3>";
$a = 5;
echo "Debe ser 4: " . --$a . "<br />\n";
echo "Debe ser 4: " . $a . "<br />\n";

?>
