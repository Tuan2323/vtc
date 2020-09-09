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
      foreach ($affichage as $conducteur) {
        echo "<tr>";
        echo "<td>".$conducteur->getId_conducteur()."</td>";
        echo "<td>".$conducteur->getPrenom()."</td>";
        echo "<td>".$conducteur->getNom()."</td>";
        echo "<td><a href='?action=modifierConducteur&id_conducteur=".$conducteur->getId_conducteur()."'><img src='./Ressources/images/updated.png' width='50'></a>
        <img src='./Ressources/images/delete.png' width='20'>
        </td>";
        echo "</tr>";
      }
    ?>
  </tbody>
</table>