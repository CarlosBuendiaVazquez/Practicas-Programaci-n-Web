<html>
<head>
    <title>Práctica 6</title>
</head>
<body>

<?php
require("config6.php");

echo "<h1>Práctica: Conexión a mi servidor de datos MYSQL </h1><br><br>";

if ($conexión = mysqli_connect($servidor, $usuario, $password, $bd)) {
    echo "Te has conectado con éxito a tu servidor: <b>$servidor</b><br>";
    echo "Y a tu base de datos: <b>$bd</b>";
} else {
    echo "Error conectando con MYSQL<br>" . mysqli_connect_error();
}

mysqli_close($conexión);
?>

</body>
</html>
