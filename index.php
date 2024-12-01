<!DOCTYPE html>
<html lang="uk">

<head>
    <title>Каталог рієлтора</title>
</head>

<body>
    <?php
    include 'config.php';

    $description = $mysqli->query("SELECT description FROM real_estates WHERE id = 2")->fetch_object()->description;

    print $description;

    $mysqli->close();
    ?>
</body>

</html>