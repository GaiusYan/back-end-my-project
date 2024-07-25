<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-headers: *");


use DOA\CandidatRepository;



require '../DOA/CandidatRepository.php';


    $requesMethod = $_SERVER['REQUEST_METHOD'];
    $requestUri = $_SERVER['REQUEST_URI'];
    $candidatRepository = new CandidatRepository();

    //GetMapping
    if ($requesMethod == 'GET' and !strpos($requestUri, '?')) {
        echo json_encode($candidatRepository->findAll());
    }
    else
    {
        $id = explode('/', $requestUri)[2];
        echo json_encode($candidatRepository->findById($id));
    }

