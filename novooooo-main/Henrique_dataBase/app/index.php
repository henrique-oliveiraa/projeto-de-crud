<?php

include 'Controller/CarroController.php';


$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);


switch ($url) {
    case '/':
        echo "Pagina inicial - 🚗";
        break;

    case '/Carro':  
        CarroController::index();
        break;

    case '/Carro/form':
        CarroController::form();
        break;

    case '/Carro/form/save':
        CarroController::save();
        break;

    case '/Carro/delete':
        CarroController::delete();
        break;

    default:
        echo "Erro 404";
        break;
}
