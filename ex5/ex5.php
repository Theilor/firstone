<?php

    $nota1 = $_POST['valor1'];
    $nota2 = $_POST['valor2'];
    $nota3 = $_POST['valor3'];
    $nota4 = $_POST['valor4'];
    
    $med = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
    
    if($med >= 7) echo "Aprovado com nota $med";
    else echo "Reprovado com nota $med";
?>