<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('nuevoCanton/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id_canton='.$form->getObject()->getIdCanton() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table class="table table-striped table-bordered">
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields(false) ?>
          &nbsp;<a href="<?php echo url_for('nuevoCanton/index') ?>">Ver reporte</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Eliminar', 'nuevoCanton/delete?id_canton='.$form->getObject()->getIdCanton(), array('method' => 'delete', 'confirm' => 'Esta seguro?')) ?>
          <?php endif; ?>
            <center><input type="submit" value="Guardar" class="btn btn-success" /></center>
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><?php echo $form['id_provincia']->renderLabel() ?></th>
        <td>
          <?php echo $form['id_provincia']->renderError() ?>
          <?php echo $form['id_provincia'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['nombre_cant']->renderLabel() ?></th>
        <td>
          <?php echo $form['nombre_cant']->renderError() ?>
          <?php echo $form['nombre_cant'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>
