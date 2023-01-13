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
$str = 'This is going to be shuffled !';
$str = str_shuffle($str);
 
echo $str;
    ?>
    <br>

<?php

$str= "According to a researcher (sic) at Cambridge University , it doesn't matter in what order the letters in a word are, the only important thing is that the first and last letter be at the right place. The rest can be a total mess and you can still read it without problem. This is because the human mind does not read every letter by itself but the word as a whole .";

$str= explode(" ", $str);

foreach ($str as $word){
	
	echo str_shuffle($word)." ";
}
?>
<br>

<?php 
function maj_word ($word) {
    echo ucfirst($word) . '<br>';

}
maj_word('je');
maj_word('suis');
maj_word('perdu');
    ?>

<?php
echo date('Y'). '<br>';
echo date('d-m-Y H:i:s') . '<br>';

function Sommes($number1 , $number2){
    if (is_numeric($number1) == false or is_numeric($number2) == false ){
        echo "Error: argument is the not a number. <br>";
    }
    else {
    $somme = $number1 + $number2;
    echo $somme . '<br>';
    };
};
Sommes(5 , 6);
Sommes('niet' , 4);
Sommes(5 , 1548)
?>

<?php 
function initial ($texte) {
    $texte= explode(" ", $texte);

foreach ($texte as $word){
	
	echo substr($word, 0, 1);
}
}
initial("Je te vois est ce que ca va marcher ?")
?>
<?php
function remplace_ae($text) {
    return str_replace(array("ae"), "æ", $text);
}
$text = '"caecotrophie", "chaenichthys","microsphaera", "sphaerotheca"';
echo remplace_ae($text);
?>

<?php
function replace_ae_inverse($test) {
    return str_replace("æ", "ae", $test);
}
$test = '"cæcotrophie", "chænichthys","microsphæra", "sphærotheca".';
echo replace_ae_inverse($test);
?>

</body>
</html>