<?php

    session_start();
    $_SESSION['username'] = "test";
    $_SESSION['new_prop'] = "my_property";
    echo "<a href='session2.php'>Другая страница</a><br>";
    echo "Данные сессии:<br>";
    print_r($_SESSION);
    echo "<br> финито!";

?>