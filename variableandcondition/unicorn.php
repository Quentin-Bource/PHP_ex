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
        <label for="gender">Are you a human, a cat or a unicorn ?</label>
        <br>
        <input type="radio" name="gender" value="human">
        <label for="gender">a human</label>
        <br>
        <input type="radio" name="gender" value="cat">
        <label for="gender">a cat</label>
        <br>
        <input type="radio" name="gender" value="unicorn">
        <label for="gender">a unicorn</label>
        <br>
        <input type="submit" name="submit" value="submit">
    </form>
    <?php
    $gender_input = $_GET['gender'];

    echo $hello = ($gender_input == 'human') ? '<img src="https://media4.giphy.com/media/l3q2JnuGqWEEkOiVW/giphy.gif?cid=ecf05e47bo6r1c73obyjrvpw2opn2xdmny739mtyk3tigdg8&rid=giphy.gif&ct=g" alt="human">'
        : (($gender_input == 'cat') ? '<img src="https://media3.giphy.com/media/BzyTuYCmvSORqs1ABM/giphy.gif?cid=ecf05e473h3qrhfh76dx07f8wpzfpukxn1nvgnsjij8qfmvc&rid=giphy.gif&ct=g" alt="cat">'
            : '<img src="https://media4.giphy.com/media/j0kQJxo5mzGYb4EvWK/giphy.gif?cid=ecf05e47j6447ewrfd4p7ldgcpi9g1o8rald2p8ri6kijivj&rid=giphy.gif&ct=g" alt="unicorn">')
    ?>

</body>

</html>