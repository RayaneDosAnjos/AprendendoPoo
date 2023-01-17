<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ultra Emoji</title>
    </head>
    <body>
        <?php
            require_once 'Lutador.php';
            $l= array();
            $l[0]= new Lutador("PRETTY BOY","FRANÇA","31","1.75","68.9 Kg","11","2","1");
            $l[0]->status();

            $l[1]= new Lutador("PUTSCRIPT","Brasil","29","1.68","57.8","14","2","3");
            $l[1]->apresentar();
            $l[1]->status();

            $l[2]= new lutador("DEAD CODE","AUSTRÁLIA","28","1.93","81.6","13","0","2");
            
            

            $l[3]= new Lutador("SNAPSHADOW","EUA","35","1.65","80.9","12","2","1");

            $l[4]= new lutador("UFOCOBOL","BRASIL","37","1.70","119.3","5","4","3");
            
        ?>
    </body>
</html>