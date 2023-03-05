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

<body>
  <div class="container-sm">

    <form action="_addEmployee.php" method="post" class="row g-3">

      <div class="mb-3">
        <label for="inputName" class="form-label">Nome</label>
        <input type="text" class="form-control" id="inputName" name="inputName" placeholder="Nome completo">
      </div>
      <div class="md-3">
        <label for="inputEmail" class="form-label">Email</label>
        <input type="email" class="form-control" id="inputEmail" name="inputEmail" placeholder="email-de-contato@provedor.com.br">
      </div>
      <div class="md-3">
        <label for="inputAddress" class="form-label">Endereço</label>
        <input type="text" class="form-control" id="inputAddress" name="inputAddress" placeholder="Avenida/Rua/Praça">
      </div>
      <div class="col-md-2">
        <label for="inputNumber" class="form-label">Número</label>
        <input type="number" class="form-control" id="inputNumber" name="inputNumber">
      </div>
      <div class="col-md-10">
        <label for="inputComplement" class="form-label">Complemento</label>
        <input type="text" class="form-control" id="inputComplement" name="inputComplement">
      </div>
      <div class="col-md-4">
        <label for="inputState" class="form-label">Estado</label>
        <select id="inputState" class="form-select" name="inputState">
          <option selected>estado</option>
          <option>São Paulo</option>
          <option>Rio de Janeiro</option>
          <option>Minas Gerais</option>
        </select>
      </div>
      <div class="col-md-6">
        <label for="inputCity" class="form-label">Cidade</label>
        <input type="text" class="form-control" id="inputCity" name="inputCity">
      </div>
      <div class="col-md-2">
        <label for="inputZip" class="form-label">CEP</label>
        <input type="text" class="form-control" id="inputZip" name="inputZip">
      </div>
      <div class="col-12">
        <button type="submit" class="btn btn-primary">Cadastrar</button>
      </div>
    </form>
    <center>
      <a href="index.php">Home</a>
    </center>
  </div>

</body>

</html>