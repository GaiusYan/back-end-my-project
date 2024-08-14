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




