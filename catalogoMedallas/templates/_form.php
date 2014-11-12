<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('catalogoMedallas/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id_catalogo_medall='.$form->getObject()->getIdCatalogoMedall() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table class="table table-striped table-bordered">
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields(false) ?>
          &nbsp;<a href="<?php echo url_for('catalogoMedallas/index') ?>">Ver Catalogo</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Eliminar', 'catalogoMedallas/delete?id_catalogo_medall='.$form->getObject()->getIdCatalogoMedall(), array('method' => 'delete', 'confirm' => 'Estas seguro?')) ?>
          <?php endif; ?>
          <center><input type="submit" value="Guardar" class="btn btn-success" /></center>
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><div style='position:relative;display:none'><?php echo $form['nombre_medall']->renderLabel() ?></div><i class="icon-camera"></i> Logo </th>
        <td>
          <?php echo $form['nombre_medall']->renderError() ?>
          <?php echo $form['nombre_medall'] ?>
        </td>
      </tr>
      <tr>
        <th><div style='position:relative;display:none'><?php echo $form['descripcion_medall']->renderLabel() ?></div><i class="icon-bullhorn"></i> Descripción</th>
        <td>
          <?php echo $form['descripcion_medall']->renderError() ?>
          <?php echo $form['descripcion_medall'] ?>
        </td>
      </tr>
      <tr>
        <th><div style='position:relative;display:none'><?php echo $form['estado_medall']->renderLabel() ?></div><i class="icon-wrench"></i> Estado</th>
        <td>
          <?php echo $form['estado_medall']->renderError() ?>
          <?php echo $form['estado_medall'] ?>
        </td>
      </tr>
      <tr>
        <th><div style='position:relative;display:none'><?php echo $form['cant_donaciones']->renderLabel() ?></div><i class="icon-road"></i> Cantidad donaciones</th>
        <td>
          <?php echo $form['cant_donaciones']->renderError() ?>
          <?php echo $form['cant_donaciones'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>
