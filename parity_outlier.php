<?php
    function find($integers) {
        $odds = [];
        $evens = [];
        foreach ($integers as $item) {
        if ($item % 2) array_push($odds, $item);
        else array_push($evens, $item);
        }
        return count($evens) === 1 ? $evens[0] : $odds[0];
    }

    $data = [2, 4, 0, 100, 4, 11, 2602, 36];
    echo find($data)
?>