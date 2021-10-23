
 <?php
    $idade = $_POST['valor'];
    if ($idade < 18){
        echo "Não tem idade suficiente";
    }elseif ($idade >= 18 && $idade < 21) {
        echo "Pode fazer carteira AB";
    } else {
        echo "Pode fazer carteira AB e D";
    }
 ?>

<html>
    <br> <br>
    <a href="index.html">
        <input type="button" value="voltar">
</html>