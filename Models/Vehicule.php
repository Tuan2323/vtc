<?php

	/**
	 * 
	 */
class Vehicule
{	
	private $id_vehicule;
	private $marque;
	private $modele;
    private $couleur;
    private $immatriculation;
   
    public function getMarque(){
        return $this->marque;
    }
    
    public function SetMarque($marque){
        return $this->marque = $marque;
    }
    public function getModele(){
        return $this->modele;
    }
    
    public function SetModele($modele){
        return $this->modele = $modele;
    }
    public function getCouleur(){
        return $this->couleur;
    }
    
    public function SetCouleur($couleur){
        return $this->couleur = $couleur;
    }
    public function getImmatriculation(){
        return $this->immatriculation;
    }
    
    public function SetImmatriculation($immatriculation){
        return $this->immatriculation = $immatriculation;
    }
    public function getId_vehicule(){
        return $this->id_vehicule;
    }
    
  

    
    public function getConnection()
	{
		try{
			$bdd = new PDO('mysql:host=localhost;port=8889;dbname=vtc', "root", "root");
		}
		catch ( PDOException $e){
			print "Erreur";
		}

		return $bdd;
	}

	public function insert($marque, $modele, $couleur, $immatriculation)
	{
		$bdd = $this->getConnection();

		$sql = $bdd->prepare("INSERT INTO vehicule(marque, modele,coouleur,immat) VALUES ( '$marque', '$modele', '$couleur', '$immatriculation')");

		//$sql->execute();
		
		if (!$sql->execute()){
			die("Oups, il y'a une erreur dans la requete");
		}

		header("Location: index.php");

	}

    public function list(){
        $bdd = $this->getConnection();
        $sql = $bdd->prepare("SELECT * FROM vehicule");
        $sql->execute();
        $resultat = $sql->fetchALL(PDO::FETCH_CLASS,'vehicule');


        return $resultat;
    }
  
	
	
}

?>