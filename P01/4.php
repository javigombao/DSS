<?php
    function fibo ($n)
    {
        switch ($n)
        {
            case $n<0:
                return null;
                break;
            case ($n == 0 ) || ($n == 1 ):
                return $n;
                break;
            default:
                $res = fibo($n - 1) + fibo($n - 2);
                return $res;
        }
    }
    echo fibo(10);
?>