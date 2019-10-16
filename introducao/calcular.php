<?php

    // ENTRADA -> form.html, METODO -> get (via url)
    $n1 = $_GET['numero1'];
    $n2 = $_GET['numero2'];

    // PROCESSAMENTO
    $resultado = $n1 + $n2;

    // SAÍDA
    echo $resultado;
?>