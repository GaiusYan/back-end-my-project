<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-headers: *");

use model\Session;
use model\Utilisateur;
use Service\SessionService;
use Service\UtilisateurService;

require '../../Connection/connection.php';
require '../../model/Personne.php';
require '../../model/Utilisateur.php';
require '../../model/Session.php';
require '../../DOA/dao.php';
require '../../Service/UtilisateurService.php';


$requesMethod = $_SERVER['REQUEST_METHOD'];
$requestUri = $_SERVER['REQUEST_URI'];
$utilisateurService = new UtilisateurService();

    if ($requesMethod == 'POST' and explode('/', $requestUri)[4] == 'authentification') {

        $authentification = json_decode(file_get_contents('php://input'), true);
        $utilisateur = new Utilisateur();

        //var_dump($authentification);
        $utilisateur->setUsername($authentification['username']);
        $utilisateur->setPassword($authentification['password']);

        $utilisateurService->getUser($utilisateur);

    }

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