<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clase 10</title>
</head>
<body>
    <?php
        #Variables
        $numero=17;
        $dia =9;
        $mes = "Noviembre";

        #Constantes

        define("NOMBRE", "Jose Manuel");    
        define("YEAR", 1987);

        echo("Hola, mi nombre es ".NOMBRE." y mi numero favorito es: ".YEAR.".<br>");
        echo ("Hoy es $dia de $mes del año ".YEAR.".<br>");   

        $numeros = [2,8,17,50,147];

        print_r($numero);

        $nombres=array("Pablo", "Jose","Sandra","Javi","Emilio","Jorge");

        echo '<br>',$nombres[4];
        
        $suma = 64 + 128;
        echo '<br>La suma es: ' . $suma;

        $division=$numero/$dia;
        echo '<br>La division es: ' . $division;

        $resto=$numero%$dia;
        echo '<br>El resto es: ' . $resto;

        $potencia=$numero**$dia;
        echo '<br>La potencia es: ' . $potencia;

        $verdadero = true;
        $falso = false;

        echo ($verdadero);
        echo ($falso);
    ?>
</body>
</html>