<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="bootstrap/js/bootstrap.js" defer></script>
    <title>Cadastro de funcionário</title>
</head>

<?php

include 'connection.php';
$id = $_GET['id'];
$sql = "SELECT * FROM `funcionario` WHERE id = $id";

$search = mysqli_query($connecion, $sql);


while ($array = mysqli_fetch_array($search)) {
    $name = $array['name'];
    $email =  $array['email'];
    $address =  $array['address'];
    $number =  $array['number'];
    $complement =  $array['complement'];
    $state =  $array['state'];
    $city =  $array['city'];
    $zip =  $array['zip'];



?>


    <body>
        <div class="container-sm">

            <form action="_updated.php" method="post" class="row g-3">

                <div class="mb-3">
                    <label for="inputName" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="inputName" name="inputName" value="<?php echo $name ?>">
                    <input type="number" class="form-control" id="id" name="id" value="<?php echo $id ?>" style="display:none">
                </div>
                <div class="md-3">
                    <label for="inputEmail" class="form-label">Email</label>
                    <input type="email" class="form-control" id="inputEmail" name="inputEmail" value="<?php echo $email ?>">
                </div>
                <div class="md-3">
                    <label for="inputAddress" class="form-label">Endereço</label>
                    <input type="text" class="form-control" id="inputAddress" name="inputAddress" value="<?php echo $address ?>">
                </div>
                <div class="col-md-2">
                    <label for="inputNumber" class="form-label">Número</label>
                    <input type="number" class="form-control" id="inputNumber" name="inputNumber" value="<?php echo $number ?>">
                </div>
                <div class="col-md-10">
                    <label for="inputComplement" class="form-label">Complemento</label>
                    <input type="text" class="form-control" id="inputComplement" name="inputComplement" value="<?php echo $complement ?>">
                </div>
                <div class="col-md-4">
                    <label for="inputState" class="form-label">Estado</label>
                    <select id="inputState" class="form-select" name="inputState">
                        <option selected><?php echo $state ?></option>
                        <option>São Paulo</option>
                        <option>Rio de Janeiro</option>
                        <option>Minas Gerais</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="inputCity" class="form-label">Cidade</label>
                    <input type="text" class="form-control" id="inputCity" name="inputCity" value="<?php echo $city ?>">
                </div>
                <div class="col-md-2">
                    <label for="inputZip" class="form-label">CEP</label>
                    <input type="text" class="form-control" id="inputZip" name="inputZip" value="<?php echo $zip ?>">
                </div>
            <?php } ?>
            <div class="col-12">
                <input href="_updated.php" type="submit" class="btn btn-primary" value="Atualizar">
            </div>
            </form>
        </div>

    </body>

</html>