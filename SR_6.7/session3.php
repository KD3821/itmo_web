<?php

    session_start();
    unset($_SESSION['username'], $_SESSION['new_prop']);
    session_destroy();
    echo "Данные сессии:<br>";
    print_r($_SESSION);
    echo "<br>финито!";

?>