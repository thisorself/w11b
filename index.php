<!DOCTYPE html>
<html lang="uk">

<head>
    <title>Каталог рієлтора</title>
</head>

<body>
<!DOCTYPE html>
<html lang="uk">

<head>
    <title>Каталог рієлтора</title>
</head>

<body>
    <?php
    include 'config.php';

    $results = $mysqli->query("DELETE FROM real_estates WHERE added_timestamp >= (NOW() - INTERVAL 30 MINUTE)");

    if ($results) {
        print 'Запит успішно виконаний! Видалено одноденні записи';
    } else {
        print 'Помилка: (' . $mysqli->errno . ') ' . $mysqli->error;
    }
    ?>
</body>

</html>