<?php


header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-headers: *");


use Service\AnneeService;
use Service\DiplomeService;
use Service\NiveauService;
use Service\SpecialiteService;

require '../../Connection/connection.php';
require '../../DOA/dao.php';
require '../../Service/NiveauService.php';
require '../../Service/DiplomeService.php';
require '../../Service/SpecialiteService.php';
require '../../Service/AnneeService.php';




$requesMethod = $_SERVER['REQUEST_METHOD'];
$requestUri = $_SERVER['REQUEST_URI'];
$niveauService = new niveauService();
$diplomeService = new DiplomeService();
$specialiteService = new SpecialiteService();
$anneeService = new AnneeService();


    if ($requesMethod == 'GET' and  explode('/', $requestUri)[4]=='niveaux') {
        echo json_encode($niveauService->getNiveaux());
    }

    if ($requesMethod == 'GET' and  explode('/', $requestUri)[4]=='diplomes') {
        echo json_encode($diplomeService->getDiplomes());
    }

    if ($requesMethod == 'GET' and  explode('/', $requestUri)[4]=='specialites') {
        echo json_encode($specialiteService->getSpecialites());
    }

    if ($requesMethod == 'GET' and  explode('/', $requestUri)[4]=='annee-scolaires') {
    echo json_encode($anneeService->getAnnees());
    }