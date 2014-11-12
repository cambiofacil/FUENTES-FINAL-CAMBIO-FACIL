<h1>Apcatalogomedallass List</h1>

<table>
  <thead>
    <tr>
      <th>Id catalogo medall</th>
      <th>Nombre medall</th>
      <th>Descripcion medall</th>
      <th>Estado medall</th>
      <th>Cant donaciones</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($apcatalogomedallass as $apcatalogomedallas): ?>
    <tr>
      <td><a href="<?php echo url_for('nuevaMedalla/edit?id_catalogo_medall='.$apcatalogomedallas->getIdCatalogoMedall()) ?>"><?php echo $apcatalogomedallas->getIdCatalogoMedall() ?></a></td>
      <td><?php echo $apcatalogomedallas->getNombreMedall() ?></td>
      <td><?php echo $apcatalogomedallas->getDescripcionMedall() ?></td>
      <td><?php echo $apcatalogomedallas->getEstadoMedall() ?></td>
      <td><?php echo $apcatalogomedallas->getCantDonaciones() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('nuevaMedalla/new') ?>">New</a>
