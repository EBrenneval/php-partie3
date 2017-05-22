<?php
include '../index.php';
?>

<div class="ex">
    <h2>Exercice 2</h2>
    <p>Créer deux variables. Initialiser la première à 0 et la deuxième avec un nombre compris en 1 et 100.
        Tant que la première variable n'est pas supérieur à 20 :

        multiplier la première variable avec la deuxième
        afficher le résultat
        incrementer la première variable
    </p>
    <p class="result">
        <?php
        $first = 0;
        $second = 45;
        while ($first <= 20) {   // la condition tant que la variable n'est pas supérieur a 20
            echo $first * $second;  // on multiplie les 2 variables 
       
        ?>
<br/>
        <?php
        $first++;     // on incrémente la premiere variable. 
 }


        ?>
        </body>
        </html>
