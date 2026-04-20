<?php
// 1
echo "<h3>1. Открытие файла</h3>";
try {
    $file = fopen("file.txt", "r");
} catch (Exception $ex) {
    echo "Ошибка: " . $ex->getMessage() . "<br><br>";
}
// 2
echo "<h3>2. Деление на ноль</h3>";
try {
    $a = 10;
    $b = 0;
    if ($b == 0) throw new Exception("Деление на ноль");
    echo $a / $b;
} catch (Exception $ex) {
    echo "Ошибка: " . $ex->getMessage() . "<br>";
    file_put_contents("log.txt", date("Y-m-d H:i:s") . " - " . $ex->getMessage() . "\n", FILE_APPEND);
    echo "Записано в log.txt<br><br>";
}

// 3
echo "<h3>3. Несуществующий ключ</h3>";
try {
    $countries = ["Spain" => "Madrid", "Russia" => "Moscow"];
    echo $countries["Germany"];
} catch (Exception $ex) {
    echo "Ошибка: " . $ex->getMessage() . "<br><br>";
} catch (Error $ex) {
    echo "Ошибка: " . $ex->getMessage() . "<br><br>";
}
echo "<h2>Часть 2</h2>";
// 1
echo "<h3>1. Timestamp 15.03.2025 10:25:00</h3>";
echo mktime(10, 25, 0, 3, 15, 2025) . "<br><br>";

// 2
echo "<h3>2. Разница с 02.10.1990</h3>";
echo (time() - mktime(8, 5, 59, 10, 2, 1990)) . " секунд<br><br>";

// 3
echo "<h3>3. Текущая дата и время</h3>";
echo date("Y.m.d H:i:s") . "<br><br>";

// 4
echo "<h3>4. 1 сентября текущего года</h3>";
echo date("Y.m.d", mktime(0,0,0,9,1)) . "<br><br>";

// 5
echo "<h3>5. День недели 2 февраля 2000</h3>";
$week = ["Воскресенье","Понедельник","Вторник","Среда","Четверг","Пятница","Суббота"];
echo $week[date("w", mktime(0,0,0,2,2,2000))] . "<br><br>";
// 6
echo "<h3>6. Текущий день недели</h3>";
echo $week[date("w")] . "<br><br>";
// 7
echo "<h3>7. Сравнение дат</h3>";
?>
<form method="post">
    Дата 1: <input type="text" name="date1" value="2025-12-25"><br><br>
    Дата 2: <input type="text" name="date2" value="2026-01-10"><br><br>
    <input type="submit" value="Сравнить">
</form>
<?php
if ($_POST) {
    $d1 = strtotime($_POST["date1"]);
    $d2 = strtotime($_POST["date2"]);
    if ($d1 > $d2) echo "Первая дата больше";
    elseif ($d2 > $d1) echo "Вторая дата больше";
    else echo "Даты равны";
}

echo "<br><br>";
// 8
echo "<h3>8. Изменение формата даты</h3>";
echo date("d-m-Y", strtotime("2025-12-25")) . "<br><br>";

// 9
echo "<h3>9. Изменение даты</h3>";
$date = date_create("2000-02-03");
date_modify($date, "+2 days +1 month +1 year");
echo date_format($date, "d.m.Y") . "<br><br>";

// 10
echo "<h3>10. Дней до Нового года</h3>";
$ny = mktime(0,0,0,1,1,date("Y")+1);
echo ceil(($ny - time()) / 86400) . " дней";
?>
