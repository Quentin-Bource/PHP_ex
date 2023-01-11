<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php $Name = 'Quentin';
    $age = 25;
    $color = "bleu";
    $famille = array(
        0 => 'Max',
        1 => 'Mamy',
        2 => 'Papa',
        3 => 'Maman',
        4 => 'Papy',
    );
    $faim = true ?>

    <p> Salut ! Mon nom est <?php echo $Name ?> </p>
    <p> J'ai <?php echo $age ?> ans </p>
    <p> Mes yeux sont <?php echo $color ?> </p>
    <p>La première personne de ma famille <?php echo $famille[0] ?> </p>

</body>

</html>