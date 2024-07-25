<?php

namespace model;

use model\Personne;

require 'Personne.php';

class Candidat extends Personne
{

    private $dateNaissance;
    private $lieuNaissance;
    private $sexe;
    private $passeport;
    private $anneeScolaire;
    private $mention;
    private $niveauEtud;
    private $dernierEtablissement;
    private $resultat;
    private $dateInscription;
    private $niveau;
    private $annee;
    private $tuteur;
    private $specialite;
    private $diplome;
    private $pays;
    private $anneeBac;
    private $dernierDiplome;
    private $statut;
    private $anneUnivPre;
    private $niveauEtudPre;

    /**
     * @return mixed
     */
    public function getNiveauEtudPre()
    {
        return $this->niveauEtudPre;
    }

    /**
     * @param mixed $niveauEtudPre
     */
    public function setNiveauEtudPre($niveauEtudPre): void
    {
        $this->niveauEtudPre = $niveauEtudPre;
    }



    /**
     * @return mixed
     */
    public function getAnneUnivPre()
    {
        return $this->anneUnivPre;
    }

    /**
     * @param mixed $anneUnivPre
     */
    public function setAnneUnivPre($anneUnivPre): void
    {
        $this->anneUnivPre = $anneUnivPre;
    }



    /**
     * @return mixed
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * @param mixed $statut
     */
    public function setStatut($statut): void
    {
        $this->statut = $statut;
    }



    /**
     * @return mixed
     */
    public function getDernierDiplome()
    {
        return $this->dernierDiplome;
    }

    /**
     * @param mixed $dernierDiplome
     */
    public function setDernierDiplome($dernierDiplome): void
    {
        $this->dernierDiplome = $dernierDiplome;
    }


    /**
     * @return mixed
     */
    public function getAnneeBac()
    {
        return $this->anneeBac;
    }

    /**
     * @param mixed $anneeBac
     */
    public function setAnneeBac($anneeBac): void
    {
        $this->anneeBac = $anneeBac;
    }



    /**
     * @return mixed
     */
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * @param mixed $pays
     */
    public function setPays($pays): void
    {
        $this->pays = $pays;
    }



    public function __construct()
    {
    }

    /**
     * @return mixed
     */
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    /**
     * @param mixed $dateNaissance
     */
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;
    }

    /**
     * @return mixed
     */
    public function getLieuNaissance()
    {
        return $this->lieuNaissance;
    }

    /**
     * @param mixed $lieuNaissance
     */
    public function setLieuNaissance($lieuNaissance)
    {
        $this->lieuNaissance = $lieuNaissance;
    }

    /**
     * @return mixed
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * @param mixed $sexe
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;
    }

    /**
     * @return mixed
     */
    public function getPasseport()
    {
        return $this->passeport;
    }

    /**
     * @param mixed $passeport
     */
    public function setPasseport($passeport)
    {
        $this->passeport = $passeport;
    }

    /**
     * @return mixed
     */
    public function getAnneeScolaire()
    {
        return $this->anneeScolaire;
    }

    /**
     * @param mixed $anneeScolaire
     */
    public function setAnneeScolaire($anneeScolaire)
    {
        $this->anneeScolaire = $anneeScolaire;
    }

    /**
     * @return mixed
     */
    public function getMention()
    {
        return $this->mention;
    }

    /**
     * @param mixed $mention
     */
    public function setMention($mention)
    {
        $this->mention = $mention;
    }

    /**
     * @return mixed
     */
    public function getNiveauEtud()
    {
        return $this->niveauEtud;
    }

    /**
     * @param mixed $niveauEtud
     */
    public function setNiveauEtud($niveauEtud)
    {
        $this->niveauEtud = $niveauEtud;
    }

    /**
     * @return mixed
     */
    public function getDernierEtablissement()
    {
        return $this->dernierEtablissement;
    }

    /**
     * @param mixed $dernierEtablissement
     */
    public function setDernierEtablissement($dernierEtablissement)
    {
        $this->dernierEtablissement = $dernierEtablissement;
    }

    /**
     * @return mixed
     */
    public function getResultat()
    {
        return $this->resultat;
    }

    /**
     * @param mixed $resultat
     */
    public function setResultat($resultat)
    {
        $this->resultat = $resultat;
    }

    /**
     * @return mixed
     */
    public function getDateInscription()
    {
        return $this->dateInscription;
    }

    /**
     * @param mixed $dateInscription
     */
    public function setDateInscription($dateInscription)
    {
        $this->dateInscription = $dateInscription;
    }

    /**
     * @return mixed
     */
    public function getNiveau()
    {
        return $this->niveau;
    }

    /**
     * @param mixed $niveau
     */
    public function setNiveau($niveau)
    {
        $this->niveau = $niveau;
    }

    /**
     * @return mixed
     */
    public function getAnnee()
    {
        return $this->annee;
    }

    /**
     * @param mixed $annee
     */
    public function setAnnee($annee)
    {
        $this->annee = $annee;
    }

    /**
     * @return mixed
     */
    public function getTuteur()
    {
        return $this->tuteur;
    }

    /**
     * @param mixed $tuteur
     */
    public function setTuteur($tuteur)
    {
        $this->tuteur = $tuteur;
    }

    /**
     * @return mixed
     */
    public function getSpecialite()
    {
        return $this->specialite;
    }

    /**
     * @param mixed $specialite
     */
    public function setSpecialite($specialite)
    {
        $this->specialite = $specialite;
    }

    /**
     * @return mixed
     */
    public function getDiplome()
    {
        return $this->diplome;
    }

    /**
     * @param mixed $diplome
     */
    public function setDiplome($diplome)
    {
        $this->diplome = $diplome;
    }





}