<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primer programa de PHP</title>
</head>
<body>
    <?php 
        
        $nombre = "Jose Manuel";
        $edad = 39;

        echo ("<h1>Hola mi nombre es  $nombre y  tengo  $edad  años.</h1>");
        #Variables dinamicas
        $$miVariable = "Hola soy una variable dinamica";
        ${$miVaraible2} = "Hola soy otra variable dinamica";

        #constantes
        define("MI_NOMBRE", "Jose Manuel");
        echo("<h1>MI_NOMBRE</h1>");
        
    ?>
</body>
</html>