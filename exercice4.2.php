<?php
        declare(strict_types = 1);
        function stringFunction(string $text) : string 
        {
        return $text;
        }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 4.2</title>
</head>
<body>
    <h1>Exercice 2 Partie 4 : Les fonctions PHP</h1>
    <p><?= stringFunction('Gandalf')?></p>
</body>
</html>