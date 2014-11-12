<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('anuncios/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id_anuncio='.$form->getObject()->getIdAnuncio() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
<div style='position:relative;display:none'>
    <table>
        <tr>
        <th><?php echo $form['id_usuario']->renderLabel() ?></th>
        <td>
          <?php echo $form['id_usuario']->renderError() ?>
          <?php echo $form['id_usuario'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['fecha_public']->renderLabel() ?></th>
        <td>
          <?php echo $form['fecha_public']->renderError() ?>
          <?php echo $form['fecha_public'] ?>
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
        <th><?php echo $form['imagen_p']->renderLabel() ?></th>
        <td>
          <?php echo $form['imagen_p']->renderError() ?>
          <?php echo $form['imagen_p'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['imagen_s']->renderLabel() ?></th>
        <td>
          <?php echo $form['imagen_s']->renderError() ?>
          <?php echo $form['imagen_s'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['imagen_t']->renderLabel() ?></th>
        <td>
          <?php echo $form['imagen_t']->renderError() ?>
          <?php echo $form['imagen_t'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['estado']->renderLabel() ?></th>
        <td>
          <?php echo $form['estado']->renderError() ?>
          <?php echo $form['estado'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['observaciones']->renderLabel() ?></th>
        <td>
          <?php echo $form['observaciones']->renderError() ?>
          <?php echo $form['observaciones'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['lo_cambiaria_por']->renderLabel() ?></th>
        <td>
          <?php echo $form['lo_cambiaria_por']->renderError() ?>
          <?php echo $form['lo_cambiaria_por'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['nro_visitas']->renderLabel() ?></th>
        <td>
          <?php echo $form['nro_visitas']->renderError() ?>
          <?php echo $form['nro_visitas'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['nro_comentarios']->renderLabel() ?></th>
        <td>
          <?php echo $form['nro_comentarios']->renderError() ?>
          <?php echo $form['nro_comentarios'] ?>
        </td>
      </tr>
    </table>
</div>
  <table class="table table-striped table-bordered">
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields(false) ?>
          <?php if (!$form->getObject()->isNew()): ?>
          <?php endif; ?>
            <br/><br/>
            <center><input type="submit" value="Guardar Estado" class="btn btn-success"/></center>
            <br/><br/>
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>                  
      
      <tr>
        <th><div style='position:relative;display:none'><?php echo $form['titulo']->renderLabel() ?></div><i class="icon-bullhorn"></i> T&iacute;tulo </th>
        <td>
          <?php echo $form['titulo']->renderError() ?>
          <?php echo $form['titulo'] ?>
        </td>
      </tr>      
      <tr>
        <th><div style='position:relative;display:none'><?php echo $form['estado_anuncio']->renderLabel() ?></div><i class="icon-wrench"></i> Estado</th>
        <td>
          <?php echo $form['estado_anuncio']->renderError() ?>
          <?php echo $form['estado_anuncio'] ?>
        </td>
      </tr>
    </tbody>
  </table>    
</form>
