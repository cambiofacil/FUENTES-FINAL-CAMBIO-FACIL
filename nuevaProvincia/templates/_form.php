<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('nuevaProvincia/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id_provincia='.$form->getObject()->getIdProvincia() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table class="table table-striped table-bordered">
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields(false) ?>
          &nbsp;<a href="<?php echo url_for('nuevaProvincia/index') ?>">Ver reporte</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Eliminar', 'nuevaProvincia/delete?id_provincia='.$form->getObject()->getIdProvincia(), array('method' => 'delete', 'confirm' => 'Esta seguro?')) ?>
          <?php endif; ?>
            <center><input type="submit" value="Guardar" class="btn btn-success" /></center>
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><?php echo $form['nombre_prov']->renderLabel() ?></th>
        <td>
          <?php echo $form['nombre_prov']->renderError() ?>
          <?php echo $form['nombre_prov'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>
