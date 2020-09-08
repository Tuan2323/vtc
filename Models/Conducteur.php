<?php

	/**
	 * 
	 */
class Conducteur
{	
	private $id_conducteur;
	private $prenom;
	private $nom;



	

	

	/**
	 * Get the value of nom
	 */ 
	public function getNom()
	{
		return $this->nom;
	}

	/**
	 * Set the value of nom
	 *
	 * @return  self
	 */ 
	public function setNom($nom)
	{
		$this->nom = $nom;

		return $this;
	}

	/**
	 * Get the value of prenom
	 */ 
	public function getPrenom()
	{
		return $this->prenom;
	}

	/**
	 * Set the value of prenom
	 *
	 * @return  self
	 */ 
	public function setPrenom($prenom)
	{
		$this->prenom = $prenom;

		return $this;
	}

	/**
	 * Get the value of id_conducteur
	 */ 
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

		$sql = $bdd->prepare(" INSERT INTO conducteur (id_conducteur, prenom, nom) VALUES (, '$prenom','$nom')");

		$sql->execute();
		
		if (!$sql->execute()){
			die("Oups, il y'a une erreur dans la requete");
		}

		header("Location: index.php");

	}

    public function list(){
        $bdd = $this->getConnection();
        $sql = $bdd->prepare("SELECT * FROM 'conducteur'");
        $sql->execute();
        $resultat = $sql->fetchALL(PDO::FETCH_CLASS, 'conducteur');
        return $resultat;
    }
	/**
	 * Set the value of id_conducteur
	 *
	 * @return  self
	 */ 
	
}

?>