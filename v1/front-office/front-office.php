<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-headers: *");



use DOA\CandidatRepository;
use model\Candidat;
use model\Response;
use model\Tuteur;
use Service\CandidatService;


require '../../Connection/connection.php';
require '../../DOA/dao.php';
require '../../service/CandidatService.php';
require '../../model/Candidat.php';
require '../../model/Tuteur.php';
require '../../model/Response.php';



    $requesMethod = $_SERVER['REQUEST_METHOD'];
    $requestUri = $_SERVER['REQUEST_URI'];
    $candidatService = new CandidatService();

    if($requesMethod == 'POST'){

        $candidatHeader = json_decode(file_get_contents('php://input'), true);
        $candidat = new Candidat();
        $tuteur = new Tuteur();
        $response = new Response();
        /*
         *
         * Recuperation des informations envoyer par l'interface React
         * Gaius Yan-bena 2024
         */

        $candidat->setNom(htmlspecialchars($candidatHeader['nom']));
        $candidat->setPrenom(htmlspecialchars($candidatHeader['prenom']));
        $candidat->setEmail(htmlspecialchars($candidatHeader['email']));
        $candidat->setAdresse(htmlspecialchars($candidatHeader['adresse']));
        $candidat->setTelephone(htmlspecialchars($candidatHeader['telephone']));
        $candidat->setDateNaissance(htmlspecialchars($candidatHeader['dateNaissance']));
        $candidat->setSexe(htmlspecialchars($candidatHeader['sexe']));
        $candidat->setLieuNaissance(htmlspecialchars($candidatHeader['lieuNaissance']));
        $candidat->setPays(htmlspecialchars($candidatHeader['pays']));
        $candidat->setPasseport(htmlspecialchars($candidatHeader['cni']));
        $candidat->setNiveau(htmlspecialchars($candidatHeader['niveau']));
        $candidat->setDiplome(htmlspecialchars($candidatHeader['diplome']));
        $candidat->setSpecialite(htmlspecialchars($candidatHeader['specialite']));
        $candidat->setDateInscription((date('Y-m-d')));
        $candidat->setAnneeBac(explode("-",$candidatHeader['AnneeBac'])[0]);
        $candidat->setAnneUnivPre($candidatHeader['anneeUnivPrec']);
        $candidat->setMention(htmlspecialchars($candidatHeader['mention']));
        $candidat->setNiveauEtud(htmlspecialchars($candidatHeader['niveauUniv']));
        $candidat->setResultat(htmlspecialchars($candidatHeader['resultat']));
        $candidat->setDernierEtablissement(htmlspecialchars($candidatHeader['dernierEtabl']));
        $candidat->setDernierDiplome(htmlspecialchars($candidatHeader['niveauUniv']));
        $candidat->setNiveauEtudPre($candidatHeader['niveauEtud']);

        $tuteur->setNom(htmlspecialchars($candidatHeader['nomTuteur']));
        $tuteur->setPrenom(htmlspecialchars($candidatHeader['prenomTuteur']));
        $tuteur->setEmail(htmlspecialchars($candidatHeader['emailTuteur']));
        $tuteur->setTelephone(htmlspecialchars($candidatHeader['telTuteur']));
        $candidat->setStatut(0);
        $candidat->setTuteur($tuteur);

        $candidatService->envoyerCandidature($candidat);
        //var_dump($candidat);
        
    }

