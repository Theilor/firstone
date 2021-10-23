<?php

$a = $_POST['valor1'];
$b = $_POST['valor2'];

$soma = $a + $b;

if($soma > 30){
    $soma2 = 10 + $soma;
    echo "$soma + 10 = $soma2";
}
else{
    $soma2 = $soma - 5;
    echo "$soma - 5 = $soma2";
}
?>


<html>
<br> <br>
<a href="index.html">
    <input type="button" value="voltar">
</html>
