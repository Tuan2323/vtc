
<?php
//$bdd = $this->getConnection();

?>




<div class="container">
<form method="post" action="index.php">
<label for="exampleInputEmail1">Vehicule</label>
  <select class="custom-select">
    <option selected>Vehicule</option>
    <option value="1">One</option>
    <option value="2">Two</option>
    <option value="3">Three</option>
  </select>


<label for="exampleInputEmail1">Conducteur</label>
<select class="custom-select">
  <?php
$reponse = $bdd->query('SELECT (prenom,nom) FROM conducteur');
echo "<option selected>conducteur</option> ";
while ($donnees = $reponse->fetch());
{
  ?>
    
    <option value="<?php echo $donnees['prenom']; ?>">1</option>
  <?php
  }
  ?>
  </select>

  
  <button type="submit" class="btn btn-light" name="submit">Ajouter Conducteur</button>
  </form>
  </div>