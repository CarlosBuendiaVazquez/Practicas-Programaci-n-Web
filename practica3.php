        </title>
    </head>

    <body>
<?php
$a = 20;
$b = 7;
echo "La variable a=$a y la variable b=$b <br><br>";
echo "Operadores aritméticos <br><br>";

echo "Esto es una suma $a + $b = " .($a + $b). "<br>";
echo "Esto es una resta $a - $b = " . ($a - $b) . "<br>";
echo "Esto es una multiplicación $a * $b = " . ($a * $b) . "<br>";
echo "Esto es una división $a / $b = " . ($a / $b) . "<br>";
echo "Esto es un módulo (resto de la división) $a % $b = " . ($a % $b) . "<br>";

$a++;
echo "Esto es un incremento (++), ahora a es igual a $a <br>";

$b--;
echo "Esto es un decremento (--), ahora b es igual a $b <br><br>";

$a = 20;
$b = 7;
echo " Operadores condicionales <br><br>";
echo "Comparación de igualdad ($a == $b): " . ($a == $b ? "verdadero" : "falso") . "<br>";
echo "Comparación de identidad ($a === $b): " . ($a === $b ? "verdadero" : "falso") . "<br>";
echo "Comparación de diferencia ($a <> $b): " . ($a <> $b ? "verdadero" : "falso") . "<br>";
echo "Comparación de diferencia ($a != $b): " . ($a != $b ? "verdadero" : "falso") . "<br>";
echo "Comparación de no identidad ($a !== $b): " . ($a !== $b ? "verdadero" : "falso") . "<br>";
echo "Comparación mayor que ($a > $b): " . ($a > $b ? "verdadero" : "falso") . "<br>";
echo "Comparación menor que ($a < $b): " . ($a < $b ? "verdadero" : "falso") . "<br>";
echo "Comparación mayor o igual que ($a >= $b): " . ($a >= $b ? "verdadero" : "falso") . "<br>";
echo "Comparación menor o igual que ($a <= $b): " . ($a <= $b ? "verdadero" : "falso") . "<br> <br>";

echo " Operadores de asignación <br>";
echo " En estos operadores agregamos una variable c, a la cual le asignamos el valor a<br><br>";
$c = $a;
echo "Asignación, ahora c es igual a $c <br>";

$c += $b;
echo "Esto es una suma y asignación, ahora c = $c (resultado de $a + $b) <br>";

$c -= $b;
echo "Esto es una resta y asignación, ahora c = $c (resultado de $a - $b) <br>";

$c *= $b;
echo "Esto es una multiplicación y asignación, ahora c = $c (resultado de $a * $b) <br>";

$c /= $b;
echo "Esto es una división y asignación, ahora c = $c (resultado de $a / $b) <br>";

$c %= $b;
echo "Esto es un módulo y asignación, ahora c = $c (resto de $a % $b) <br> <br>";

echo "  Operadores lógicos <br>";
echo "  Se agrega una nueva variabla d para asignar el posible resultado <br><br>";
$d = ($a > 10) && ($b < 10);
echo "Esto es una operación lógica AND: (($a > 10) && ($b < 10)) es " . ($d ? "verdadero" : "falso") . "<br>";

$d = ($a > 10) || ($b > 10);
echo "Esto es una operación lógica OR: (($a > 10) || ($b > 10)) es " . ($d ? "verdadero" : "falso") . "<br>";

$d = !($a == $b);
echo "Esto es una operación lógica NOT: !($a == $b) es " . ($d ? "verdadero" : "falso") . "<br><br>";

echo " Operadores de cadena <br>"; 
echo "Tenemos la variable mensaje y le asignamos el valor Hola para luego juntarlo con la palabra Mundo<br>";
$mensaje = "Hola";
echo "Concatenación de cadena con (.): " . $mensaje . " Mundo<br><br>";
echo "Aca ya teniendo la variable anterior le asignaremos ahora la palabra Mundo<br>";
$mensaje .= " Mundo";
echo "Asignación con concatenación (.=): " . $mensaje . "<br>";
?>
    </body>
</html>
