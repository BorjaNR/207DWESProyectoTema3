<!DOCTYPE html>
<html>
    <head>
        <title>ejercicio17</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <link rel="stylesheet" href="../webroot/css/main.css"/>
    <body>
        <header class="text-center bg-secondary" style="height: 75px">
            <h3>17. Inicializar un array (bidimensional con dos índices numéricos) donde almacenamos el nombre de las personas que tienen reservado el asiento en un teatro de 20 filas y 15 asientos por fila. (Inicializamos el array ocupando únicamente 5 asientos). Recorrer el array con distintas técnicas (foreach(), while(), for()) para mostrar los asientos ocupados en cada fila y las personas que lo ocupan.</h3>
        </header>
        <main style="margin-bottom: 75px" class="text-center fs-4">
            <?php
            /**
             * @author Borja Nuñez Refoyo
             * @version 2.0 
             * @since 11/03/2024
             */
            //inicializamos un array con los dias de la semana
            $aSueldos = [
                'Lunes' => 75,
                'Martes' => 60,
                'Miercoles' => 62,
                'Jueves' => 53,
                'Viernes' => 50,
                'Sabado' => 56,
                'Domingo' => 66,
            ];
            
            //Inicializo una variable que se trata de un acumulador para dar el total de la semana en sueldo recibido
            $totalSueldo = 0;
            
            //Recorro el array con un foreach
            foreach($aSueldos as $dia => $sueldo){
                //Mostramos el dia y el sueldo geenrado ese dia y luego acumulamos el sueldo en la varaible previamente inicializada
                echo "Sueldo $dia: $sueldo <br>";
                $totalSueldo+=$sueldo;
            }
            //Mostramos el total de todos los sueldos de la semana
            echo "El total de sueldos de la semana es: $totalSueldo";
            ?>
        </main>
        <footer class="text-center bg-secondary fixed-bottom py-3">
            <div class="container">
                <div class="row">
                    <div class="col text-center text-white">
                        <p>&copy;2023-24 IES los Sauces. Todos los derechos reservados. <a href="../../index.html" style="color: white; text-decoration: none">Borja Nuñez Refoyo</a></p>
                    </div>
                    <div class="col text-end">
                        <a title="Inicio" href="../indexProyectoTema3.html"><img src="../webroot/images/casa.png" width="40" height="40" alt="Inicio"/></a>
                        <a title="GitHub" href="https://github.com/BorjaNR/207DWESProyectoTema3" target="blank"><img src="../webroot/images/git.png" width="40" height="40" alt="GitHub"/></a>
                    </div>
                </div>
            </div>
        </footer>
        <script src="./webroot/js/mainjs.js" ></script>
    </body>
</html>

