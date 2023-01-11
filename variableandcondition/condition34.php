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


        <input type="radio" name="gender" value="men">
        <label for="men">Men</label>

        <input type="radio" name="gender" value="women">
        <label for="women">Women</label>

        <br>
        <label for="age">Donne ton age poulet</label>

        <br>
        <input type="number" name="age">
        <br>
        <input type="submit" value="Submit">

    </form>
    <?php

    if (isset($_GET['gender'])) {

        if ($_GET['gender'] == "men") {

            if (isset($_GET['age'])) {
                if ($_GET['age'] < 12) {
                    echo "Hello mister kiddo!";
                } else if ($_GET['age'] >= 12 and $_GET['age'] < 18) {
                    echo "Hello Mister Teen !";
                } else if ($_GET['age'] >= 18 and $_GET['age'] < 115) {
                    echo "Hello Men !";
                } else if ($_GET['age'] >= 115) {
                    echo "Wow! Still alive ? Are you a robot, like me ? Can I hug you ?";
                }
            }
        }
        if ($_GET['gender'] == "women") {

            if (isset($_GET['age'])) {
                if ($_GET['age'] < 12) {
                    echo "Hello miss kiddo!";
                } else if ($_GET['age'] >= 12 and $_GET['age'] < 18) {
                    echo "Hello miss Teen !";
                } else if ($_GET['age'] >= 18 and $_GET['age'] < 115) {
                    echo "Hello Women !";
                } else if ($_GET['age'] >= 115) {
                    echo "Wow! Still alive ? Are you a robot, like me ? Can I hug you ?";
                }
            }
        }
    }
    ?>

</body>

</html>