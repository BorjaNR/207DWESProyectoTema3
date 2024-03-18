<!DOCTYPE html>
<html>
    <head>
        <title>ejercicio17</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <link rel="stylesheet" href="../webroot/css/main.css"/>
    <style>
        .butacas {
            display: inline-block;
            width: 6.30%;
            height: 3%;
            border: 1px solid black;
            color: white;
            background-color: green;
        }
        .ocupado {
            display: inline-block;
            width: 6.30%;
            height: 3%;
            border: 1px solid black;
            color: white;
            background-color: red;
        }
    </style>
</head>

<body>
    <header class="text-center bg-secondary" style="height: 125px">
        <h3>17. Inicializar un array (bidimensional con dos índices numéricos) donde almacenamos el nombre de las personas que tienen reservado el asiento 
            en un teatro de 20 filas y 15 asientos por fila. (Inicializamos el array ocupando únicamente 5 asientos). 
            Recorrer el array con distintas técnicas (foreach(), while(), for()) para mostrar los asientos ocupados en cada fila y las personas que lo ocupan.</h3>
    </header>
    <main style="margin-bottom: 650px" class="text-center fs-5">
        <div class="container mt-3 text-center">
            <div class="row">
                <div class="col mb-5">
                    <?php
                    /**
                     * @author Borja Nuñez Refoyo
                     * @version 2.0 
                     * @since 11/03/2024
                     */
                    //Ahora lo recorremos el array con 2 bucles for
                    //La variable '$fila' la utilizo para contar las 20 filas
                    for ($fila = 1; $fila < 21; $fila++) {
                        //La variable '$asiento' la utilizo para contar los asientos 15 en las 20 filas
                        for ($asiento = 1; $asiento < 16; $asiento++) {
                            //Iniciamos cada asiento a NULL
                            $aButacas[$fila][$asiento] = null;
                        }
                    }
                    //Ocupo los asientos que quiera
                    $aButacas[1][5] = "Heraclio";
                    $aButacas[3][6] = "Borja";
                    $aButacas[7][7] = "Ismael";
                    $aButacas[8][12] = "Alvaro";
                    $aButacas[15][5] = "Carlos";
                    $aButacas[14][7] = "Rebeca";

                    echo("<h2>FOR()</h2>");
                    //Ahora imprimo la disposición de los asientos con un bucle for
                    for ($fila = 1; $fila < 21; $fila++) {
                        for ($asiento = 1; $asiento < 16; $asiento++) {
                            //Con esta variable preguntamos el estado de la butaca
                            $ocupante = !is_null($aButacas[$fila][$asiento]) ? $aButacas[$fila][$asiento] : null;
                            //Dependiendo del estado modificará la clase del div y con ello su color de fondo
                            if (!is_null($ocupante)) {
                                echo "<div class='ocupado'>[$fila][$asiento] $ocupante</div>";
                            } else {
                                echo "<div class='butacas'>[$fila][$asiento] vacio</div>";
                            }
                        }
                    }

                    echo("<h2>FOR EACH()</h2>");
                    //Ahora imprimo la disposición de los asientos con un bucle for
                    foreach ($aButacas as $numFila => $aFila) {
                        foreach ($aFila as $numAsiento => $ocupante) {
                            $ocupante = !is_null($ocupante) ? $ocupante : null;
                            if (!is_null($ocupante)) {
                                echo "<div class='ocupado'>[$numFila][$numAsiento] $ocupante</div>";
                            } else {
                                echo "<div class='butacas'>[$numFila][$numAsiento] vacio</div>";
                            }
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
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

