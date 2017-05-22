<?php
include '../index.php';
?>

<div class="ex">
<h2>Exercice 6</h2>
<p>Enoncé de l'exercice :En allant de 20 à 0 avec un pas de 1, afficher le message C'est presque bon.
</p>
<p class="result">
<?php
for($var=20; $var>=0; $var --){
    ?>
    <br/>
    <?php echo $var. " c'est presque bon!";
}
?>
</p>
    </body>
</html>
