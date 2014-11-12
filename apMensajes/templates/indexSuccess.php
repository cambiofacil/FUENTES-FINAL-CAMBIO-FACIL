<h1>Apmensajess List</h1>

<table>
  <thead>
    <tr>
      <th>Id mensaje</th>
      <th>Id usuarioenvia</th>
      <th>Id usuariorecibe</th>
      <th>Mensaje</th>
      <th>Fecha</th>
      <th>Informe abuso</th>
      <th>Id anuncio</th>
      <th>Estado mensaje</th>
      <th>Nombre usu envia</th>
      <th>Apellido usu envia</th>
      <th>Provincia usu envia</th>
      <th>Ciudad usu envia</th>
      <th>Email usu envia</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($apmensajess as $apmensajes): ?>
    <tr>
      <td><a href="<?php echo url_for('apMensajes/edit?id_mensaje='.$apmensajes->getIdMensaje()) ?>"><?php echo $apmensajes->getIdMensaje() ?></a></td>
      <td><?php echo $apmensajes->getIdUsuarioenvia() ?></td>
      <td><?php echo $apmensajes->getIdUsuariorecibe() ?></td>
      <td><?php echo $apmensajes->getMensaje() ?></td>
      <td><?php echo $apmensajes->getFecha() ?></td>
      <td><?php echo $apmensajes->getInformeAbuso() ?></td>
      <td><?php echo $apmensajes->getIdAnuncio() ?></td>
      <td><?php echo $apmensajes->getEstadoMensaje() ?></td>
      <td><?php echo $apmensajes->getNombreUsuEnvia() ?></td>
      <td><?php echo $apmensajes->getApellidoUsuEnvia() ?></td>
      <td><?php echo $apmensajes->getProvinciaUsuEnvia() ?></td>
      <td><?php echo $apmensajes->getCiudadUsuEnvia() ?></td>
      <td><?php echo $apmensajes->getEmailUsuEnvia() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('apMensajes/new') ?>">New</a>
