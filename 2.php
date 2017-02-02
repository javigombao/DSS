<?php
    function invertirCadena($string) {
    $length = strlen($string) - 1;
    $reverse = "";
    for ($i = $length; $i >= 0; $i--) {
        $reverse .= $string{$i};
    }
    return $reverse;
    }
    //Función que nos permite invertir una cadena:
    echo strrev("Hola mundo2");
    echo "\n";
    //Función creada para invertir una cadena
    echo invertirCadena("Hola mundo");
?>