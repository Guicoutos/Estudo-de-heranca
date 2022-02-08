<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body><h4>
        <?php
        //Poliformismo de sobrecarga
        require_once 'Mamifero.php';
        require_once 'Lobo.php';
        require_once 'Cachorro.php';
        $c = new Cachorro();

        $c -> reagirIdadePeso(2, 12.5);
        $c -> reagirIdadePeso(17, 4.5);
        ?>
        </h4>
    </body>
</html>