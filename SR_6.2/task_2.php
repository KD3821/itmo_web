<?php
    $a = 4; // инициализируем переменную

    switch($a){
        case 1: 
        case 2: echo 'Hello world'; break;
        case 3: echo 'Hi world'; break;
        default: echo 'Goodbye world';
    }
?>



<?php // тоже самое, но с использованием if(...){...}else{...} конструкции
    echo '<br>';
    if($a==1||$a==2) {
        echo 'Hello world';
    } else if ($a==3) {
        echo 'Hi world';
    } else {
        echo 'Goodbye world';
    }
?>