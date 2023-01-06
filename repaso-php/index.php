<h1>Codigo HTML</h1>

<?php

    # Esto va a imprimir:
    echo "<h1>Codigo PHP</h1>";
    print("hola");

    // Esto no se interpreta

    /*
        muchas
        líneas
        de comentario
    */

    echo "<!--COMENTARIO HTML-->";

    # Variables
    $nombre = existeParametro("nombre", false);

    $texto = "Repaso de PHP con $nombre";

    $altura = existeParametro("altura", true);

    $textofinal =  "<h1>" . $texto . ", su altura es:" . $altura . "cm</h1>";

    echo $textofinal;
    echo $textofinal;
    echo $textofinal;
    $textofinal .= "Te he troleado my bro";
    echo $textofinal;

    # GET
    echo "<hr>";
    $nombre = existeParametro("nombre", false);

    # Condiciones
    if($altura >= 180){
        echo '<h3 style="background:green; color: white;">Eres una persona alta</h3>';
    } else {
        echo "<h3>Eres una persona bajita</h3";
    }

#Funciones 
function existeParametro($parametro, $numero){
    if (isset($_GET[$parametro])) { # Si existe la variable nombre por GET
        $valor = $_GET[$parametro];
    } else {
        $valor = "Texto defecto";

        if($numero){
            $valor = 180;
        }

    }


    return $valor;

}

    # Arrays
    $personas = ["Víctor", "Fran", "Paco", "Juan"];

    echo $personas[1];

?>

<h1>Listado</h1>
<ul>
    <?php
        foreach ($personas as $nombre){
            echo "<li>$nombre</li>";
        }
    ?>
</ul>