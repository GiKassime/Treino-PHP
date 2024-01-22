<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Treinando Polimorfismo</title>
</head>
<body>
    <?php
        require_once 'lobo.php';
        require_once 'mamifero.php';
        require_once 'cachorro.php';


        $lobo = new Lobo();
        $lobo->emitirSom();
        $cachorro = new Cachorro();
        $cachorro->emitirSom();
        $cachorro->reagirDono(true);

    ?>
</body>
</html>