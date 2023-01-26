<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once 'Mamifero.php';
        require_once 'Lobo.php';
        require_once 'Cachorro.php';

        $m = new Mamifero();
        

        $l = new Lobo();
        

        $c = new Cachorro();
        $c-> reagirFrase("passa"); 
        $c-> reagirDono(true);
        $c-> reagirHora(21,00);
        $c-> reagirIdadePeso(2,12.5);
        ?>
    </body>
</html>