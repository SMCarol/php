<?php

    // ENTRADA -> form.html, METODO -> get (via url)
    $n1 = $_GET['nota1'];
    $n2 = $_GET['nota2'];
    $n3 = $_GET['nota3'];

    // PROCESSAMENTO
    $resultado = $n1 + $n2 + $n3;

    // SAÍDA
    echo $resultado;


?>