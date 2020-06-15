<?php

    $text = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
# parola da censurare
    $bad_words = $_GET['word'];
# censura mediante l'utilizzo della funzione str_replace
    $censored = str_replace($bad_words, '***', $text);
# stampa in console
        // echo($censored);
# con la funzione strlen calcolo la lunghezza della stringa
    $string_length = strlen($censored);
        # echo($string_length);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Censored</title>
    </head>
    <body>
        <p>
            <?php echo $censored; echo $string_length; ?>
        </p>
    </body>
</html>
