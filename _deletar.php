<?php
include 'connection.php';
$id = $_GET['id'];
$sql = "DELETE FROM `funcionario` WHERE id = $id";

$delete = mysqli_query($connecion, $sql);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletado</title>
</head>

<body>
    <center>
        <h3>Cadastro do funcionário apagado com sucesso</h3>

        <a href="listEmployee.php" class="btn btn-primary">Voltar</a>
    </center>

</body>

</html>