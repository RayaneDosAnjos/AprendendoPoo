<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            require_once 'Caneta.php';

            $c1 = new Caneta("BIC","AZUL",0.4);
            $c2 = new Caneta("NIC","AMARELO",0.8);
            $c3 = new Caneta("NIC", "ROSA", 0.8);
            $c4 = new Caneta("NIC", "VERDE", 0.8);
            var_dump($c1);
            var_dump($c2);
            var_dump($c3);
            var_dump($c4);

        ?>
    </body>
</html>