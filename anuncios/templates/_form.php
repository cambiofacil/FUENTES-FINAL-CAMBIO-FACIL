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
        <th><?php echo $form['estado_anuncio']->renderLabel() ?></th>
        <td>
          <?php echo $form['estado_anuncio']->renderError() ?>
          <?php echo $form['estado_anuncio'] ?>
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
      <tr>
        <th><?php echo $form['provincia_usr']->renderLabel() ?></th>
        <td>
          <?php echo $form['provincia_usr']->renderError() ?>
          <?php echo $form['provincia_usr'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['ciudad_usr']->renderLabel() ?></th>
        <td>
          <?php echo $form['ciudad_usr']->renderError() ?>
          <?php echo $form['ciudad_usr'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['id_nc_usuario']->renderLabel() ?></th>
        <td>
          <?php echo $form['id_nc_usuario']->renderError() ?>
          <?php echo $form['id_nc_usuario'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['fecha_anun_rep']->renderLabel() ?></th>
        <td>
          <?php echo $form['fecha_anun_rep']->renderError() ?>
          <?php echo $form['fecha_anun_rep'] ?>
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
            <center><i class="icon-globe"></i><input type="submit" value="Guardar Anuncios" class="btn btn-success"/></center>
            <br/><br/>
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>                  
      <tr>
        <th><div style='position:relative;display:none'><?php echo $form['id_categoria']->renderLabel() ?></div><i class="icon-search"></i> Categoria </th>
        <td>
          <?php echo $form['id_categoria']->renderError() ?>
          <?php echo $form['id_categoria'] ?>
        </td>
      </tr>
      <tr>
        <th><div style='position:relative;display:none'><?php echo $form['imagen_p']->renderLabel() ?></div><i class="icon-camera"></i> Im&aacutegen 1 </th>
        <td>
          <?php echo $form['imagen_p']->renderError() ?>
          <?php echo $form['imagen_p'] ?>
        </td>
      </tr>
      <tr>
        <th><div style='position:relative;display:none'><?php echo $form['imagen_s']->renderLabel() ?></div><i class="icon-camera"></i> Im&aacutegen 2</th>
        <td>
          <?php echo $form['imagen_s']->renderError() ?>
          <?php echo $form['imagen_s'] ?>
        </td>
      </tr>
      <tr>
        <th><div style='position:relative;display:none'><?php echo $form['imagen_t']->renderLabel() ?></div><i class="icon-camera"></i> Im&aacute;gen 3</th>
        <td>
          <?php echo $form['imagen_t']->renderError() ?>
          <?php echo $form['imagen_t'] ?>
        </td>
      </tr>
      <tr>
        <th><div style='position:relative;display:none'><?php echo $form['titulo']->renderLabel() ?></div><i class="icon-bullhorn"></i> T&iacute;tulo</th>
        <td>
          <?php echo $form['titulo']->renderError() ?>
          <?php echo $form['titulo'] ?>
        </td>
      </tr>
      <tr>
        <th><div style='position:relative;display:none'><?php echo $form['estado']->renderLabel() ?></div><i class="icon-wrench"></i> Estado</th>
        <td>
          <?php echo $form['estado']->renderError() ?>
          <?php echo $form['estado'] ?>
        </td>
      </tr>
      <tr>
        <th><div style='position:relative;display:none'><?php echo $form['observaciones']->renderLabel() ?></div><i class="icon-road"></i> Observaciones</th>
        <td>
          <?php echo $form['observaciones']->renderError() ?>
          <?php echo $form['observaciones'] ?>
        </td>
      </tr>
      <tr>
        <th><div style='position:relative;display:none'><?php echo $form['lo_cambiaria_por']->renderLabel() ?></div><i class="icon-refresh"></i> Lo cambiar&iacute;a por</th>
        <td>
          <?php echo $form['lo_cambiaria_por']->renderError() ?>
          <?php echo $form['lo_cambiaria_por'] ?>
        </td>
      </tr>      
    </tbody>
  </table>
</form>
