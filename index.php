<!DOCTYPE html>
<html lang="uk">

<head>
    <title>Каталог рієлтора</title>
</head>

<body>
    <?php
    include 'config.php';

    $estate_id1 = 6;
    $estate_address1 = '"' . $mysqli->real_escape_string("123") . '"';
    $estate_property_type1 = $mysqli->real_escape_string("Будинок");
    $estate_deal_type1 = $mysqli->real_escape_string("Продаж");
    $estate_area1 = 1;
    $estate_description1 = '"' . $mysqli->real_escape_string("456") . '"';
    $estate_owner_fullname1 = '"' . $mysqli->real_escape_string("789") . '"';
    $estate_owner_telephone1 = $mysqli->real_escape_string("001");
    $estate_owner_email1 = "exampl1";
    $estate_price1 = 125;

    $estate_id2 = 7;
    $estate_address2 = '"' . $mysqli->real_escape_string("456") . '"';
    $estate_property_type2 = $mysqli->real_escape_string("Квартира");
    $estate_deal_type2 = $mysqli->real_escape_string("Оренда");
    $estate_area2 = 2;
    $estate_description2 = '"' . $mysqli->real_escape_string("789") . '"';
    $estate_owner_fullname2 = '"' . $mysqli->real_escape_string("002") . '"';
    $estate_owner_telephone2 = $mysqli->real_escape_string("125");
    $estate_owner_email2 = "exampl2";
    $estate_price2 = 625;

    $estate_id3 = 8;
    $estate_address3 = '"' . $mysqli->real_escape_string("789") . '"';
    $estate_property_type3 = $mysqli->real_escape_string("Будинок");
    $estate_deal_type3 = $mysqli->real_escape_string("Оренда");
    $estate_area3 = 1;
    $estate_description3 = '"' . $mysqli->real_escape_string("003") . '"';
    $estate_owner_fullname3 = '"' . $mysqli->real_escape_string("625") . '"';
    $estate_owner_telephone3 = $mysqli->real_escape_string("551");
    $estate_owner_email3 = "exampl3";
    $estate_price3 = 3125;

    $insert = $mysqli->query("INSERT INTO real_estates (id, address, property_type, deal_type, area, description, owner_fullname, owner_telephone, owner_email, price) 
                              VALUES ($estate_id1, '$estate_address1', '$estate_property_type1', '$estate_deal_type1', $estate_area1, '$estate_description1',
                                      '$estate_owner_fullname1', '$estate_owner_telephone1', '$estate_owner_email1', $estate_price1),
                                      ($estate_id2, '$estate_address2', '$estate_property_type2', '$estate_deal_type2', $estate_area2, '$estate_description2',
                                         '$estate_owner_fullname2', '$estate_owner_telephone2', '$estate_owner_email2', $estate_price2),
                                         ($estate_id3, '$estate_address3', '$estate_property_type3', '$estate_deal_type3', $estate_area3, '$estate_description3',
                                         '$estate_owner_fullname3', '$estate_owner_telephone3', '$estate_owner_email3', $estate_price3)");

    if ($insert) {
        print 'Запит успішно виконаний! ID останнього вставленого запису: ' . $mysqli->affected_rows . '<br />';
    } else {
        die('Помилка: (' . $mysqli->errno . ') ' . $mysqli->error);
    }
    ?>
</body>

</html>