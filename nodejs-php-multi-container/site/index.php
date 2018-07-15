<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP Example</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <h1>Team Names:</h1>
    <ul>
    <?php 
        $json = file_get_contents('http://players');
        foreach(json_decode($json)->players as $player) {
            echo "<li>$player</li>";
        }
    ?>
    </ul>
</body>
</html>