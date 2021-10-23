<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action= "ex2.php" method="post">
        <p>
            Insira um numero para obter sua taboada: </br> </br><input type="text" name="valor1">
        </p>
        <p>
            <input type="submit" value="Confirmar">
        </p>
</br>
    </form>
</body>

</html>

<?php

    $a = $_POST['valor1'];

    for ($i=1 ; $i <= 10; $i++){
        $r = $i * $a;
        echo "$a x $i = $r </br>";
    }

?>