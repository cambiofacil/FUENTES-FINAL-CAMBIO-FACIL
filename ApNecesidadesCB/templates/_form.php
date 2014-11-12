<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('ApNecesidadesCB/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id_necesidad_cb='.$form->getObject()->getIdNecesidadCb() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields(false) ?>
          &nbsp;<a href="<?php echo url_for('ApNecesidadesCB/index') ?>">Back to list</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'ApNecesidadesCB/delete?id_necesidad_cb='.$form->getObject()->getIdNecesidadCb(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Save" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><?php echo $form['cod_casa_bebef']->renderLabel() ?></th>
        <td>
          <?php echo $form['cod_casa_bebef']->renderError() ?>
          <?php echo $form['cod_casa_bebef'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['id_categoria']->renderLabel() ?></th>
        <td>
          <?php echo $form['id_categoria']->renderError() ?>
          <?php echo $form['id_categoria'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['id_det_cat_nec']->renderLabel() ?></th>
        <td>
          <?php echo $form['id_det_cat_nec']->renderError() ?>
          <?php echo $form['id_det_cat_nec'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['fecha_ingreso']->renderLabel() ?></th>
        <td>
          <?php echo $form['fecha_ingreso']->renderError() ?>
          <?php echo $form['fecha_ingreso'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>
