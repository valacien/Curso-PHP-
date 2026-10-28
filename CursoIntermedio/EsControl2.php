<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        #Condicionales
        /*
            while(condicion){
                Bloque de instrucciones
            }
            
            while(condicion):
                Bloque de instrucciones
            endwhile;
        */
        $contador = 6;
        while($contador<5){
            echo ("Hola en la pasada $contador <br>");
            $contador++;
        }

        while($contador<10):?>
            <h1>Hola en la pasada <?php echo $contador ?> <br></h1>
            <?php $contador++;                                   
        endwhile;

        /*DO WHILE
        do{
            Bloque de instrucciones 
        }while(condicion);
        */
        do{
            echo ("Hola en la pasada $contador de do...while<br>");
            $contador++;
        }while($contador<5);

        /*
            for(inicializacion; condicion; incremento){
                Bloque de instrucciones
            }       

        
        */
        for($contador=0; $contador<5; $contador++){
            echo ("Hola en la pasada $contador de for<br>");
        }

        $ciudades = array("Madrid", "Barcelona", "Valencia", "Sevilla");
        for($j=0; $j<4; $j++){
            echo ("<h1>Hola ".$ciudades[$j]."<br></h1>");
        }


        /*
            foreach($array as $valor){
                Bloque de instrucciones
            }       

            para mostrar el indice y el valor de un array asociativo
            foreach($array as $clave => $valor){
                Bloque de instrucciones
            }
        */

        $ciudades = array("Madrid", "Barcelona", "Valencia", "Sevilla");
        foreach($ciudades as $n => $valor){
            echo ("<h1>Hola ".$n ."=>.".$valor."<br></h1>");
        }   
    ?>
</body>
</html>