<?php

namespace Service;

use Cassandra\Date;
use DOA\CandidatRepository;
use MongoDB\BSON\Int64;

require '../../DOA/CandidatRepository.php';


class CandidatService
{
    public function envoyerCandidature($candidat)
    {
        $candidatRepository = new CandidatRepository();

        if(Date('Y') - explode('-',$candidat->getDateNaissance())[0] >= 18){

            $candidatEmailExist = $candidatRepository->findByEmail($candidat->getEmail());

            if($candidatEmailExist <= 0){

                if ($candidat->getDiplome() != null || $candidat->getDiplome() != ""){

                    if ($candidat->getSpecialite() != "" || $candidat->getSpecialite() != null){

                        if ($candidat->getNiveau() != "" || $candidat->getNiveau() != null){

                            if ($candidat->getSexe() != "" || $candidat->getSexe() != null){

                                if ($candidat->getMention() != "" || $candidat->getMention() != null){

                                    $candidatRepository->create($candidat);
                                    echo json_encode(['status' => '200','title' => 'Fécilication','message' =>'Canditature envoyée avec succès, vous avez recevoir un message sur votre adresse mail']);
                                }else{

                                    echo json_encode(['status' => '300','title' => 'Attention','message' =>"Selectionner une mention",'value' =>'niveauEtud']);
                                }

                            }else{

                                echo json_encode(['status' => '300','title' => 'Attention','message' =>"Selectionner le sexe",'value' =>'niveauEtud']);
                            }

                        }else{
                            echo json_encode(['status' => '300','title' => 'Attention','message' =>"Selectionner le niveau d'etude",'value' =>'niveauEtud']);
                        }
                    }else{
                        echo json_encode(['status' => '300','title' => 'Attention','message' =>'Veuillez selectionner une spécialite','value' =>'specialite']);
                    }
                }else{
                    echo json_encode(['status' => '300','title' => 'Attention','message' =>'Veuillez selectionner le diplome','value' =>'diplome']);
                }
            }else{
                echo json_encode(['status' => '300','title' => 'Attention','message' =>'Cette adresse email est déjà utilisée']);
            }
        }else{
            echo json_encode(['status' => '300','title' => 'Attention','message' =>'Le candidat doit impérativement avoir au moins 18']);
        }

    }

}