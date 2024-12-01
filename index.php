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

    $results = $mysqli->query("UPDATE real_estates SET address='WAS REDACTED' WHERE id=6");
    $results = $mysqli->query("DELETE FROM real_estates WHERE id=8");

    if ($results) {
        print 'Запит успішно виконаний! Запис оновлено/видалено';
    } else {
        print 'Помилка: (' . $mysqli->errno . ') ' . $mysqli->error;
    }
    ?>
</body>

</html>