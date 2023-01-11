<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="get">

        <label for="note">Student's grade</label>
        <input type="number" name="note" id="">
        <br>
        <input type="submit" value="Submit">

    </form>
    <?php
    if ($_GET['note'] < 4) {
        echo "This work is really bad. What a dumb kid! ";
    } else if ($_GET['note'] >= 5 and $_GET['note'] <= 9) {
        echo "This is not sufficient. More studying is required.";
    } else if ($_GET['note'] == 10) {
        echo "barely enough!";
    } else if ($_GET['note'] >= 11 and $_GET['note'] <= 14) {
        echo "Not bad!";
    } else if ($_GET['note'] >= 15 and $_GET['note'] <= 18) {
        echo "Bravo, bravissimo!";
    } else if ($_GET['note'] >= 19 and $_GET['note'] <= 20) {
        echo "Too good to be true : confront the cheater!";
    }
    ?>

</body>

</html>