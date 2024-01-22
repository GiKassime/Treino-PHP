<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        require_once "Lutador.php";
        require_once "Luta.php";

        $p = array();
        $p[0] = new Lutador("Pedroso","Brasil",31,1.75,68.9,11,2,1);
        $p[1] = new Lutador("Pedrosin","Brasil",31,1.75,68.9,11,2,1);
        $luta = new Luta();
        $luta->marcarLuta($p[0],$p[1]);
        $luta->lutar();
  
    ?>
</body>
</html>