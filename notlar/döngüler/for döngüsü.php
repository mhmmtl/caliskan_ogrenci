<?php



    for ($i = 1; $i <= 10; $i++){
        echo $i . '<br>';
    }

    for($i = 10; $i > 0; $i--){
        echo $i . '<br>';
    }

    $arr = [
        'sarısite',
        'mercedes',
        'bmw',
        'özbay otokurtarıcı'
    ];

    for ($i = 0; $i <= (count($arr) - 1); $i++){
        echo $arr[$i] . '<br>';
    }
    
    for ($i = (count($arr) - 1); $i >= 0; $i--){
        echo $arr[$i] . '<br>';
    }

    for ($i = 1; $i <= 10; $i++)
        echo $i . '<br>';

    for ($i = 1; $i <= 10; $i++):
        if ($i == 3) continue;
        echo $i . '<br>';
        if ($i == 6) break;
    endfor;

?>