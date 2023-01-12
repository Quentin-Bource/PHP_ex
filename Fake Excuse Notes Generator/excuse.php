<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fake Excuse Notes Generator</title>
</head>

<body>
    <head>
        <h1>Le générateur d'excuse! </h1>
    </head>

    <form action="" method='get'>

    <label for="nom">Nom :</label>
    <input type="text" name="nom" id="nom" placeholder="Bource Quentin">
    <br>

    <label for="nomEnfant">Nom de l'enfant :</label>
    <input type="text" name="nomEnf" id="nomEnf" placeholder='Nicolas'>
    <br>

    <label for="gender">Garçon ou fille ?</label>
    <br>
    <label for="boy">Garçon</label>
    <input type="radio" name="gender" id="boy" value='boy'>
    <label for="girl">Fille</label>
    <input type="radio" name="gender" id="girl" value='girl'>
    <br>
    

    <label for="nomProf">Nom professeur :</label>
    <input type="text" name="nomProf" id="nomProf" placeholder='M. Smith'>
    <br>

    <label for="excuse">Type d'excuses :</label>
    <br>
    <label for="décès">Décès</label>
    <input type="radio" name="excuse" id="décès" value='deces'>

    <label for="maladie">Maladie</label>
    <input type="radio" name="excuse" id="maladie" value='maladie'>
    <br>
    <label for="acti">Activité importante</label>
    <input type="radio" name="excuse" id="acti" value='acti'>
    
    <label for="autre">Autres</label>
    <input type="radio" name="excuse" id="autre" value='autre'>
    <br>

    <input type="submit" name='submit' value="submit" id="submit">
    </form>

    <?php 
    //Element formulaire
    $nom = $_GET['nom'];
    $nomEnf = $_GET['nomEnf'];
    $gender = $_GET['gender'];
    $nomProf = $_GET['nomProf'];
    $excuse = $_GET['excuse'];
    $random = (rand(0,4));

    //création d'excuse 
    $excuse_maladie = array (
        0 => "vomit des pieds",
        1 => "voit la vie en rose littéralement", 
        2 => "se prend constamment pour une chèvre",
        3 => "s'est tordu les poils de barbe",
        4 => "tousse des spaghettis bolognaise par le nez",
    );
    $excuse_deces = array (
        0 => "de l'ami imaginaire de notre chien Rouffy",
        1 => "de la tante de la cousine de la mère du tonton de notre garagiste",
        2 => "du poisson rouge de notre poisson rouge",
        3 => "de Mickael Jackson",
        4 => "de Téodule Mucrulu",


    );
    $excuse_acti = array (
        0 => "son championnat régionnal de cassage de noix avec son nez",
        1 => "apprendre à faire du vélo sans roue",
        2 => "son cours de musique par casque anti-bruit",
        3 => "son saut en parachute dans une grotte",
        4 => "aller a Disney et ... pas vous",
    );
    $excuse_autre = array (
        0 => "ranger les feuilles du jardin par ordre alphabétique",
        1 => "faire le tour du monde en pédalo",
        2 => "créer une nouvelle religion basé sur l'amitié envers les durums",
        3 => "apprendre la choré de Beyoncé 'I'm a single lady' par coeur",
        4 => "courir 3heure sur les nuages",

    );

    //Création excuse
    if (isset($nom) and isset($nomEnf) and isset($gender) and isset($nomProf) and isset($excuse)) {
        if ($excuse == 'maladie') {
            if ($gender == "boy"){
    ?>      <p>Cher <?php echo $nomProf?>,<br>
            je vous envoie ce message pour vous prévenir que <?php echo $nomEnf?> ne pourra pas être présent à l'école aujourd'hui. <br>
             En effet, <?php echo $nomEnf?> <?php echo $excuse_maladie[$random]?>. Nous sommes allés voir un médecin pour qu'il puisse revenir le plus vite possible. <br>
            Je vous tiendrais évidemment au courant de l'avancement de son traitement. <br>
            Bonne journée à vous. <br>
            <?php echo $nom?> </p> 
            <?php
            }
            else if ($gender == 'girl'){
            ?>
                <p>Cher <?php echo $nomProf?>,<br>
                je vous envoie ce message pour vous prévenir que <?php echo $nomEnf?> ne pourra pas être présente à l'école aujourd'hui. <br>
                 En effet, <?php echo $nomEnf?> <?php echo $excuse_maladie[$random]?>. Nous sommes allés voir un médecin pour qu'elle puisse revenir le plus vite possible. <br>
                Je vous tiendrais évidemment au courant de l'avancement de son traitement. <br>
                Bonne journée à vous. <br>
                <?php echo $nom?> </p> 
                <?php

            }

        }
        elseif ($excuse == 'deces') {
            if($gender == "boy") {
?>          <p> Cher <?php echo $nomProf?>, <br> 
            je vous envoie ce message pour vous prévenir que <?php echo $nomEnf?> ne pourra pas être présent à l'école aujourd'hui. <br> 
            En effet, je vous informe du décès <?php echo $excuse_deces[$random]?>. <br> Nous allons à son enterrement tous ensemble ce matin. <br> 
            Bonne journée à vous. <br>
            <?php echo $nom?></p>
            <?php
            }
            else if($gender =='girl'){
?>
            <p> Cher <?php echo $nomProf?>, <br> 
            je vous envoie ce message pour vous prévenir que <?php echo $nomEnf?> ne pourra pas être présente à l'école aujourd'hui. <br> 
            En effet, je vous informe du décès <?php echo $excuse_deces[$random]?>. <br> Nous allons à son enterrement tous ensemble ce matin. <br>
            Bonne journée à vous. <br>
            <?php echo $nom?></p>
            <?php
            }
        }
        elseif($excuse == 'acti'){
            if($gender == "boy") {
?>          <p> Cher <?php echo $nomProf?>, <br> 
            je vous envoie ce message pour vous prévenir que <?php echo $nomEnf?> ne pourra pas être présent à l'école aujourd'hui. <br> 
            En effet, il doit absolument être là pour <?php echo $excuse_acti[$random]?>. <br>
            Merci de votre compréhension! <br>
            Bonne journée à vous. <br>
            <?php echo $nom?></p>
            <?php
        }
            else if($gender =='girl'){
 ?>
            <p> Cher <?php echo $nomProf?>, <br> 
            je vous envoie ce message pour vous prévenir que <?php echo $nomEnf?> ne pourra pas être présente à l'école aujourd'hui. <br> 
            En effet, elle doit absolument être là pour <?php echo $excuse_acti[$random]?>. <br>
            Merci de votre compréhension! <br>
            Bonne journée à vous. <br>
            <?php echo $nom?></p>
            <?php
            }
        }
        elseif($excuse == 'autre'){
            if($gender == "boy") {
?>          <p> Cher <?php echo $nomProf?>, <br> 
             je vous envoie ce message pour vous prévenir que <?php echo $nomEnf?> ne pourra pas être présent à l'école aujourd'hui. <br> 
            En effet, il doit absolument être là pour <?php echo $excuse_autre[$random]?>. <br>
            Merci de votre compréhension! <br>
            Bonne journée à vous. <br>
             <?php echo $nom?></p>
            <?php
            }
            else if($gender =='girl'){
             ?>
            <p> Cher <?php echo $nomProf?>, <br> 
            je vous envoie ce message pour vous prévenir que <?php echo $nomEnf?> ne pourra pas être présente à l'école aujourd'hui. <br> 
            En effet, elle doit absolument être là pour <?php echo $excuse_autre[$random]?>. <br>
            Merci de votre compréhension! <br>
            Bonne journée à vous. <br>
            <?php echo $nom?></p>
             <?php
             }
        }
    }
    else {
        echo "J'ai pas assez d'info pour t'aider désolé!";
        }


    ?>

  
</body>

</html>