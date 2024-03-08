<!DOCTYPE html>
<html>
    <head>
        <title>ejercicio01</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../webroot/css/main.css"/>
    </head>
    <body>
        <header class="text-center bg-secondary" style="height: 75px">
            <h3>1. Inicializar variables de los distintos tipos de datos básicos(string, int, float, bool) y mostrar los datos por pantalla (echo, print, printf, print_r,var_dump).</h3>
        </header>
        <main style="margin-bottom: 75px">
            <?php
            /**
             * @author Borja Nuñez Refoyo
             * @version 2.0 
             * @since 07/03/2023
             */
            $cadena = "Mi primer String";
            $entero = 17;
            $real = 18.9;
            $interruptor = true;
            //Mostrar las variables con echo
            echo '<h1>Adios</h1>';
            echo '<h2>Con echo:</h2>';
            echo '<p>La variable <span style="color:greenyellow">$cadena</span> es de tipo <span style="color:greenyellow">' . gettype($cadena) . '</span> y tiene el valor <span style="color:greenyellow">' . " $cadena</span></p>";
            echo '<p>La variable <span style="color:greenyellow">$entero</span> es de tipo <span style="color:greenyellow">' . gettype($entero) . '</span> y tiene el valor <span style="color:greenyellow">' . " $entero</span></p>";
            echo '<p>La variable <span style="color:greenyellow">$real</span> es de tipo <span style="color:greenyellow">' . gettype($real) . '</span> y tiene el valor <span style="color:greenyellow">' . " $real</span></p>";
            echo '<p>La variable <span style="color:greenyellow">$interruptor</span> es de tipo <span style="color:greenyellow">' . gettype($interruptor) . '</span> y tiene el valor <span style="color:greenyellow">' . " $interruptor</span></p>";
            //Mostrar las variables con echo()
            echo ('<h2>Con echo():</h2>');
            echo ('<p>La variable <span style="color:greenyellow">$cadena</span> es de tipo <span style="color:greenyellow">' . gettype($cadena) . '</span> y tiene el valor <span style="color:greenyellow">' . " $cadena</span></p>");
            echo ('<p>La variable <span style="color:greenyellow">$entero</span> es de tipo <span style="color:greenyellow">' . gettype($entero) . '</span> y tiene el valor <span style="color:greenyellow">' . " $entero</span></p>");
            echo ('<p>La variable <span style="color:greenyellow">$real</span> es de tipo <span style="color:greenyellow">' . gettype($real) . '</span> y tiene el valor <span style="color:greenyellow">' . " $real</span></p>");
            echo ('<p>La variable <span style="color:greenyellow">$interruptor</span> es de tipo <span style="color:greenyellow">' . gettype($interruptor) . '</span> y tiene el valor <span style="color:greenyellow">' . " $interruptor</span></p>");
            //Mostrar las variables con print
            print '<h2>Con print:</h2>';
            print '<p>La variable <span style="color:greenyellow">$cadena</span> es de tipo <span style="color:greenyellow">' . gettype($cadena) . '</span> y tiene el valor <span style="color:greenyellow">' . " $cadena</span></p>";
            print '<p>La variable <span style="color:greenyellow">$entero</span> es de tipo <span style="color:greenyellow">' . gettype($entero) . '</span> y tiene el valor <span style="color:greenyellow">' . " $entero</span></p>";
            print '<p>La variable <span style="color:greenyellow">$real</span> es de tipo <span style="color:greenyellow">' . gettype($real) . '</span> y tiene el valor <span style="color:greenyellow">' . " $real</span></p>";
            print '<p>La variable <span style="color:greenyellow">$interruptor</span> es de tipo <span style="color:greenyellow">' . gettype($interruptor) . '</span> y tiene el valor <span style="color:greenyellow">' . " $interruptor</span></p>";
            //Mostrar las variables con print()
            print('<h2>Con print():</h2>');
            print('<p>La variable <span style="color:greenyellow">$cadena</span> es de tipo <span style="color:greenyellow">' . gettype($cadena) . '</span> y tiene el valor <span style="color:greenyellow">' . " $cadena</span></p>");
            print('<p>La variable <span style="color:greenyellow">$entero</span> es de tipo <span style="color:greenyellow">' . gettype($entero) . '</span> y tiene el valor <span style="color:greenyellow">' . " $entero</span></p>");
            print('<p>La variable <span style="color:greenyellow">$real</span> es de tipo <span style="color:greenyellow">' . gettype($real) . '</span> y tiene el valor <span style="color:greenyellow">' . " $real</span></p>");
            print('<p>La variable <span style="color:greenyellow">$interruptor</span> es de tipo <span style="color:greenyellow">' . gettype($interruptor) . '</span> y tiene el valor <span style="color:greenyellow">' . " $interruptor</span></p>");
            //Mostrar las variables con printf()
            printf('<h2>Con printf():</h2>');
            printf('<p>La variable <span style="color:greenyellow">$cadena</span> es de tipo <span style="color:greenyellow">' . gettype($cadena) . '</span> y tiene el valor <span style="color:greenyellow">' . " $cadena</span></p>");
            printf('<p>La variable <span style="color:greenyellow">$entero</span> es de tipo <span style="color:greenyellow">' . gettype($entero) . '</span> y tiene el valor <span style="color:greenyellow">' . " $entero</span></p>");
            printf('<p>La variable <span style="color:greenyellow">$real</span> es de tipo <span style="color:greenyellow">' . gettype($real) . '</span> y tiene el valor <span style="color:greenyellow">' . " $real</span></p>");
            printf('<p>La variable <span style="color:greenyellow">$interruptor</span> es de tipo <span style="color:greenyellow">' . gettype($interruptor) . '</span> y tiene el valor <span style="color:greenyellow">' . " $interruptor</span></p>");
            //Mostrar las variables con sprintf()
            sprintf('<h2>Con sprintf():</h2>');
            sprintf('<p>La variable <span style="color:greenyellow">$cadena</span> es de tipo <span style="color:greenyellow">' . gettype($cadena) . '</span> y tiene el valor <span style="color:greenyellow">' . " $cadena</span></p>");
            sprintf('<p>La variable <span style="color:greenyellow">$entero</span> es de tipo <span style="color:greenyellow">' . gettype($entero) . '</span> y tiene el valor <span style="color:greenyellow">' . " $entero</span></p>");
            sprintf('<p>La variable <span style="color:greenyellow">$real</span> es de tipo <span style="color:greenyellow">' . gettype($real) . '</span> y tiene el valor <span style="color:greenyellow">' . " $real</span></p>");
            sprintf('<p>La variable <span style="color:greenyellow">$interruptor</span> es de tipo <span style="color:greenyellow">' . gettype($interruptor) . '</span> y tiene el valor <span style="color:greenyellow">' . " $interruptor</span></p>");
            //Mostrar las variables con print_r()
            print_r('<h2>Con print_r():</h2>');
            print_r('<p>La variable <span style="color:greenyellow">$cadena</span> es de tipo <span style="color:greenyellow">' . gettype($cadena) . '</span> y tiene el valor <span style="color:greenyellow">' . " $cadena</span></p>");
            print_r('<p>La variable <span style="color:greenyellow">$entero</span> es de tipo <span style="color:greenyellow">' . gettype($entero) . '</span> y tiene el valor <span style="color:greenyellow">' . " $entero</span></p>");
            print_r('<p>La variable <span style="color:greenyellow">$real</span> es de tipo <span style="color:greenyellow">' . gettype($real) . '</span> y tiene el valor <span style="color:greenyellow">' . " $real</span></p>");
            print_r('<p>La variable <span style="color:greenyellow">$interruptor</span> es de tipo <span style="color:greenyellow">' . gettype($interruptor) . '</span> y tiene el valor <span style="color:greenyellow">' . " $interruptor</span></p>");
            //Mostrar las variables con var_dump()
            var_dump('<h2>Con var_dump():</h2>');
            var_dump('<p>La variable <span style="color:greenyellow">$cadena</span> es de tipo <span style="color:greenyellow">' . gettype($cadena) . '</span> y tiene el valor <span style="color:greenyellow">' . " $cadena</span></p>");
            var_dump('<p>La variable <span style="color:greenyellow">$entero</span> es de tipo <span style="color:greenyellow">' . gettype($entero) . '</span> y tiene el valor <span style="color:greenyellow">' . " $entero</span></p>");
            var_dump('<p>La variable <span style="color:greenyellow">$real</span> es de tipo <span style="color:greenyellow">' . gettype($real) . '</span> y tiene el valor <span style="color:greenyellow">' . " $real</span></p>");
            var_dump('<p>La variable <span style="color:greenyellow">$interruptor</span> es de tipo <span style="color:greenyellow">' . gettype($interruptor) . '</span> y tiene el valor <span style="color:greenyellow">' . " $interruptor</span></p>");
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

