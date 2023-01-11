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

        <label> Name: </label>
        <input type="text" name="name" id="name"> <br>

        <input type="radio" name="gender" value="men">
        <label for="men">Men</label>

        <input type="radio" name="gender" value="women">
        <label for="women">Women</label>

        <br>
        <label for="age">Quelle age as tu ?</label>

        <br>
        <input type="number" name="age">
        <br>
        <input type="submit" value="Submit">

    </form>
    <?php

    if (isset($_GET['gender']) and isset($_GET['name'])) {
        $message = "Sorry you don't fit the criteria.";
        if ($_GET['gender'] == "women") {
            if ($_GET['age'] >= 21 and $_GET['age'] <= 40) {
                $message = "Welcome to the team " . $_GET['name'] . "!";
            }
        }
        echo $message;
    }
    ?>

</body>

</html>