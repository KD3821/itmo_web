<?php
    // первый скрипт не работает так как нет доступа к области видимости функции bar() без вызова функции foo()
    function foo() {   
        function bar() {
            echo 'Hello world';
        }
    } 
    bar();

    

    function foo() {
        function bar() {
            echo 'Hello world ';
        }
    } 
    foo();
    bar();

?>