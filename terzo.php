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

        $keys = array_keys($posts)
        for ($i=0; $i < count($posts); $i++);{ 
            $posts = $posts[$keys[$i]];
            echo "<div> {$keys[$i]}</div>";
            for ($j=0; $j < count($posts); $j++){
                $page = $post[$j];
                echo "<div> {$page}</div>";








            }
        }


    ?>
    
    
    



</body>
</html>