<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario de Carros</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">

</head>

<body>
  <fieldset>

    <nav class="navbar bg-body-tertiary">
      <div class="container-fluid">
        <h1>Registros de Carros</h1>
      </div>
    </nav>

<style>
  
h1 {
      text-align: center;
    }


</style>



        <form action="/Carro/form/save" method="post">


    <div class="card shadow-sm">
      <div class="card-body">
        <form id="carForm">
          <div class="mb-3">
            <input type="hidden" name="id" readonly value="<?= $model->id ?>">
          </div>
          <div class="mb-3">
            <label for="inputBrand" class="form-label fw-semibold">Marca</label>
            <input type="text" class="form-control" id="Marca" name="Marca" value="<?= $model->Marca ?>" name="Marca" <?= $model->Marca ?>>
          </div>

          <div class="mb-3">
            <label for="inputName" class="form-label fw-semibold">Nome</label>
            <input type="text" class="form-control" id="nomeCarro" name="nomeCarro" value="<?= $model->nomeCarro ?>" name="nomeCarro" <?= $model->nomeCarro ?>>
          </div>

          <div class="mb-3">
            <label for="inputPrice" class="form-label fw-semibold">Quilometros</label>
            <input type="text" class="form-control" id="Quilometros" name="Quilometros" value="<?= $model->Quilometros ?>" name="Quilometros" <?= $model->Quilometros ?>>
          </div>
          <div class="mb-3">
            <label for="inputPrice" class="form-label fw-semibold">Ano</label>
            <input type="text" class="form-control" id="Ano" name="Ano" value="<?= $model->Ano ?>" name="Ano" <?= $model->Ano ?>>
          </div>
          <button type="submit" class="btn btn-primary w-100">Salvar</button>

        </form>
      </div>

  </fieldset>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>

</body>

</html>