<?php
    #Importamos la clase que contiene todas las funciones necesarias:
    use dss\ejercicios\Fibonacci;
    #Incluimos esta línea para utilizar las funciones de la clase:
    require_once("7.php");
    #Empleamos la clase:
    $fib = new Fibonacci();
    $fib->imprimirSecuencia();
?>