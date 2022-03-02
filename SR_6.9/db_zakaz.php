<?php
    echo '
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Задание 9 PHP</title>
    </head>
    <body>';
    $mysqli = new mysqli("localhost", "myuser", "Pass100", "NewDatabase");

    if($mysqli===false) {
        die("ERROR: Could not connect ".$mysqli->connect_error);
    }

    $res=$mysqli->query("SELECT * FROM Zakaz;");

    echo "<table bordercolor='red' border='1' width='50%' bgcolor='lightgrey'>";
    echo "<tr align='center'>
    <td>№ заказа</td>
    <td>Имя покупателя</td>
    <td>Фамилия покупателя</td>
    <td>Адрес эл.почты</td>
    <td>Товар</td>
    <td>Кол-ва</td>
    </tr>";
    for ($row_no=0; $row_no < $res->num_rows; $row_no++) {
        $res->data_seek($row_no);
        $row = $res->fetch_assoc();
        echo "<tr'>
        <td>".$row['id']."</td>
        <td>".$row['Name']."</td>
        <td>".$row['Fam']."</td>
        <td>".$row['Email']."</td>
        <td>".$row['Tovar']."</td>
        <td>".$row['Col']."</td>
        </tr>";
    }
    echo '</table><br><br>';

    echo '<p>Оформление заказа:</p>
    <form action="db_zakaz_res.php" method="POST">
        <p>Имя: <input type="text" name="Name"></p>
        <p>Фамилия: <input type="text" name="Fam"></p>
        <p>Эл.почта: <input type="text" name="Email"></p>
        <p>Товар:  
        <select name="Tovar" id="tovar">
        <option value="XBOX 360">Xbox 360</option>
        <option value="PS5">PS5</option>
        <option value="PSP">PSP</option>
        <option value="MiBox">MiBox</option>
        </select></p>
        <p>Кол-во: <input type="int" name="Col"></p>
        <button type="submit">Оформить заказ</button>
    </form><br><br>
    </body></html>';
?>