<!DOCTYPE html>
<html>
    <head>
        <title>ejercicio06</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <link rel="stylesheet" href="../webroot/css/main.css"/>
    <body>
        <header class="text-center bg-secondary" style="height: 75px">
            <h3>6. Operar con fechas: calcular la fecha y el día de la semana de dentro de 60 días.</h3>
        </header>
        <main style="margin-bottom: 75px">
            <?php
            /**
             * @author Borja Nuñez Refoyo
             * @version 2.0 
             * @since 07/03/2024
             */
            //Obtener la fecha actual
            $oFechaActual = new DateTime();

            //Modificamos la fecha actual en 60 dias
            $oFechaActual->modify('+60 days');
            //Creamos una variable que contenga el formato de los dias 
            $nDiaSemana = $oFechaActual->format('w');

            //Creamos un array que contenga los dias de la semana
            $diasSemana = [
                1 => 'Lunes',
                2 => 'Martes',
                3 => 'Miercoles',
                4 => 'Jueves',
                5 => 'Viernes',
                6 => 'Sabado',
                0 => 'Domingo'
            ];

            //Creamos una variable
            $nomDia = $diasSemana[$nDiaSemana];

            //Le damos formato a la fecha en 60 dias
            $fechaEn60Dias = $oFechaActual->format('d-m-Y');

            //Mostramos la fecha en 60 dias con el formato indicado anteriormente y mostramos el nombre del dia que sera en 60 dias
            echo '<h3>La fecha en 60 dias sera: ' . $fechaEn60Dias . "</h3></br>";
            echo '<h3>El dia que sera en 60 dias es: ' . $nomDia . '</h3>';
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

