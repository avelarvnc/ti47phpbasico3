<?php

    $v = $_GET["valor"];
    $resultado = 0;

    while ($v > 0)
    {
        $resultado += $v;
        $v--;
    }

    echo "<p>Resultado: " . $resultado . ".</p>";

?>
