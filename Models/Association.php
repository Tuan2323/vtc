<?php

	/**
	 * 
	 */
class Association
{	
	private $id_association;
	private $conducteur;
	private $vehicule;



	public function getConducteur(){
        return $this->conducteur;
    }
    
    public function SetConducteur($conducteur){
        return $this->nconducteurom = $conducteur;
    }

    public function getVehicule(){
        return $this->vehicule;
    }
    
    public function SetVehicule($vehicule){
        return $this->vehicule = $vehicule;
    }


	public function getId_association()
	{
		return $this->id_association;
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

	public function insert($conducteur, $vehicule)
	{
		$bdd = $this->getConnection();

		$sql = $bdd->prepare("INSERT INTO association(conducteur, vehicule) VALUES ( '$conducteur','$vehicule')");

		//$sql->execute();
		
		if (!$sql->execute()){
			die("Oups, il y'a une erreur dans la requete");
		}

		header("Location: index.php");

	}

    public function list(){
        $bdd = $this->getConnection();
        $sql = $bdd->prepare("SELECT * FROM association");
        $sql->execute();
        $resultat = $sql->fetchALL(PDO::FETCH_CLASS,'association');


        return $resultat;
    }
  
	
	
}

?>