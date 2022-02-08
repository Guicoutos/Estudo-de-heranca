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
        require_once 'Canguru.php';
        require_once 'Cachorro.php';
        require_once 'Cobra.php';
        require_once 'Tartaruga.php';
        require_once 'Goldfish.php';
        require_once 'Arara.php';

        $m = new Mamifero();
        $a = new Ave();
        $r = new Reptil();
        $c = new Canguru();
        $k = new Cachorro();
        $t = new Tartaruga();
        $cc = new Cobra();

        echo "<p>Cachorro</p>";
        $k -> emitirSom();
        $k -> locomover();
        $k -> alimentar();
        echo "</br>";
        echo "<p>Cobra</p>";
        $cc -> emitirSom();
        $cc -> locomover();
        $cc -> alimentar();
        echo "</br>";
        echo "<p>Canguru</p>";
        $c -> emitirSom();
        $c -> locomover();
        $c -> alimentar();
        echo "</br>";
        ?>
    </body>
</html>