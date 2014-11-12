<h1>Apvaloracionesdonacions List</h1>

<table>
  <thead>
    <tr>
      <th>Id val donac</th>
      <th>Id usr valorado</th>
      <th>Id catalog medall</th>
      <th>Cant donaciones</th>
      <th>Fecha valora donac</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($apvaloracionesdonacions as $apvaloracionesdonacion): ?>
    <tr>
      <td><a href="<?php echo url_for('valoracionesDonacion/edit?id_val_donac='.$apvaloracionesdonacion->getIdValDonac()) ?>"><?php echo $apvaloracionesdonacion->getIdValDonac() ?></a></td>
      <td><?php echo $apvaloracionesdonacion->getIdUsrValorado() ?></td>
      <td><?php echo $apvaloracionesdonacion->getIdCatalogMedall() ?></td>
      <td><?php echo $apvaloracionesdonacion->getCantDonaciones() ?></td>
      <td><?php echo $apvaloracionesdonacion->getFechaValoraDonac() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('valoracionesDonacion/new') ?>">New</a>
