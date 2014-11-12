<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('valoracionesDonacion/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id_val_donac='.$form->getObject()->getIdValDonac() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields(false) ?>
          &nbsp;<a href="<?php echo url_for('valoracionesDonacion/index') ?>">Back to list</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'valoracionesDonacion/delete?id_val_donac='.$form->getObject()->getIdValDonac(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Save" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><?php echo $form['id_usr_valorado']->renderLabel() ?></th>
        <td>
          <?php echo $form['id_usr_valorado']->renderError() ?>
          <?php echo $form['id_usr_valorado'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['id_catalog_medall']->renderLabel() ?></th>
        <td>
          <?php echo $form['id_catalog_medall']->renderError() ?>
          <?php echo $form['id_catalog_medall'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['cant_donaciones']->renderLabel() ?></th>
        <td>
          <?php echo $form['cant_donaciones']->renderError() ?>
          <?php echo $form['cant_donaciones'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['fecha_valora_donac']->renderLabel() ?></th>
        <td>
          <?php echo $form['fecha_valora_donac']->renderError() ?>
          <?php echo $form['fecha_valora_donac'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>
