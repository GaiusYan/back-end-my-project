<?php

namespace Service;

use DOA\UtilisateurRepository;
use model\Session;
use model\Utilisateur;

require '../../DOA/UtilisateurRepository.php';
require '../../Service/SessionService.php';
class UtilisateurService
{

    public function getUser($utilisateur){

        $utilisateurRepository = new UtilisateurRepository();

        $utilisateurExist = ($utilisateurRepository->findByUsernameAndPassword($utilisateur->getUsername(), $utilisateur->getPassword()));


        if (count($utilisateurExist) > 0) {

            $utilisateurOne = $utilisateurRepository->findByUsernameAndPassword($utilisateur->getUsername(), $utilisateur->getPassword());
            $utilisateurOnline = new Utilisateur();

            $utilisateurOnline->setUsername($utilisateurOne[0]->username);
            $utilisateurOnline->setPassword($utilisateurOne[0]->password);
            $utilisateurOnline->setId($utilisateurOne[0]->id);
            $utilisateurOnline->setConnected($utilisateurOne[0]->connected);
            $utilisateurOnline->setRole($utilisateurOne[0]->role);
            $utilisateurOnline->setDisconnected($utilisateurOne[0]->disabled);

            if ( $utilisateurOnline->getConnected() == 1 and $utilisateurOnline->getDisconnected() == 0) {

                $session = new Session();
                $sessionService = new SessionService();
                session_start();
                $_SESSION['id'] = $utilisateurOnline->getId();
                $_SESSION['username'] = $utilisateurOnline->getUsername();
                $_SESSION['role'] = $utilisateurOnline->getRole();
                $_SESSION['sessionKey'] = session_id();

                $session->setSessionUsername($_SESSION['id']);
                $session->setSessionKey($_SESSION['sessionKey']);
                $session->setSessionDate(Date('Y-m-d'));
                $session->setSessionStatus(1);
                $sessionService->enregistrerSession($session);

                echo json_encode(['status'=>'200','sessionId'=>$_SESSION['id'],'sessionUsername'=>$_SESSION['username'],'sessionRole'=>$_SESSION['role'],'sessionKey'=>$_SESSION['sessionKey']]);
            }else{
                echo json_encode(['status'=>'404','title'=>'Attention','message'=>'Ce compte n\'est pas actif']);
            }

        }else{
            echo json_encode(['status'=>'404','title'=>'Attention','message'=>'Vérifier que les informations saisies sont correctes']);
        }

    }


    public function getUserById($id)
    {
        $userRepository = new UtilisateurRepository();
        $userRepository->findById($id);
    }

}