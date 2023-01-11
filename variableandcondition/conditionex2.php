<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $now = date("H");

    if (date("H") >= 5 and date("H") <= 9 or date("H") >= 12 and date("H") <= 16) {
        echo "Bonjour!";
    } else if (date("H") > 9 and date("H") <= 12) {
        echo "Bonne journée!";
    } else if (date("H") > 16 and date("H") <= 21) {
        echo "Bonne soirée!";
    } else {
        echo "Bonne nuit!";
    }

    ?>



</body>

</html>