<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            require_once 'Aluno.php';
            require_once 'Bolsista.php';
            /*$v1= new Visitante();
            $v1->setNome("Max");
            $v1->setIdade(25);
            $v1->setSexo("M");
            var_dump($v1);*/
            $a1=new Aluno();
            $a1->setNome("Pedro");
            $a1->setSexo("M");
            $a1->setMatricula("111");
            $a1->setIdade(16);
            $a1->setCurso("Informática");
            $a1->pagarMensalidade();
            var_dump($a1);

            $b1=new Bolsista();
            $b1->setBolsa(12.5);
            $b1->setMatricula(1112);
            $b1->setNome("Jubileu");
            $b1->setCurso("Administração");
            $b1->setIdade(17);
            $b1->setSexo("M");
            $b1->pagarMensalidade();
            var_dump($b1);            
        ?>
    </body>
</html>