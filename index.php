<!DOCTYPE html>
<html lang="uk">

<head>
    <title>Каталог рієлтора</title>
</head>

<body>
    <?php
    include 'config.php';

    $estate_id = 4;
    $estate_address = '"' . $mysqli->real_escape_string("Україна, Одеса, вул. Платанова 79, кв. 14") . '"';
    $estate_property_type = '"' . $mysqli->real_escape_string("Квартира") . '"';
    $estate_deal_type = '"' . $mysqli->real_escape_string("Оренда") . '"';
    $estate_area = 30;
    $estate_description = '"' . $mysqli->real_escape_string("Оренда квартири в Хаджибійському районі. Туалет та ванна загальна, кухня невелика, два односпальні ліжка, є бойлер.") . '"';
    $estate_owner_fullname = '"' . $mysqli->real_escape_string("Степаненко Василь Андрійович") . '"';
    $estate_owner_telephone = '"' . $mysqli->real_escape_string("+380589273485") . '"';
    $estate_owner_email = '"' . $mysqli->real_escape_string("odesavanlav@gmail.com") . '"';
    $estate_price = 5000;

    $insert_row = $mysqli->query("INSERT INTO real_estates (id, address, property_type, deal_type, area, description, owner_fullname, owner_telephone, owner_email, price) 
                                         VALUES ($estate_id, $estate_address, $estate_property_type, $estate_deal_type, $estate_area, $estate_description,
                                                 $estate_owner_fullname, $estate_owner_telephone, $estate_owner_email, $estate_price)");

    if ($insert_row) {
        print 'Запит успішно виконаний! ID останнього вставленого запису: ' . $mysqli->insert_id . '<br />';
    } else {
        die('Помилка: (' . $mysqli->errno . ') ' . $mysqli->error);
    }
    ?>
</body>

</html>