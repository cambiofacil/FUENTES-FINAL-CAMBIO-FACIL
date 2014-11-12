<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('nuevaFraseMotiv/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id_frases_motiv='.$form->getObject()->getIdFrasesMotiv() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
<div style='position:relative;display:none'>
    <table>
      <tr>
        <th><?php echo $form['fecha_frase_motiv']->renderLabel() ?></th>
        <td>
          <?php echo $form['fecha_frase_motiv']->renderError() ?>
          <?php echo $form['fecha_frase_motiv'] ?>
        </td>
      </tr>
    </table>
</div>
  <table class="table table-striped table-bordered">
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields(false) ?>
          &nbsp;<a href="<?php echo url_for('nuevaFraseMotiv/index') ?>">Ver reporte</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Eliminar', 'nuevaFraseMotiv/delete?id_frases_motiv='.$form->getObject()->getIdFrasesMotiv(), array('method' => 'delete', 'confirm' => 'Esta seguro?')) ?>
          <?php endif; ?>
            <center><input type="submit" value="Guardar" class="btn btn-success" /></center>
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><div style='position:relative;display:none'><?php echo $form['frase_motivacion']->renderLabel() ?></div><i class="icon-camera"></i>Frase </th>
        <td>
          <?php echo $form['frase_motivacion']->renderError() ?>
          <?php echo $form['frase_motivacion'] ?>
        </td>
      </tr>
      <tr>
        <th><div style='position:relative;display:none'><?php echo $form['autor_frase_motiv']->renderLabel() ?></div><i class="icon-camera"></i>Autor </th>
        <td>
          <?php echo $form['autor_frase_motiv']->renderError() ?>
          <?php echo $form['autor_frase_motiv'] ?>
        </td>
      </tr>
      <tr>
        <th><div style='position:relative;display:none'><?php echo $form['estado_frase_motiv']->renderLabel() ?></div><i class="icon-camera"></i>Estado </th>
        <td>
          <?php echo $form['estado_frase_motiv']->renderError() ?>
          <?php echo $form['estado_frase_motiv'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>
