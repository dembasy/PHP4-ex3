<?php
  function phrase($mots, $virgules){
    return $mots. $virgules;
  }
 ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>exercice 3</title>
  </head>
  <body>
    <p>
      <?php
        echo phrase('Bonjour', 'Je m\'appelle Demba');
       ?>
    </p>
  </body>
</html>
