<?php
    #Incluimos el namespace correspondiente:
    namespace dss\ejercicios;

    class Fibonacci {
        private $fibarray; //array
        //Se calcularan los 10 primeros numeros de la secuencia
        function __construct() {
            $this->fibarray = array(0,1);
            $this->fibarray[2]=$this->fibarray[0] + $this->fibarray[1];
            for ($i=2; $i<10; $i++) {
                $this->fibarray[$i] = $this->fibarray[$i-1] + $this->fibarray[$i-2];
            }
        }

        public function imprimirSecuencia() {
            echo "\n";
            echo implode(",", $this->fibarray);
            echo "\n";
        }

        public function fibonacci($n) {
            if ($n<0) {
                return null;
            } else {
                $encontrado = false;
                for ($i=0; $i<count($this->fibarray) && !$encontrado; $i++) {
                    if ($i==$n-1) {
                        return $this->fibarray[$i];
                        $encontrado=true;
                    }
                }
                if (!$encontrado)
                {
                    for ($i=10; $i<$n; $i++) {
                        $this->fibarray[$i] = $this->fibarray[$i-1] + $this->fibarray[$i-2];
                    }
                    return $this->fibarray[$n-1];
                }
            }
        }
    }
?>