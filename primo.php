<?php

$arr_partite = [
    // partita 1
    [
        [
            'squadra'  => 'Milan',
            'di_casa'   => true,
            'punteggio' => 55
        ],
        [
            'squadra'  => 'Juve',
            'di_casa'   => false,
            'punteggio' => 60
        ],
    ],

    [
        [
            'squadra'  => 'Pesaro',
            'di_casa'   => true,
            'punteggio' => 74
        ],
        [
            'squadra'  => 'Venezia',
            'di_casa'   => false,
            'punteggio' => 82
        ],
    ],

    [
        [
            'squadra'  => 'Palermo',
            'di_casa'   => true,
            'punteggio' => 80
        ],
        [
            'squadra'  => 'Akragas',
            'di_casa'   => false,
            'punteggio' => 60
        ],
    ],
    [
        [
            'squadra'  => 'Catanzaro',
            'di_casa'   => true,
            'punteggio' => 90
        ],
        [
            'squadra'  => 'Trieste',
            'di_casa'   => false,
            'punteggio' => 86
        ],
    ],
]; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 

    $arr_length = count($arr_partite);
    for ($_i=0; $_i < $arr_length ; $_i++) { 
        $partita = $arr_partite[$_i];
        echo "<div>{$partita[0]['squadra']} - {$partita[1]['squadra']} | {$partita[0]['punteggio']} - {$partita[1]['punteggio']}</dic>";
    } ?>
</body>
</html>