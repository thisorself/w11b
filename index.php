<!DOCTYPE html>
<html lang="uk">

<head>
    <title>Каталог рієлтора</title>
</head>

<body>
    <?php
    include 'config.php';

    $results = $mysqli->query("SELECT id, address, property_type, deal_type, area, description, 
                                             owner_fullname, owner_telephone, owner_email, price 
                                      FROM real_estates");

    print '<table border="1">';
    while ($row = $results->fetch_object()) {
        print '<tr>';
        print '<td>' . $row->id . '</td>';
        print '<td>' . $row->address . '</td>';
        print '<td>' . $row->property_type . '</td>';
        print '<td>' . $row->deal_type . '</td>';
        print '<td>' . $row->area . '</td>';
        print '<td>' . $row->description . '</td>';
        print '<td>' . $row->owner_fullname . '</td>';
        print '<td>' . $row->owner_telephone . '</td>';
        print '<td>' . $row->owner_email . '</td>';
        print '<td>' . $row->price . '</td>';
        print '</tr>';
    }
    print '</table';

    $results->free();
    $mysqli->close();
    ?>
</body>

</html>