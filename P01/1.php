<?php
    function divide($num1, $num2) {
        if ($num2==0) {
            return null;
        }
        else {
            return $num1 / $num2;
        }
    }
    echo divide(15, 8);
?>