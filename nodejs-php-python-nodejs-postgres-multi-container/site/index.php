<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP Example</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <h1>Apparel prices:</h1>
    <ul>
    <?php 
        $json = file_get_contents('http://prices');
        foreach(json_decode($json) as $price_item) {
            echo "<li>$price_item->name: $$price_item->price</li>";
        }
    ?>
    </ul>
</body>
</html>