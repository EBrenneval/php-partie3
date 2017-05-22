<?php
include '../index.php';
?>

<div class="ex">
<h2>Exercice 5</h2>
<p>Enoncé de l'exercice : En allant de 1 à 15 avec un pas de 1, afficher le message On y arrive presque.
</p>
<p class="result">
<?php
$var = 1;  // on declare la var
for($var = 1; $var <=15 ; $var ++){  // la boucle FOr permet de répété l'action avec un pas de 15 
   ?>
    <br/>
    <?php echo $var. " on y arrive presque";  // on affiche
}
?>

</p>
    </body>
</html>
