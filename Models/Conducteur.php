<?php

	/**
	 * 
	 */
    require_once 'Model.php';
class Conducteur extends Model
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
    
   

	public function insert($prenom, $nom)
	{
		$bdd = Model::getConnection();

		$sql = $bdd->prepare("INSERT INTO conducteur(prenom, nom) VALUES ( '$prenom','$nom')");
        var_dump($sql);
		//$sql->execute();
		
		if (!$sql->execute()){
			die("Oups, il y'a une erreur dans la requete");
		}

		header("Location: index.php");

	}

    public function list(){
        $bdd = $this->getConnection();
        $sql = $bdd->prepare("SELECT * FROM conducteur");
        var_dump($sql);
        $sql->execute();
        $resultat = $sql->fetchAll(PDO::FETCH_CLASS,'conducteur');


        return $resultat;
    }
  
	public function update($id_conducteur, $prenom, $nom)
	{
		$bdd = Model::getConnection();

		$sql = $bdd->prepare("UPDATE conducteur SET prenom ='".$prenom."', nom ='".$nom."' WHERE id_conducteur =" .$id_conducteur);
		

		if(!$sql->execute()){
			die("ATTENTION!!!!");
		}

		header("Location: index.php");
	}
	
}

?>