<!DOCTYPE html>
<html lang="uk">

<head>
    <title>Каталог рієлтора</title>
</head>

<body>
    <?php
    include 'config.php';

    $results = $mysqli->query("SELECT COUNT(*) FROM real_estates");
    $rows_count = $results->fetch_row();

    print $rows_count[0];

    $mysqli->close();
    ?>
</body>

</html>