<?php
include '../index.php';
?>

<div class="ex">
    <h2>Exercice 8</h2>
    <p>Enoncé de l'exercice : En allant de 200 à 0 avec un pas de 12, afficher le message Enfin !!!!.</p>
    <p class="result">
        <?php
        for ($var = 200; $var >= 0; $var -= 12) {   // boucle qui répète l'action avec un pas de 12 de 0 à 200. 
            ?>
            <br/>
            <?php
            echo $var . ' Enfin!!!!';   // affiche la variable.   
        }
        ?>
    </p>
</div>
</body>
</html>
