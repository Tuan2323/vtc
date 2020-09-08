<?php
	
	require_once './Models/Conducteur.php';
	
	class ConducteurController
	{
		public function ajouterConducteur()
		{
			//var_dump("Mon rôle est d'ajouter des livres en base ");
			require_once './Vues/ajouterConducteur.html';

			$conducteur = new Conducteur();
			if (isset($_POST['submit'])) {

			//	$id_conducteur = $conducteur->setId_conducteur($_POST['id_conducteur']);
				$prenom = $conducteur->setPrenom($_POST['prenom']);
				$nom = $conducteur->setNom($_POST['nom']);

				$conducteur->insert($prenom, $nom);
			}
    }
    public function afficherConducteur(){
        $conducteur = new Conducteur();

        $affichage = $conducteur->list();
      //$affichage = $conducteur->list();

      require_once "./Vues/afficherConducteur.php";
    }
	}
?>