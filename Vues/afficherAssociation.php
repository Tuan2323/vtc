<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Conducteur</th>
        <th scope="col">Vehicule</th>
        <th scope="col">Modif</th>
        <th scope="col">Suppr</th>
      </tr>
    </thead>
    <tbody>
    <?php
 
    foreach($affichage as $association)


    {
      echo "<tr>";
      echo "<td>";
        echo $association->getId_conducteur();
        echo "<td>";
        echo $association->getPrenom();
        echo "<td>";
       echo $association->getNom();
      echo "</td>";
     
      echo "<td> <a href=''> <img src = './Ressources/images/updated.png'> </a> </td>";
      echo "<td> <a href=''><img src = './Ressources/images/delete.png'></a></td>";
    
    }
      ?>
    </tbody>
  </table>