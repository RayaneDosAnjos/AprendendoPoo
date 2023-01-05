<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 02- Poo</title>
</head>

<body>
    <pre>
    <?php

    require_once 'caneta.php';
    $c1 = new caneta;
    $c1->cor = "azul";
    $c1->ponta = 0.5;
    $c1->tampada = false;
    $c1->destampar();
    $c1-> rabiscar();

    print_r($c1);

    $c2 = new caneta;
    $c2->cor = "verde";
    $c2->ponta = 30;
    $c2->tampada = true;
    $c2->destampar();
    $c2->rabiscar();

    print_r($c2);

    //var_dump ($c1);

    ?>
     </pre>
</body>

</html>