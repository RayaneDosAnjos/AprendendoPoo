<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ultra Emoji</title>
    </head>
    <body>
        <?php
            require_once 'Lutador.php';
            require_once '../aula08/Luta.php';
            $l= array();
            $l[0]= new Lutador("PRETTY BOY","FRANÇA","31","1.75","68.9 Kg","11","2","1");
            
            $l[1]= new Lutador("PUTSCRIPT","Brasil","29","1.68","57.8","14","2","3");
            
            $l[2]= new lutador("DEAD CODE","AUSTRÁLIA","28","1.93","81.6","13","0","2");
            
            $l[3]= new Lutador("SNAPSHADOW","EUA","35","1.65","80.9","12","2","1");

            $l[4]= new lutador("UFOCOBOL","BRASIL","37","1.70","119.3","5","4","3");
            
            $l[5]= new Lutador("NERDAART","EUA","30","1.81","105.7","12","2","4");

            

            $UEC01 = new Luta();
            $UEC01->MarcarLuta($l[4],$l[5]);
            $UEC01->Lutar();
            
        
        ?>

    </body>
</html>