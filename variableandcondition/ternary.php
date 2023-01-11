<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="get" action="">
        <label for="gender">Men or Women ?</label>
        <br>
        <input type="radio" name="gender" value="men">
        <label for="men">Men</label>
        <br>
        <input type="radio" name="gender" value="women">
        <label for="women">Women</label>
        <br>
        <input type="submit" name="submit" value="submit">
    </form>
    <?php

    echo $hello = ($_GET['gender'] == 'men') ? "Hello my boy" : "Wath's up girl ?"

    ?>

</body>

</html>