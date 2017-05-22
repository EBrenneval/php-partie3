<?php
include '../index.php';
?>

<div class="ex">
<h2>Exercice 7</h2>
<p>Enoncé de l'exercice : En allant de 1 à 100 avec un pas de 15, afficher le message On tient le bon bout.</p>
<p class="result">
<?php
for($var = 1;$var <=100; $var += 15){  //  boucle qui répète l'action avec un pas de 15. 
    ?>
    <br/>
    <?php echo $var." On tient le bon bout"; // on affiche la variable 
}
?>
</p>
</div>
    </body>
</html>
