<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <?php

class Personne {
    protected $nom;
    protected $prenom;
    protected $dateNaissance;

    public function __construct($nom, $prenom, $dateNaissance) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = $dateNaissance;
    }

    public function presenter() {
        return "Je m'appelle " . $this->nom . " " . $this->prenom ;
    }

    public function age() {
        $dateNaissance = new DateTime($this->dateNaissance);
        $aujourdHui = new DateTime();
        $difference = $dateNaissance->diff($aujourdHui);
        return $difference->y;
    }

    public function decrirePersonne() {
        return $this->presenter() . ", j'ai " . $this->age() . " ans. <br>";
    }
}

class PersonneAvecLieuNaissance extends Personne {
    protected $lieuNaissance;

    public function __construct($nom, $prenom, $dateNaissance, $lieuNaissance) {
        parent::__construct($nom, $prenom, $dateNaissance);
        $this->lieuNaissance = $lieuNaissance;
    }

    public function decrirePersonne() {
        return parent::decrirePersonne() . " Je suis né(e) à " . $this->lieuNaissance . "."."<br>";
    }
}

class Etudiant extends Personne {
    private $identifiant;

    public function __construct($nom, $prenom, $dateNaissance, $identifiant) {
        parent::__construct($nom, $prenom, $dateNaissance);
        $this->identifiant = $identifiant;
    }

    public function getIdentifiant() {
        return $this->identifiant;
    }

    public function setIdentifiant($identifiant) {
        $this->identifiant = $identifiant;
    }

    public function estBoursier() {
        return $this->age() < 23 && $this->age() > 18;
    }

    public function afficherEtudiant() {
        return "Etudiant " . $this->presenter() . ", identifiant : " . $this->identifiant."<br>";
    }
}

        $personne1 = new Personne("Zine", "Salma", "2003-03-05");
        $personne2 = new PersonneAvecLieuNaissance("Haffou", "Imane", "2002-07-15", "LAaayoune");
        $etudiant1 = new Etudiant("Haffou", "Imane", "2002-07-15", "ID123");

        echo $personne1->decrirePersonne() . "\n";
        echo $personne2->decrirePersonne() . "\n";
        echo $etudiant1->afficherEtudiant() . "\n";
        ?>
</body>
</html>    