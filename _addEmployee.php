<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserção de funcionario</title>
</head>
<body>
    
<?php

include 'connection.php';

$name = $_POST['inputName'];
$email =  $_POST['inputEmail'];
$address =  $_POST['inputAddress'];
$number =  $_POST['inputNumber'];
$complement =  $_POST['inputComplement'];
$state =  $_POST['inputState'];
$city =  $_POST['inputCity'];
$zip =  $_POST['inputZip'];

$sql = "INSERT INTO `funcionario`(`name`, `email`, `address`, `number`, `complement`, `state`, `city`, `zip`) VALUES ('$name','$email','$address',$number,'$complement','$state','$city','$zip')";

$insert = mysqli_query($connecion, $sql);

?>

    <center>
        <h3>Funcionário incluído com sucesso</h3>

        <a href="registerEmployee.php" class="btn btn-primary">Voltar</a>
    </center>

    
</body>
</html>