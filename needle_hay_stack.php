<?php
    function strpos_arr($haystack, $needle) {
        if(!is_array($needle)) $needle = array($needle);
        foreach($needle as $what) {
            if(($pos = strpos($haystack, $what))!==false) return $pos;
        }
        return false;
    }

    $apa = "blue";
    $data = ["red", "blue", "yellow", "black", "grey"];
    $cetak = strpos_arr($data, $apa);
    print_r($cetak);
?>