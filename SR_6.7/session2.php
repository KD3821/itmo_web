<?php

    session_start();
    echo "Здравствуйте, ".$_SESSION['username']."!<br>";
    echo "Поздравляем Вас с приобретением ".$_SESSION['new_prop'].".<br>";
    echo "<a href='session3.php'>Следующая страница</a><br>";
    echo "Данные сессии:<br>";
    print_r($_SESSION);
    echo "<br> финито!";

?>