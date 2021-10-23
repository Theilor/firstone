 <?php

    $a = $_POST['valor1'];
    $b = $_POST['valor2'];
    $c = $_POST['valor3'];
    $d = $_POST['valor4'];

    $som = $a + $c;
    $mul = $b * $d;
    if($som > $mul) echo "A + C é maior que B x D";
    elseif($mul > $som) echo "B x D é maior que A + C";
    else echo "A + C e B x D são iguais";
?>


<html>
    <br> <br>
    <a href="index.html">
        <input type="button" value="voltar">
</html>
