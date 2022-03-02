<?php
    echo '
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Задание 9-PHP</title>
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
    echo 'Заказ оформлен.<br>Вы заполнили следующие данные: <br>';
    //это учебный пример
    if (isset($_POST['Name'])) {
        $resInsert=$mysqli->query("INSERT INTO Zakaz (Name, Fam, Email, Tovar, Col) VALUES ('".$_POST['Name']."', '".$_POST['Fam']."', '".$_POST['Email']."', '".$_POST['Tovar']."', '".$_POST['Col']."');");
        echo '<pre>';
        print_r($_POST);
        echo '</pre>';
        echo '<br>';
    }
    echo 'Чтобы оформить еще один заказ - <a href="db_zakaz.php">ЖМИ!</a>';
    
    echo '</body></html>';
?>