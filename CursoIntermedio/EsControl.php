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
            if(condicion){
                Bloque de instrucciones
            }
                
            if(condicion){
                Bloque de instrucciones
            }else if(condicion){
                Bloque de instrucciones
            }else{
                Bloque de instrucciones
            }


             if(condicion): 
                Bloque de instrucciones
            endif;
                

        */
        $numero =5;
        
        if($numero>3){
            echo ("El numero es mayor de 3");
        }else if($numero==1){
            echo ("El numero es 1");
        }else{
            echo ("El numero no es 1 ni mayor de 3");
        }

        $numero =10;
        
        if(!($numero>20)){
            echo ("El numero es menor de ");
        }


        /*SWITCH
        switch($numero){
            case 1:
                Bloque de instrucciones
                break;
            case 2:
                Bloque de instrucciones
                break;
            case 3:
                Bloque de instrucciones
                break;
            default:
                Bloque de instrucciones

            switch($numero):
                case 1:
                    Bloque de instrucciones
                    break;
                case 2:
                    Bloque de instrucciones
                    break;
                case 3:
                    Bloque de instrucciones
                    break;
                default:
                    Bloque de instrucciones
        
        
        */
        
        $opcion=4;
        switch($opcion){    
            case 1:
                echo ("La opcion es 1");
                break;
            case 2:
                echo ("La opcion es 2");
                break;
            case 3:
                echo ("La opcion es 3");
                break;
            default:
                echo ("La opcion no es valida");
        }

        switch($opcion):
            case 1:?>
                <h1>La opcion es 1</h1>
                <?php break;
            case 2:?>
                <h2>La opcion es 2</h2>
                <?php break;
            case 3:?>
                <h3>La opcion es 3</h3>
                <?php break;
            default:?>
                <p>La opcion no es valida</p>
                <?php endswitch;
           
    ?>
</body>
</html>