<?php
    $operando1 = $_GET['operando1'] ?? '';
    $operando2 = $_GET ['operando2'] ?? '';
    $operador = $_GET['operador'] ?? '';
    function calculadora(int $operando1, int $operando2, string $operador): float{
        switch ($operador) {
            case 'mas':
                return $operando1 + $operando2;
                break;
            
            case 'menos':
                return $operando1 - $operando2;
                break;

            case 'por':
                return $operando1 * $operando2;
                break;
            case 'entre':
                return $operando1 / $operando2;
                break;
            default:
                return 0;
                break;    
        }
    }
?>

<!DOCTYPE HTML>
<!--
    Identity by HTML5 UP
    html5up.net | @ajlkn
    Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
    <head>
        <title>Identity by HTML5 UP</title>
        <meta charset="utf-8" />
        <meta name="Referrer" content="no-referrer" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="https://html5up.net/uploads/demos/identity/assets/css/main.css" />
        <noscript><link rel="stylesheet" href="https://html5up.net/uploads/demos/identity/assets/css/noscript.css" /></noscript>
    </head>
    <body class="is-preload">

        <!-- Wrapper -->
            <div id="wrapper">

                <!-- Main -->
                    <section id="main">
                        <header>
                            <span class="avatar"><img src="https://es.calcuworld.com/wp-content/uploads/sites/2/2013/02/matematicas-150x150.png" alt="" /></span>
                            <h2>Calculadora B&aacute;sica</h2>
                            <form name="calculator">
                            <!-- Escribe el resultado como valor de la propiedad value -->
                                <input type="textfield" name="ans" value="<?php 
                                    if ($operando1 === '' || $operando2 === '' || $operador === '') {
                                        echo "Sin valores";
                                    }else{
                                        echo $operando1.' '.$operador.' '.$operando2.' '.'='.' '.calculadora($operando1, $operando2, $operador);
                                    }
                                ?>">
                                <br>
                                <input type="button" value="1">
                                <input type="button" value="2">
                                <input type="button" value="3">
                                <input type="button" value="+" name="mas">
                                <br>
                                <input type="button" value="4">
                                <input type="button" value="5">
                                <input type="button" value="6">
                                <input type="button" value="-" name="menos">
                                <br>
                                <input type="button" value="7">
                                <input type="button" value="8">
                                <input type="button" value="9">
                                <input type="button" value="*" name="por">
                                <br>
                                <input type="button" value="0">
                                <input type="reset" value="c">
                                <input type="button" value="/" name="entre">
                                <input type="button" value="=">
                            </form>
                            
                        </header>

                        <footer>
                            <ul class="icons">
                            </ul>
                        </footer>
                    </section>

                <!-- Footer -->
                    <footer id="footer">
                        <ul class="copyright">
                            <li>Copyright Jane Doe</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
                        </ul>
                    </footer>

            </div>

        <!-- Scripts -->
        <!-- Curso 2024/2025 -->

            <script>
                if ('addEventListener' in window) {
                    window.addEventListener('load', function() { document.body.className = document.body.className.replace(/\bis-preload\b/, ''); });
                    document.body.className += (navigator.userAgent.match(/(MSIE|rv:11\.0)/) ? ' is-ie' : '');
                }
            </script>

    </body>
</html>
