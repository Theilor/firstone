<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action= "ex1.php" method="post">
        <p>
            Insira seu cargo: </br> <input type="text" name="valor1">
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

    switch ($a){
        case "aluno":
            echo "Você é um aluno!";
            break;
        case "professor": 
            echo "Você é um professor!";
            break;
        case "diretor":
            echo "Você é um diretor!";
            break;
        case "faxineiro":
            echo "Você é um faxineiro";
            break;
        case "coordenador ";
            echo "Você é um coordenador";
            break;
        case "segurança";
            echo "Você é um segurança";
        default:
        echo "Cargo $a inexistente, insira cargo valido!";
    }

?>