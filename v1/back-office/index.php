<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-headers: *");

use model\Session;
use model\Utilisateur;
use Service\CandidatService;
use Service\SessionService;
use Service\UtilisateurService;

require '../../Connection/connection.php';
require '../../model/Personne.php';
require '../../model/Utilisateur.php';
require '../../model/Session.php';
require '../../DOA/dao.php';
require '../../Service/UtilisateurService.php';
require '../../Service/candidatService.php';


$requesMethod = $_SERVER['REQUEST_METHOD'];
$requestUri = $_SERVER['REQUEST_URI'];
$utilisateurService = new UtilisateurService();
$candidatService = new CandidatService();


    //authentification
    if ($requesMethod == 'POST' and explode('/', $requestUri)[4] == 'authentification') {

        $authentification = json_decode(file_get_contents('php://input'), true);
        $utilisateur = new Utilisateur();

        //var_dump($authentification);
        $utilisateur->setUsername($authentification['username']);
        $utilisateur->setPassword($authentification['password']);

        $utilisateurService->getUser($utilisateur);

    }

    //autorization

    if ($requesMethod == 'POST' and explode('/', $requestUri)[4] == 'authorization') {

        $authorization = json_decode(file_get_contents('php://input'), true);
        $session = new Session();
        $sessionService = new SessionService();
        $session->setId($authorization['sessionId']);
        $session->setSessionUsername($authorization['sessionUsername']);
        $session->setSessionKey($authorization['sessionKey']);
        $session->setSessionUsername($authorization['sessionUsername']);

        $sessionService->rechercherSession($session);


    }


    //traitement demande
    if ($requesMethod =='GET' and explode('/', $requestUri)[4] == 'demande' and explode('/', $requestUri)[5] != null) {

         $candidatService->getCandidat(explode('/', $requestUri)[5]);
    }


    //accepter candidature
    if($requesMethod == 'POST' and explode('/', $requestUri)[4] == 'acceptation-candidature') {
        $acceptation = json_decode(file_get_contents('php://input'), true);

        $id = explode('/', $requestUri)[5];
        $candidatService->acceptCandidature($id);
    }
