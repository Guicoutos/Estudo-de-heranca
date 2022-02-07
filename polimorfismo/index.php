<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //Código que nos permite escolher um tipo de animal e então exibe o tipo de som que é emitido, forma de locomoção, alimentação, atividade típica e característica.
        require_once 'Mamifero.php';
        require_once 'Reptil.php';
        require_once 'Peixe.php';
        require_once 'Ave.php';

        $m = new Mamifero();
        $a = new Ave();

        $m -> setPeso(33.5);
        $m -> locomover();
        $a -> locomover();
        ?>
    </body>
</html>