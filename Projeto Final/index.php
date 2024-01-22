<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Final</title>
</head>
<body>
    <pre>
    <?php 
        require_once 'Video.php';
        require_once 'Gafanhoto.php';
        require_once 'Visualizacao.php';


        $video[0]= new Video("Aula Bananinha");
        $video[1]= new Video("Aula Maça");
        $video[2]= new Video("Aula Melão");
        $pessoa[0]= new Gafanhoto("Paula",16,"Paulinha","F");
        $view[0]= new Visualizacao($pessoa[0],$video[1]);
        print_r($view[0]);
    ?>
    </pre>
</body>
</html>