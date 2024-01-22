<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Escola</title>
</head>
<body>
    <?php
    require_once('pessoa.php');
    require_once('funcionario.php');
    require_once('aluno.php');
    require_once('professor.php');
    $p1 = new Pessoa();
    $p2 = new Funcionario();
    $p3 = new Aluno();
    $p4 = new Professor();

    $p1->setNome("A");
    $p2->setNome("B");
    $p3->setNome("C");
    $p4->setNome("D");
  
    ?>
</body>
</html>