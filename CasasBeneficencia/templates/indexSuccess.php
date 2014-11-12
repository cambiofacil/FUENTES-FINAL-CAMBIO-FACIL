<h1>Apcasasbeneficencias List</h1>

<table>
  <thead>
    <tr>
      <th>Cod casas benef</th>
      <th>Cod usuario</th>
      <th>Nombre</th>
      <th>Descripcion casa benef</th>
      <th>Direccion</th>
      <th>Telefono1</th>
      <th>Telefono2</th>
      <th>Imagen casa benef</th>
      <th>Provincia</th>
      <th>Ciudad</th>
      <th>Fecha ingreso</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($apcasasbeneficencias as $apcasasbeneficencia): ?>
    <tr>
      <td><a href="<?php echo url_for('CasasBeneficencia/edit?cod_casas_benef='.$apcasasbeneficencia->getCodCasasBenef()) ?>"><?php echo $apcasasbeneficencia->getCodCasasBenef() ?></a></td>
      <td><?php echo $apcasasbeneficencia->getCodUsuario() ?></td>
      <td><?php echo $apcasasbeneficencia->getNombre() ?></td>
      <td><?php echo $apcasasbeneficencia->getDescripcionCasaBenef() ?></td>
      <td><?php echo $apcasasbeneficencia->getDireccion() ?></td>
      <td><?php echo $apcasasbeneficencia->getTelefono1() ?></td>
      <td><?php echo $apcasasbeneficencia->getTelefono2() ?></td>
      <td><?php echo $apcasasbeneficencia->getImagenCasaBenef() ?></td>
      <td><?php echo $apcasasbeneficencia->getProvincia() ?></td>
      <td><?php echo $apcasasbeneficencia->getCiudad() ?></td>
      <td><?php echo $apcasasbeneficencia->getFechaIngreso() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('CasasBeneficencia/new') ?>">New</a>
