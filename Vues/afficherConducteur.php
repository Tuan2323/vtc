<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Prenom</th>
        <th scope="col">Nom</th>
        <th scope="col">Modif</th>
        <th scope="col">Suppr</th>
      </tr>
    </thead>
    <tbody>
    <?php
    foreach ($affichage as $conducteur)
    {
      echo "<tr>";
      echo "<td>";
        echo $livre->getId_conducteur();
        echo "<td>";
        echo $livre->getPrenom();
        echo "<td>";
        echo $livre->getNom();
      echo "</td>";
     
      echo "<td> <a href=''> <img src = './Ressources/images/updated.png'> </a> </td>";
      echo "<td> <a href=''><img src = './Ressources/images/delete.jpg'></a></td>";
    
    }
      ?>
    </tbody>
  </table>