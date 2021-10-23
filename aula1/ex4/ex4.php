<?php

    $num1 = $_POST['valor1'];
    $num2 = $_POST['valor2'];
    $num3 = $_POST['valor3'];
    
    $som = $num1 + $num2 + $num3;
    
    if($som >= 80) echo "Resultdo da soma é maior ou igual a 80";
    else echo "Resultado da soma é inferior a 80";
?>