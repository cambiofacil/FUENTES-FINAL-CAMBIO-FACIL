<h1>Apinteresess List</h1>

<table>
  <thead>
    <tr>
      <th>Id interes</th>
      <th>Id usuario</th>
      <th>Id categoria</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($apinteresess as $apintereses): ?>
    <tr>
      <td><a href="<?php echo url_for('intereses/edit?id_interes='.$apintereses->getIdInteres()) ?>"><?php echo $apintereses->getIdInteres() ?></a></td>
      <td><?php echo $apintereses->getIdUsuario() ?></td>
      <td><?php echo $apintereses->getIdCategoria() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('intereses/new') ?>">New</a>
