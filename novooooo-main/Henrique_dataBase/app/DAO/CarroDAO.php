<?php

class CarroDAO
{

   private $conexao;

   public function __construct()
   {
      $dns = 'mysql:host=localhost:3306;dbname=db_mvc_car';

      $this->conexao = new PDO($dns, 'root', '');
   }

   public function insert(CarroModel $model)
   {

      $sql = "INSERT INTO carros (Marca, nomeCarro, Quilometros, Ano) VALUES (?, ?, ?, ?)";

      $stmt = $this->conexao->prepare($sql);

      $stmt->bindValue(1, $model->Marca);
      $stmt->bindValue(2, $model->nomeCarro);
      $stmt->bindValue(3, $model->Quilometros);
      $stmt->bindValue(4, $model->Ano);

      $stmt->execute();
   }

   public function update(CarroModel $model)
   {
      $sql = "UPDATE carros SET Marca=?, nomeCarro=?, Quilometros=?, Ano=? WHERE id=? ";

      $stmt = $this->conexao->prepare($sql);

      $stmt->bindValue(1, $model->Marca);
      $stmt->bindValue(2, $model->nomeCarro);
      $stmt->bindValue(3, $model->Quilometros);
      $stmt->bindValue(4, $model->Ano);
      $stmt->bindValue(5, $model->id);

      $stmt->execute();
   }

   public function selectByid(int $id)
   {
      include_once 'Model/CarroModel.php';

      $sql = "SELECT *FROM carros WHERE id = ?";

      $stmt = $this->conexao->prepare($sql);
      $stmt->bindValue(1, $id);

      $stmt->execute();


      return $stmt->fetchObject("CarroModel");
   }



   public function select()
   {

      $sql = "SELECT * FROM carros";

      $stmt = $this->conexao->prepare($sql);
      $stmt->execute();

      return $stmt->fetchAll(PDO::FETCH_CLASS);
   }

   public function delete(int $id)
   {
      $sql = "DELETE FROM carros WHERE id = ?";

      $stmt = $this->conexao->prepare($sql);
      $stmt->bindValue(1, $id);
      $stmt->execute();
   }
}
