<?php

    function hello($tmp) {
        
        global $tmp;
        $tmp = 'Hello World!';
        
        
    }

    $tmp = 123;
    var_dump($tmp);
    hello($tmp);
    echo $tmp;
    var_dump($tmp);
?>