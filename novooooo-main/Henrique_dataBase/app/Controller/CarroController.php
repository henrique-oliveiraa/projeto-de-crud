
<?php

class CarroController
{

    public static function index()
    {

        include 'Model/CarroModel.php';

        $model = new CarroModel();
        $model->getAllRows();

        include 'View/modulos/carro/ListaCarro.php';
    }

    public static function form()
    {

        include 'Model/CarroModel.php';

        $model = new CarroModel();

        if (isset($_GET['id'])) {
            $model = $model->getById((int) $_GET['id']);
        }


        include 'view/modulos/Carro/FormCarro.php';
    }

    public static function save()
    {

     

        include 'Model/CarroModel.php';

        $model = new CarroModel();


        $model->id = $_POST['id'];
        $model->Marca = $_POST['Marca'];
        $model->nomeCarro = $_POST['nomeCarro'];
        $model->Quilometros = $_POST['Quilometros'];
        $model->Ano = $_POST['Ano'];

        $model->save();

        header("Location: /Carro");
    }

    public static function delete()
    {
        include "Model/CarroModel.php";

        $model = new CarroModel();
        $model->delete((int) $_GET['id']);

        header("Location: /Carro");
    }
}


?>

