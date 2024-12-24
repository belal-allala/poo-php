<?php
class utilisateur {
    private $nom;
    private $prenom;
    private $type_utilisateur;

    public function __construct($nom,$prenom,$type){
        $this->nom = $nom;
        $this ->prenom = $prenom;
        $this->type_utilisateur = $type;
    }

    public function afficherNomComplit(){
        return $this->prenom . " " . $this->nom;
    }

    public function changerNom($NOM){
        $this->nom=$NOM;
    }

    public function changerPrenom($PRENOM){
        $this->prenom=$PRENOM;
    }
}

class patient extends utilisateur {
    private $render_vous = [];

    public function prenfreRendezVous($date){
        $this->render_vous[]=$date;
    }
}

class medecin extends utilisateur {
    private $specialite;

    public function __construct($nom,$prenom,$specialite){
        parent::__construct($nom,$prenom,"medecin");
        $this->specialite = $specialite;
    }

    public function consulterPatient($patient){
        return $this->afficherNomComplit() . " " . "doit consulter" . " " . $patient;
    }
}

$patient = new patient("belal","allala","patient");
$medecin = new medecin("ilyas","samir","cotch");
$patient->prenfreRendezVous("1-1-2025");
echo $patient->afficherNomComplit();
echo "\n";
echo $medecin->consulterPatient("belal allala");
?>