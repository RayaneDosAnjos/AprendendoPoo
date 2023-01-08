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

            //$c1->setModelo("BIC");com método
            $c1-> modelo="Nic";//sem método
            $c1->setPonta(0.5);
            var_dump($c1);
            var_dump($c2);
        ?>
    </body>
</html>