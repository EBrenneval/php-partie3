<?php
include '../index.php';
?>
<div class="ex">
<h2>Exercice 1</h2>
<p>Enoncé de l'exercice : Créer une variable et l'initialiser à 0.
    Tant que cette variable n'atteint pas 10, il faut :

    l'afficher
    l'incrementer
</p>
<p class="result">
<?php
$var = 0;
while ($var <=10){
    echo $var++;
}

?>
    </p>
</div>
</body>
</html>
