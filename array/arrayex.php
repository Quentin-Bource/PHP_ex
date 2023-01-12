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
    $family = array (
        0 => "Quentin",
        1 => "Maxime",
        2 => "Mamy",
        3 => "Papa",
        4 => "Maman",
        5 => "Papy",
    );
    print_r($family); ?>
    <br>
    <?php
    $recipes = array(
        "Durum",
        "Lasagne",
        "Spaghetti Bolognaise",
        "Sushi",
        "Paella",
        "Pizza",
    );
    print_r($recipes)
    ?>
    <br>
    
    <?php 
    $movie = array (
        "Die Hard", 
        "John Wick",
        "Avengers",
        "Deadpool", 
        "Rocky",
        "Rambo",

    );
    print_r($movie[0]);
    $movie[] = "Mission Impossible";
    echo '<pre>';
    print_r($movie);
    echo '</pre>';
    ?>
    <?php var_dump($movie);
    ?>
    <?php 
    $me = array (
        'name' => 'Quentin',
        'favorite season' => 'spring',
        'age' => 25,
        'Basketball' => true,
    );
    echo '<pre>';
    print_r($me);
    echo '</pre>';
    ?>
    <?php
    $me ['movie'] = $movie;
    $me ['hobby'] = array ('jeux vidéo', 'manga' , 'basketball');
    echo '<pre>';
    print_r($me);
    echo '</pre>';
    ?> 
    <?php 
    $bro = array (
        'name' => 'Max',
        'favorite season' => 'winter',
        'age' => 28,
        'Basketball' => false,
        'movie' => array('seven', 'avatar', 'Kamelott'),
        'hobby' => array('food' , 'BBQ' , 'Boucherie'),
    );
    $me['bro'] = $bro;
    echo '<pre>';
    print_r($me);
    echo '</pre>';
    ?>

<?php
$number_bro = count($me['bro']['hobby']);
$number_me = count($me['hobby']);
$number_value_all = [$number_bro, $number_me];
echo array_sum($number_value_all);
?>
<?php
$me['hobby'][] = 'taxidermy';
echo '<pre>';
print_r($me);
echo '</pre>';
?>
<?php
$me['name'] = 'Durand';
echo '<pre>';
print_r($me);
echo '</pre>';
?>
    <?php
$me = array(
    'name' => 'Quentin',
    'age' => 25,
    'favorite season' => 'spring',
    'movie' => array('Die Hard', 'John Wick', 'Rambo'),
    'hobby' => array('jeux video', 'manga', 'food', 'basketball'),
);
$soulmate = array(
    'name' => 'Marie',
    'age' => 25,
    'my favorite season' => 'summer',
    'movie' => array('Seven', 'Nemo', "Figth Club"),
    'hobby' => array('manga', 'jeux video', 'food', 'danse', 'cat'),
);

// perform array operation
$hobby_intersection = array_intersect($me['hobby'], $soulmate['hobby']);
$hobby_merge = array_merge($me['hobby'], $soulmate['hobby']);

echo '<pre>';
print_r($hobby_intersection);
print_r($hobby_merge);
echo '</pre>';
?>
<?php
$web_development = array(
    'frontend' => array(),
    'backend' => array(),
);
$web_development['frontend'][] = 'xhtml';
$web_development['backend'][] = 'Ruby on Rails';
$web_development['frontend'][] = 'CSS';
$web_development['frontend'][] = 'Flash';
$web_development['frontend'][] = 'Javascript';

$web_development['frontend'][0] = 'html';
unset($web_development['frontend'][2]);

echo '<pre>';
print_r($web_development);
echo '</pre>';
?>

</body>
</html>