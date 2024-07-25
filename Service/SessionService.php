<?php

namespace Service;

use DOA\SessionRepository;
use DOA\UtilisateurRepository;
use model\Utilisateur;

require '../../DOA/SessionRepository.php';
class SessionService
{

    public function enregistrerSession($session){
        $sessionRepository = new SessionRepository();
        $sessionRepository->create($session);
    }

    public function rechercherSession($session){
        $sessionRepository = new SessionRepository();
        $sessionExist =  $sessionRepository->findSessionKeyAndUserId($session->getSessionKey(), $session->getId());

       if(count($sessionExist) > 0){

           if($sessionExist[0]->statut == 1){

               echo json_encode(['status'=>'200','message'=>'Authorization']);
           }else{
               echo json_encode(['status'=>'404','message'=>'Session Expired']);
           }

       }else {
           echo json_encode(['status'=>'404','message'=>'Session not found']);
       }
    }

    public function quitterSession($session){
        $sessionRepository = new SessionRepository();
    }

}