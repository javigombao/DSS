<?php
    function ordenacionBurbuja($arr) {
        for ($i=1; $i<count($arr); $i++)
        {
            for ($j=0; $j<count($arr)-1; $j++)
            {
                if ($arr[$j] > $arr[$j+1]) {
                    $temp = $arr[$j];
                    $arr[$j] = $arr[$j+1];
                    $arr[$j+1] = $temp;
                }
            }
        }
        return $arr;
    }
    
    $arr = array(8,4,1,9,5,7,3,2,6,0);
    $data = ordenacionBurbuja($arr);
    print_r($data);
    #var_dump($data);
?>