<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <title></title>
    </head>
    <body>
        <?php
            require_once 'Video.php';
            require_once 'Gafanhoto.php';
            require_once '../aula15/Visualizacao.php';

            $v[0] = new video("Aula 1 de POO");
            $v[1] = new video("Aula 12 de PHP");
            $v[2] = new video("Aula 15 de HTML5");

            $g[0] = new Gafanhoto("Jubileu",16,"M","Juba");
            $g[1] = new Gafanhoto("Creuza",12,"F","Creuzita");
            
            $vis[0] = new Visualizacao($g[0],$v[2]);
            $vis[1] = new Visualizacao($g[0],$v[1]);
            var_dump($vis);

            
        ?>
    </body>
</html>