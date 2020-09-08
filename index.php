
<meta charset="utf-8" />
<?php

	require_once 'Vues/header.html';
//require_once 'Vues/afficherConducteur.php';
require_once 'Controlleurs/ConducteurControlleur.php';

$conducteur = new ConducteurController();

 $conducteur->afficherConducteur();

$conducteur->ajouterConducteur();

?>