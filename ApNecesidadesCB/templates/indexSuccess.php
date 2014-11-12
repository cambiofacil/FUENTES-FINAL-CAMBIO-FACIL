<h1>Ap necesidades c bs List</h1>

<table>
  <thead>
    <tr>
      <th>Id necesidad cb</th>
      <th>Cod casa bebef</th>
      <th>Id categoria</th>
      <th>Id det cat nec</th>
      <th>Fecha ingreso</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($ap_necesidades_c_bs as $ap_necesidades_cb): ?>
    <tr>
      <td><a href="<?php echo url_for('ApNecesidadesCB/edit?id_necesidad_cb='.$ap_necesidades_cb->getIdNecesidadCb()) ?>"><?php echo $ap_necesidades_cb->getIdNecesidadCb() ?></a></td>
      <td><?php echo $ap_necesidades_cb->getCodCasaBebef() ?></td>
      <td><?php echo $ap_necesidades_cb->getIdCategoria() ?></td>
      <td><?php echo $ap_necesidades_cb->getIdDetCatNec() ?></td>
      <td><?php echo $ap_necesidades_cb->getFechaIngreso() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('ApNecesidadesCB/new') ?>">New</a>
