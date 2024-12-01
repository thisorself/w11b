<!DOCTYPE html>
<html lang="uk">

<head>
    <title>Каталог рієлтора</title>
</head>

<body>
    <?php
    include 'config.php';

    $estate_id = 3;
    $estate_deal_type = 'Продаж';

    $query = "SELECT id, address, property_type, deal_type, area, description, 
                     owner_fullname, owner_telephone, owner_email, price 
              FROM real_estates WHERE id=? AND deal_type=?";
    $statement = $mysqli->prepare($query);

    $statement->bind_param('is', $estate_id, $estate_deal_type);
    $statement->execute();
    $statement->bind_result($id, $address, $property_type, $deal_type, $area, $description,
                            $owner_fullname, $owner_telephone, $owner_email, $price);

    print '<table border="1">';
    while ($statement->fetch()) {
        print '<tr>';
        print '<td>' . $id . '</td>';
        print '<td>' . $address . '</td>';
        print '<td>' . $property_type . '</td>';
        print '<td>' . $deal_type . '</td>';
        print '<td>' . $area . '</td>';
        print '<td>' . $description . '</td>';
        print '<td>' . $owner_fullname . '</td>';
        print '<td>' . $owner_telephone . '</td>';
        print '<td>' . $owner_email . '</td>';
        print '<td>' . $price . '</td>';
        print '</tr>';
    }
    print '</table>';

    $statement->close();
    ?>
</body>

</html>