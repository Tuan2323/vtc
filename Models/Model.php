<?php
class Model
{
public function getConnection()
	{
		try{
			$bdd = new PDO('mysql:host=localhost;port=3309;dbname=vtc', "root", "");
		}
		catch ( PDOException $e){
            print "Erreur";
            die;
		}

		return $bdd;
    }
    public function findById($id,$table)
    {
        $bdd = $this->getConnection();
        $sql = $bdd->prepare('SELECT * FROM $table WHERE id_".$table."= '.$id);

        $sql->execute();

		$resultat = $sql->fetchAll(PDO::FETCH_CLASS, $table);

		return $resultat;
    }
}
    ?>