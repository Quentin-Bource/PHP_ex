<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- ex1 -->
    <?php 
    $pronouns = array ('I', 'You', 'He/She','We', 'You', 'They');
    var_dump($pronouns);

    foreach($pronouns as $pronoun){
    echo $pronoun . ' ' . 'code' . '<br>';
}
?>

<!-- ex2 -->
<?php $number_count = 1;
while ($number_count <= 120) {
    echo $number_count . '<br>';
    $number_count++;
}
?>
<?php
for ($count_for = 1; $count_for <= 120; $count_for++) {
    echo $count_for . '<br>';
}
?>
<?php 
$members = array ('Jacky', 'Dylan', "Nathan", "Lucie", "Christiane", "Michelle", "Julie", "Pablo","Cédric");
foreach($members as $member){
    echo $member. '<br>';
}
?>
<?php
$countries = array(
    'US' => 'United States',
    'CA' => 'Canada',
    'GB' => 'United Kingdom',
    'AU' => 'Australia',
    'DE' => 'Germany',
    'FR' => 'France',
    'JP' => 'Japan',
    'CN' => 'China',
    'IT' => 'Italy',
    'ES' => 'Spain'
);
echo '<pre>';
print_r($countries);
echo '</pre>';
?>
<label for="country"> Choose a country: </label>
<select name="country" id="country">
    <?php
    foreach ($countries as $key => $value) {
    ?>
        <option value=" <?php echo $key ?> "> <?php echo $value ?></option>
    <?php
    }
    ?>
</select>
    

    
</body>
</html>