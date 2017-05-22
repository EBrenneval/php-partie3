<?php
include '../index.php';
?>

<div class="ex">
<h2>Exercice 4</h2>
<p>Créer une variable et l'initialiser à 1.
Tant que cette variable n'atteint pas 10, il faut :

    l'afficher
    l'incrementer de la moitié de sa valeur
</p>
<p class="result">
<?php
$var = 1;  // declaration de la variable
while($var <=10){  // tant que ma variable est inf ou egale a 10 
    echo $var;   // on affiche la variable 
    $var += $var/2;  // on l'incrémente de la moitié de sa valeur a chaque fois 
}
?>

    </p>
    </body>
</html>
