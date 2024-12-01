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

    $set_address = 'WAS REDACTED TWISE';
    $estate_id = 6;

    $query = "UPDATE real_estates SET address=? WHERE id=?";
    $statement = $mysqli->prepare($query);
    $statement->bind_param('si', $set_address, $estate_id);

    if ($statement->execute()) {
        print 'Запит успішно виконаний! Запис оновлено';
    } else {
        print 'Помилка: (' . $mysqli->errno . ') ' . $mysqli->error;
    }
    ?>
</body>

</html>