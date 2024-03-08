<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/ClientSide/html.html to edit this template
-->
<html>
    <head>
        <title>ejercicio04</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <style>
        body {
                box-sizing: border-box;
                font-family: Verdana;
            }

            header {
                background-color: #3399ff;
                padding: 20px;
                width: 100%;
                font-size: 1rem;
                color: white;
                margin-bottom: 50px
            }
            footer{
                position: absolute;
                bottom: 0;
                background-color: #3399ff;
                color: white;
                width: 100%;height:50px; 
                padding: 20px;
                text-align: center;
                font-size: 1.2rem;
            }
            footer a{
                color: white;
                text-decoration: none;
                margin: 10px;
            }
    </style>
    <body>
        <header>
            <h3>4. Mostrar en tu página index la fecha y hora actual en Oporto formateada en portugués.</h3>
        </header>
        <?php
            /**
                * @author Borja Nuñez Refoyo
                * @version 1.2 
                * @since 01/10/2023
            */
            //Hacemos una función con un array que dependiendo el numero que nos devuelva el format de datetime sea un dia o otro
            function nombreDia ($nDia){
                $aDia = [
                    0 => "Domingo",
                    1 => "Segunda-feira",
                    2 => "Terça-feira",
                    3 => "Quarta-feira",
                    4 => "Quinta-feira",
                    5 => "Sexta-feira",
                    6 => "Sábado"
                ];
                return $aDia[$nDia];
            }
        
            //Hacemos una función con un array que dependiendo el numero que nos devuelva el format de datetime sea un mes o otro
            function nombreMes ($nMes){
                $aMes = [
                    1 => "Janeiro",
                    2 => "Fevereiro",
                    3 => "Março",
                    4 => "Abril",
                    5 => "Maio",
                    6 => "Junho",
                    7 => "Julho",
                    8 => "Agosto",
                    9 => "Setembro",
                    10 => "Outubro",
                    11 => "Novembro",
                    12 => "Dezembro"
                ];
                return $aMes[$nMes];
            }
            
            // Crear una instancia de DateTime con la fecha y hora actual en portugal
            $oFechaActual = new DateTime("Europe/Lisbon");
            
            //Hacemos que la variable nDia y nMes reciba un numero de mes o de dia respectivamente
            $nDia = $oFechaActual->format('w');
            $nMes = $oFechaActual->format('n');
            
            //Ahora creamos una vaiable que sea el nombre del mes llamando a las funciones previamente creadas
            $nomDia = nombreDia($nDia);
            $nomMes = nombreMes($nMes);
            
            // Formatear la fecha y hora actual en portugués
            $fechaLisboa =$nomDia.$oFechaActual->format(' d') . ' de ' . $nomMes . ' de ' . $oFechaActual->format('Y, H:i:s');

            echo'<h3>La hora actual en Oporto es: '.$fechaLisboa.'</h3>';
        ?>
        <footer>
                <a title="Inicio" href="../indexProyectoTema3.html"><img src="../webroot/images/casa.png" width="40" height="40" alt="Inicio"/></a>
                <a title="GitHub" href="https://github.com/BorjaNR" target="blank"><img src="../webroot/images/git.png" width="40" height="40" alt="GitHub"/></a>
                <div>
                    <a>2023-24 IES los Sauces. @Todos los derechos reservados. Borja Nuñez Refoyo</a>
                </div>
        </footer>
    </body>
</html>

