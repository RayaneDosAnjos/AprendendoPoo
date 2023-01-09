<<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once 'ContaBanco.php';
        require_once 'contaDigital.php';

        $cn = new ContaBanco("xxxx","corrente","Rayane", 0);
        
        $cn->numConta = "teste";
        var_dump($cn);

        $object=new ContaDigital("yyyy", "poupança", "max",1000.5);
        $object->setDono("oi");
        $object->setNumConta("3-5");
        
        var_dump($object);
        ?>
    </body>
</html>