<?php

    function proximoMes($sum) {
        $now   = new DateTime;
        echo "Fecha actual: ". $now->format( 'd/m/Y' );
        $clone = clone $now; 
        $clone->modify( '+'. $sum . ' month' );
        echo "\nFecha resultante: ".$clone->format( 'd/m/Y' );
    }

    proximoMes(1);
?>