<?php var_dump($_GET)?>
<div class="container">
	<form  action="UpdateVehicule.php" method="post">
    <div class="form-group">
	    <label for="exampleInputEmail1">ID</label>
	    <input type="text" class="form-control" name="id_vehicule" value="<?php echo $_GET['id_vehicule']?>">
	  </div>
	  <div class="form-group">
	    <label for="exampleInputEmail1">Marque</label>
	    <input type="text" class="form-control" name="marque">
	  </div>
	  <div class="form-group">
	    <label for="exampleInputEmail1">Modele</label>
	    <input type="text" class="form-control" name="modele">
	  </div> 
	  <div class="form-group">
	    <label for="exampleInputEmail1">Couleur</label>
	    <input type="text" class="form-control" name="couleur">
	  </div> <div class="form-group">
	    <label for="exampleInputEmail1">Immatriculation</label>
	    <input type="text" class="form-control" name="immatriculation">
	  </div> 
    <button type="submit" class="btn btn-light" name="submit">Modifier Vehicule</button>
	</form>
</div>

