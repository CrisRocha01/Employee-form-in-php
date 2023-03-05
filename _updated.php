<?php

    include 'connection.php';

    $id = $_POST['id'];
    
    $name = $_POST['inputName'];
    $email = $_POST['inputEmail'];
    $address = $_POST['inputAddress'];
    $number = $_POST['inputNumber'];
    $complement = $_POST['inputComplement'];
    $state = $_POST['inputState'];
    $city = $_POST['inputCity'];
    $zip = $_POST['inputZip'];



    $sql = "UPDATE `funcionario` SET `name`='$name',`email`='$email',`address`='$address',`number`=$number,`complement`='$complement',`state`='$state',`city`='$city',`zip`='$zip' WHERE id = $id";

    $update = mysqli_query($connecion, $sql);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizado</title>
</head>
<body>
<center>
        <h3>Cadastro do funcionário atualizado com sucesso</h3>

        <a href="listEmployee.php" class="btn btn-primary">Voltar</a>
    </center>
    
</body>
</html>