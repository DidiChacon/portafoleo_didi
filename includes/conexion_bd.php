<?php
try {
    $servidor = 'localhost';
    $usuario = 'root';
    $password = '1049393188';
    $bd = 'portafoleo';

    $coneccion = mysqli_connect($servidor, $usuario, $password, $bd);
    echo ('coneccion exitosa');
} catch (\Throwable $th) {
    var_dump($th);
}