<?php

// Datos recibidos por método GET
$numero = $_GET['numero'];
$id = $_GET['id'];
$nombre = $_GET['nombre'];

// Ruta del archivo de texto con el nombre y el id (cambiar según la ubicación de la carpeta)
$archivo = 'carpeta/'.$nombre.'_'.$id.'.txt';

// Si el archivo no existe, se crea con el número 1
if (!file_exists($archivo)) {
    $contador = 1;
    file_put_contents($archivo, $contador);
} else {
    // Si el archivo existe, se lee el número y se le suma 1
    $contador = file_get_contents($archivo);
    $contador++;
    file_put_contents($archivo, $contador);
}

// Se escribe el número actual en el archivo
file_put_contents($archivo, $numero);

// Se muestra el número actual y el contador
echo "$contador;

?>
