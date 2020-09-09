
<meta charset="utf-8" />
<?php

	require_once 'Vues/header.html';
//require_once 'Vues/afficherConducteur.php';



echo"<div class=\"tab-content\">";
require_once 'Controlleurs/ConducteurControlleur.php';
echo" <div class=\"tab-pane fade show active\" id=\"conducteur\" role=\"tabpanel\">";
$conducteur = new ConducteurController();
if (isset($_GET['action'])) {

    if($_GET['action'] == 'modifierConducteur'){
        $conducteur->show($_GET['id_conducteur']);
    }
}else{
 $conducteur->afficherConducteur();

$conducteur->ajouterConducteur();
}

echo "</div>";
echo" <div class=\"tab-pane\" id=\"vehicule\" role=\"tabpanel\">";

require_once 'Controlleurs/VehiculeControlleur.php';

$vehicule = new VehiculeController();

$vehicule->afficherVehicule();

$vehicule->ajouterVehicule();
echo "</div>";
echo" <div class=\"tab-pane\" id=\"association\" role=\"tabpanel\">";
require_once 'Controlleurs/AssociationControlleur.php';

$association = new AssociationController();

$association->afficherAssociation();

$association->ajouterAssociation();
echo "</div>";
?>