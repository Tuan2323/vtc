<?php 
var_dump($_POST);
echo "ok" ;
/*try{
    $bdd = new PDO('mysql:host=localhost;port=3309;dbname=vtc', "root", "");
    var_dump($bdd);
}
catch ( PDOException $e){
    print "Erreur";
}*/

//return $bdd;
var_dump($bdd);
$id_vehicule = $_POST['id_vehicule'];;
$marque = $_POST['marque'];
$modele = $_POST['modele'];
$couleur = $_POST['couleur'];
$immatriculation = $_POST['immatriculation'];
//require_once './Models/Vehicule.php';
var_dump($marque);
$vehicule = new Vehicule();
$vehicule->modifierVehicule($id_vehicule,$marque,$modele,$couleur,$immatriculation);



?>