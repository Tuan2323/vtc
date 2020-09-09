<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Marque</th>
        <th scope="col">Modele</th>
        <th scope="col">Couleur</th>
        <th scope="col">Immatriculation</th>
        <th scope="col">Modif</th>
        <th scope="col">Suppr</th>
      </tr>
    </thead>
    <tbody>
    <?php
 
    foreach($affichage as $vehicule)


    {
      echo "<tr>";
      echo "<td>";
        echo $vehicule->getId_vehicule();
        echo "<td>";
        echo $vehicule->getMarque();
        echo "<td>";
       echo $vehicule->getModele();
      echo "<td>";
      echo $vehicule->getCouleur();
      echo "<td>";
     echo $vehicule->getImmatriculation();
    echo "</td>";
     
      echo "<td> <a href='?action='modifierVehicule&id_conducteur='.$conducteur->getId_conducteur().'> <img src = './Ressources/images/updated.png'> </a> </td>";
      echo "<td> <a href=''><img src = './Ressources/images/delete.png'></a></td>";
    
    }
      ?>
    </tbody>
  </table>