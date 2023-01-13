<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once 'ContaBanco2.php';
        $p1 = new ContaBanco(); //Max
        $p2 = new ContaBanco(); //Ray
        $p1 -> abrirConta("CC");
        $p1 -> setDono("Max");
        $p2 -> abrirConta("CP");
        $p2 -> setDono("Ray");
        $p1 -> setNumConta(111);
        $p2 -> setNumConta(222);

        $p1 -> depositar(300);
        $p2 -> depositar(500);

        $p2 -> sacar(1000);

        $p1 -> pagarMensal();
        $p2 -> pagarMensal();

        $p1->sacar(338);
        $p2->sacar(630);

        $p1 -> fecharConta();
        $p2 -> fecharConta();

        

        var_dump($p1);
        var_dump($p2);
        ?>
    </body>
</html>