<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
        require_once 'Video.php';
        require_once 'Usuario.php';
        require_once 'Visualizacao.php';

        $v[0] = new Video("Aula 01 de POO");
        $v[1] = new Video("Aula 12 de PHP");
        $v[2] = new Video("Aula 15 de HTML5");

        $g[0] = new Usuario("Jubileu", 22, "M", "Juba");
        $g[1] = new Usuario("Creuza", 12, "F", "Creuzita");

        $vis[0] = new Visualizacao($g[0], $v[2]); //Jubileu assiste HTML5
        $vis[1] = new Visualizacao($g[0], $v[1]); //Jubileu assiste PHP

        $vis[0] -> avaliar();
        $vis[1] -> avaliarPorc(85);
        print_r($vis);
        ?>
        </pre>
    </body>
</html>