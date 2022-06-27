<?php

    $random_number_array = range(0, 9999);
    shuffle($random_number_array );
    $random_number_array = array_slice($random_number_array ,0,14);


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

        print_r($random_number_array);

    ?>



</body>
</html>