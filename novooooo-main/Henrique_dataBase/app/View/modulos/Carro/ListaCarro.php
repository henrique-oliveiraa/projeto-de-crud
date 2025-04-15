<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <table>
        <tr>
            <th>Excluir</th>
            <th>ID</th>
            <th>Marca</th>
            <th>Nome</th>
            <th>Quilometros</th>
            <th>Ano</th>
        </tr>
        <?php foreach ($model->rows as $item): ?>
            <tr>
                <td><a href="/Carro/delete?id=<?= $item->id ?>">DELETAR</a></td>
                <td><?= $item->id ?></td>
                <td><a href="/Carro/form?id=<?= $item->id ?>"><?= $item->Marca ?></a></td>
                <td><?= $item->nomeCarro ?></td>
                <td><?= $item->Quilometros ?></td>
                <td><?= $item->Ano ?></td>

            </tr>

        <?php endforeach ?>


        <h1>Lista de Carros</h1>
  <style>
    body {
      font-family: Arial, sans-serif;
      padding: 20px;
      background-color: #f4f4f4;
      background-color: gray;
    }
    h1 {
      text-align: center;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      background-color: #fff;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    th, td {
      padding: 12px;
      border: 1px solid #ddd;
      text-align: center;
    }
    th {
      background-color: #007BFF;
      color: white;
    }
    .delete-button {
      background-color: #dc3545;
      color: white;
      border: none;
      padding: 5px 10px;
      cursor: pointer;
      border-radius: 4px;
    }
    .delete-button:hover {
      background-color: #c82333;
    }
  </style>
    </table>


  
</head>
<body>


