<?php
	
	require_once './Models/Association.php';
	
	class AssociationController
	{
		public function ajouterAssociation()
		{
			//var_dump("Mon rôle est d'ajouter des livres en base ");
			require_once './Vues/ajouterAssociation.php';

			$association = new Association();
			if (isset($_POST['submit'])) {

			//	$id_conducteur = $conducteur->setId_conducteur($_POST['id_conducteur']);
				$conducteur = $conducteur->setConducteur($_POST['conducteur']);
                $vehicule = $vehicule->setVehicule($_POST['vehicule']);
                
				$association->insert($conducteur, $vehicule);
			}
    }
    public function afficherAssociation(){
        $association = new Association();

        $affichage = $association->list();
      

      require_once "./Vues/afficherAssociation.php";
     
    }
	}
?>