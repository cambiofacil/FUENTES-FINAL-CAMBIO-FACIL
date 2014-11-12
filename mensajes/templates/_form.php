<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('mensajes/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id_mensaje='.$form->getObject()->getIdMensaje() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields(false) ?>
          &nbsp;<a href="<?php echo url_for('mensajes/index') ?>">Back to list</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'mensajes/delete?id_mensaje='.$form->getObject()->getIdMensaje(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Save" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><?php echo $form['id_usuarioenvia']->renderLabel() ?></th>
        <td>
          <?php echo $form['id_usuarioenvia']->renderError() ?>
          <?php echo $form['id_usuarioenvia'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['id_usuariorecibe']->renderLabel() ?></th>
        <td>
          <?php echo $form['id_usuariorecibe']->renderError() ?>
          <?php echo $form['id_usuariorecibe'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['mensaje']->renderLabel() ?></th>
        <td>
          <?php echo $form['mensaje']->renderError() ?>
          <?php echo $form['mensaje'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['fecha']->renderLabel() ?></th>
        <td>
          <?php echo $form['fecha']->renderError() ?>
          <?php echo $form['fecha'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['informe_abuso']->renderLabel() ?></th>
        <td>
          <?php echo $form['informe_abuso']->renderError() ?>
          <?php echo $form['informe_abuso'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>
