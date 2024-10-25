<?php
try {
    $servidor = 'localhost';
    $usuario = 'root';
    $password = 'root';
    $bd = 'portafoli';

    $coneccion = mysqli_connect($servidor, $usuario, $password, $bd);
    echo('coneccion a la base exitosa');

} catch (\Throwable $th) {
    var_dump($th);
}