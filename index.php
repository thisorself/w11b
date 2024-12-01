<!DOCTYPE html>
<html lang="uk">

<head>
    <title>Каталог рієлтора</title>
</head>

<body>
    <?php
    include 'config.php';

    $estate_id = 5;
    $estate_address = '"' . $mysqli->real_escape_string("Україна, Вінниця, площа Костянтина Моглика 24, кв. 75") . '"';
    $estate_property_type = $mysqli->real_escape_string("Квартира");
    $estate_deal_type = $mysqli->real_escape_string("Продаж");
    $estate_area = 45;
    $estate_description = '"' . $mysqli->real_escape_string("Продається квартира. Середня кухня, маленька зала, окремо туалет та ванна кімната, є кондиціонер і бойлер. Одне одномісне ліжко, дві шафи.") . '"';
    $estate_owner_fullname = '"' . $mysqli->real_escape_string("Мрійко Марина Ігорівна") . '"';
    $estate_owner_telephone = '"' . $mysqli->real_escape_string("+380358746582") . '"';
    $estate_owner_email = null;
    $estate_price = 5000000;

    $query = "INSERT INTO real_estates (id, address, property_type, deal_type, area, description, owner_fullname, owner_telephone, owner_email, price) 
                     VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $statement = $mysqli->prepare($query);
    $statement->bind_param('isssissssi', $estate_id, $estate_address, $estate_property_type, $estate_deal_type, $estate_area, $estate_description,
                                         $estate_owner_fullname, $estate_owner_telephone, $estate_owner_email, $estate_price);

    if ($statement->execute()) {
        print 'Запит успішно виконаний! ID останнього вставленого запису: ' . $statement->insert_id . '<br />';
    } else {
        die('Помилка: (' . $mysqli->errno . ') ' . $mysqli->error);
    }
    ?>
</body>

</html>