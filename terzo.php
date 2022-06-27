<?php

$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Marco Amico',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Marco Amico',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Marco Amico',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Marco Amico',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Marco Amico',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Marco Amico',
            'text' => 'Testo post 6'
        ]
    ],
];


// $arrays = [
//             [
//                 'test1',
//                 'test2',

//             ],
//             [
//                 'test3',
//                 'test4'
//             ],
//             [
//                 'test3',
//                 'test4'
//             ],
//         ];






?>
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

        foreach($posts as $value) {
             echo implode(',', $value) . '<br>';
        }

        


    ?>
    
    
    



</body>
</html>