<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../webroot/css/main.css"/>
        <title>Ejercicio futbol</title>
    </head>
    <body>
        <header class="text-center bg-secondary text-white" style="height: 125px">
            <h3>27. Ejercicio Futbol</h3>
        </header>
        <main style="margin-bottom: 75px">
            <?php
            //Creo e inicializo el array tridimensional
            $aLiga = [
                "Castrogonzalo FC" => [
                    1 => [
                        "Nombre" => "Jose",
                        "Apellidos" => "Lorenzo Vazquez",
                        "Fecha de nacimiento" => "2001-07-22",
                        "Posicion" => "Portero",
                        "Numero de goles" => 0
                    ],
                    2 => [
                        "Nombre" => "Martin",
                        "Apellidos" => "Gargaras Cantinpas",
                        "Fecha de nacimiento" => "1999-09-21",
                        "Posicion" => "Defensa",
                        "Numero de goles" => 0
                    ],
                    3 => [
                        "Nombre" => "Joel",
                        "Apellidos" => "hernandez Villar",
                        "Fecha de nacimiento" => "2006-08-10",
                        "Posicion" => "Defensa",
                        "Numero de goles" => 0
                    ],
                    4 => [
                        "Nombre" => "Manuel",
                        "Apellidos" => "Villar Pascual",
                        "Fecha de nacimiento" => "2003-09-12",
                        "Posicion" => "Defensa",
                        "Numero de goles" => 0
                    ],
                    5 => [
                        "Nombre" => "Moises",
                        "Apellidos" => "Ferreras Ferrero",
                        "Fecha de nacimiento" => "1980-02-12",
                        "Posicion" => "Centrocampista",
                        "Numero de goles" => 0
                    ],
                ],
                "Atletico Fuentes" => [
                    1 => [
                        "Nombre" => "Mario",
                        "Apellidos" => "Snchez Astorga",
                        "Fecha de nacimiento" => "2001-07-21",
                        "Posicion" => "Portero",
                        "Numero de goles" => 0
                    ],
                    2 => [
                        "Nombre" => "Javier",
                        "Apellidos" => "Garcia Perez",
                        "Fecha de nacimiento" => "1999-03-22",
                        "Posicion" => "Defensa",
                        "Numero de goles" => 0
                    ],
                    3 => [
                        "Nombre" => "Fernando",
                        "Apellidos" => "Valdes Toba",
                        "Fecha de nacimiento" => "2006-08-10",
                        "Posicion" => "Defensa",
                        "Numero de goles" => 0
                    ],
                    4 => [
                        "Nombre" => "Jorge",
                        "Apellidos" => "Feliz Ganado",
                        "Fecha de nacimiento" => "2003-12-09",
                        "Posicion" => "Defensa",
                        "Numero de goles" => 0
                    ],
                    5 => [
                        "Nombre" => "Roberto",
                        "Apellidos" => "Gonzalez Martinez",
                        "Fecha de nacimiento" => "1980-02-12",
                        "Posicion" => "Centrocampista",
                        "Numero de goles" => 0
                    ],
                ]
            ];
            //Muestro la informacion de los 5 jugadores
            foreach ($aLiga as $equipo => $jugadores) {
                echo "<h4>$equipo</h4><br>";
                foreach ($jugadores as $dorsal => $jugador) {
                    echo "$dorsal, {$jugador['Nombre']}<br>";
                }
                echo "<br>";
            }

            //Aumento en 4 el numero de goles del dorsal 2 del Castrogonzalo
            $aLiga["Castrogonzalo FC"][2]["Numero de goles"] += 4;
            $oFechaActual = new DateTime;

            //Vuelvo a mostrar los datos de los jugadores
            foreach ($aLiga as $equipo => $jugadores) {
                echo "<h4>$equipo</h4><br>";
                foreach ($jugadores as $dorsal => $jugador) {
                    $oFechaNacimiento = new DateTime($jugador['Fecha de nacimiento']);
                    echo "$dorsal, {$jugador['Nombre']}<br> Numero de goles: {$jugador['Numero de goles']}<br> Edad:{$oFechaActual->diff($oFechaNacimiento)->y}<br><br>";
                }
                echo "<br>";
            }
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