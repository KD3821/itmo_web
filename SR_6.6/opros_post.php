<?php

    echo ('
        <form action="opros_res.php" name="opros" method="post">
            <fieldset>
                <p><label for="q1">Вопрос 1. Кто является президентом России?</label></p>
                <p><input type="radio" id="q1" name="a1" value="Буш">Буш</p>
                <p><input type="radio" id="q1" name="a1" value="Путин">Путин</p>
                <p><input type="radio" id="q1" name="a1" value="Медведев">Медведев</p>
            </fieldset>
                <br>
            <fieldset>
                <p><label for="q2">Вопрос 2. Сколько дней в високосном году?</label></p>
                <p><input type="radio" id="q2" name="a2" value="365">365</p>
                <p><input type="radio" id="q2" name="a2" value="366">366</p>
                <p><input type="radio" id="q2" name="a2" value="368">368</p>
            </fieldset>
            <p><input type="submit"></p>
        </form>
    ')
?>
