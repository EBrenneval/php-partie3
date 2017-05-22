<?php
include '../index.php';
?>

<div class="ex">
<h2>Exercice 3</h2>
<p>Enoncé de l'exercice : Créer deux variables. Initialiser la première à 100 et la deuxième avec un nombre compris en 1 et 100.
Tant que la première variable n'est pas inférieur ou égale à 10 :

    multiplier la première variable avec la deuxième
    afficher le résultat
    décrémenter la première variable
</p>
<p class="result">
<?php
$first = 100;
$second = 65;
while($first >=10){
    echo $first*$second;
    ?>
<br/>
<?php
$first--;
}
?>

    </p>
</div>
    </body>
</html>
