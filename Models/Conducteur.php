<?php

	/**
	 * 
	 */
class Conducteur
{	
	private $id_conducteur;
	private $prenom;
	private $nom;



	public function getNom(){
        return $this->nom;
    }
    
    public function SetNom($nom){
        return $this->nom = $nom;
    }

    public function getPrenom(){
        return $this->prenom;
    }
    
    public function SetPrenom($prenom){
        return $this->prenom = $prenom;
    }


	public function getId_conducteur()
	{
		return $this->id_conducteur;
    }
    
    public function getConnection()
	{
		try{
			$bdd = new PDO('mysql:host=localhost;port=3309;dbname=vtc', "root", "");
		}
		catch ( PDOException $e){
			print "Erreur";
		}

		return $bdd;
	}

	public function insert($prenom, $nom)
	{
		$bdd = $this->getConnection();

		$sql = $bdd->prepare("INSERT INTO conducteur(prenom, nom) VALUES ( '$prenom','$nom')");

		//$sql->execute();
		
		if (!$sql->execute()){
			die("Oups, il y'a une erreur dans la requete");
		}

		header("Location: index.php");

	}

    public function list(){
        $bdd = $this->getConnection();
        $sql = $bdd->prepare("SELECT * FROM conducteur");
        $sql->execute();
        $resultat = $sql->fetchALL(PDO::FETCH_CLASS,'conducteur');


        return $resultat;
    }
  
	
	
}

?>