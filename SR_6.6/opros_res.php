<?php
	
    $sum = 0;
    $answer1 = $_POST['a1'];
    if ($answer1 == 'Путин') {
        $sum++;
    }
    $corans1 = 'Путин';
    $answer2 = $_POST['a2'];
    if ($answer2 == '365') {
        $sum++;
    }
    $corans2 = '365';

    echo "Кто является президентом России?<br>Вы ответили - $answer1 , правильно - $corans1.<br><br>";
    echo "Сколько дней в високосном году?<br>Вы ответили - $answer2 , правильно - $corans2.<br><br>";
    echo "Вы набрали - $sum из 2 баллов";

?>
