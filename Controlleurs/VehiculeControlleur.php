<?php
	
	require_once './Models/Vehicule.php';
	
	class VehiculeController
	{
		public function ajouterVehicule()
		{
			//var_dump("Mon rôle est d'ajouter des livres en base ");
			require_once './Vues/ajouterVehicule.html';

			$vehicule = new Vehicule();
			if (isset($_POST['submit'])) {

			//	$id_conducteur = $conducteur->setId_conducteur($_POST['id_conducteur']);
				$marque = $vehicule->setMarque($_POST['marque']);
                $modele = $vehicule->setModele($_POST['modele']);
                $couleur = $vehicule->setCouleur($_POST['couleur']);
                $immatriculation = $vehicule->setImmatriculation($_POST['immatriculation']);
				$vehicule->insert($marque, $modele, $couleur, $immatriculation);
			}
    }
    public function afficherVehicule(){
        $vehicule = new Vehicule();

        $affichage = $vehicule->list();
      

      require_once "./Vues/afficherVehicule.php";
     
    }
	}
?>