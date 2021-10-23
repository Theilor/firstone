<?php

    $num1 = $_POST['valor1'];
    $num2 = $_POST['valor2'];
    $num3 = $_POST['valor3'];
    $num4 = $_POST['valor4'];
    $num5 = $_POST['valor5'];
    
    $som = $num1 + $num2 + $num3 + $num4 + $num5;
    $med = $som / 5;

    echo "Primeiros dois numeros são: $num1 e $num2 e a média da soma de todos é $med ";

?>