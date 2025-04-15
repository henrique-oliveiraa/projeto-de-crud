
<?php

class CarroModel {

    public $id, $Marca, $nomeCarro, $Quilometros, $Ano;

    public $rows; //variavel para armazenar todas as linha do banco de dados

    public function save()
    {
        include 'DAO/CarroDAO.php'; //conexao com a DAO

        $dao = new CarroDAO();


        if (empty($this->id)) {
            $dao->insert($this);
        } else {
            $dao->update($this);
        }
    }

    public function getAllRows()
    {
        include 'DAO/CarroDAO.php';

        $dao = new CarroDAO();

        $this->rows = $dao->select();
    }


    public function getById(int $id)
    {
        include "DAO/CarroDAO.php";

        $dao = new CarroDAO();

        $obj = $dao->selectByid($id);

        return ($obj) ? $obj : new CarroModel();

        //return $dao->selectById();

        /* if ($obj) {
            return $obj;
        } else {
            return new CarroModel();
        }*/
    }


    public function delete(int $id)
    {
        include 'DAO/CarroDAO.php';

        $dao = new CarroDAO();
        $dao->delete($id);
    }
}
