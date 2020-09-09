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
//var_dump($_POST['prenom']);
			//	$id_conducteur = $conducteur->setId_conducteur($_POST['id_conducteur']);
				$prenom = $conducteur->setPrenom($_POST['prenom']);
                $nom = $conducteur->setNom($_POST['nom']);
                
				$conducteur->insert($prenom, $nom);
			}
    }
    public function afficherConducteur(){
        $conducteur = new Conducteur();

        $affichage = $conducteur->list();
      

      require_once "./Vues/Conducteur/list.php";
     
    }

    public function show($id_conducteur)
	{
		$conducteur = new Conducteur();

		$conducteurById = $conducteur->findById($id_conducteur, 'conducteur');

		require_once "./Vues/Conducteur/edit.php";

		if(isset($_POST['submit'])){
			foreach ($conducteurById as $value) {
				
				$prenom = $value->setPrenom($_POST['prenom']);

			$nom = $value->setNom($_POST['nom']);

			$value->update($id_conducteur, $prenom,
				$nom);
			}

    }
    }
}
?>