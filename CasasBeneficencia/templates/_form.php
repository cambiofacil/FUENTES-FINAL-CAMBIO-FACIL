<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('CasasBeneficencia/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?cod_casas_benef='.$form->getObject()->getCodCasasBenef() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>

<div style='position:relative;display:none'>
    <table>
      <tr>
        <th><?php echo $form['cod_usuario']->renderLabel() ?></th>
        <td>
          <?php echo $form['cod_usuario']->renderError() ?>
          <?php echo $form['cod_usuario'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['fecha_ingreso']->renderLabel() ?></th>
        <td>
          <?php echo $form['fecha_ingreso']->renderError() ?>
          <?php echo $form['fecha_ingreso'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['nro_visitas_cb']->renderLabel() ?></th>
        <td>
          <?php echo $form['nro_visitas_cb']->renderError() ?>
          <?php echo $form['nro_visitas_cb'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['nro_comentarios_cb']->renderLabel() ?></th>
        <td>
          <?php echo $form['nro_comentarios_cb']->renderError() ?>
          <?php echo $form['nro_comentarios_cb'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['estado_cb']->renderLabel() ?></th>
        <td>
          <?php echo $form['estado_cb']->renderError() ?>
          <?php echo $form['estado_cb'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['fecha_cb_rep']->renderLabel() ?></th>
        <td>
          <?php echo $form['fecha_cb_rep']->renderError() ?>
          <?php echo $form['fecha_cb_rep'] ?>
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
            <center><input type="submit" value="Guardar Casa de Beneficencia" class="btn btn-success"/></center>
            <br/><br/>
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>      
      <tr>
        <th><div style='position:relative;display:none'><?php echo $form['nombre']->renderLabel() ?></div><i class="icon-ok"></i> Nombre Casa de Beficencia: </th>
        <td>
          <?php echo $form['nombre']->renderError() ?>
          <?php echo $form['nombre'] ?>
        </td>
      </tr>
      <tr>
        <th><div style='position:relative;display:none'><?php echo $form['descripcion_casa_benef']->renderLabel() ?></div><i class="icon-edit"></i> Descripción: </th>
        <td>
          <?php echo $form['descripcion_casa_benef']->renderError() ?>
          <?php echo $form['descripcion_casa_benef'] ?>
        </td>
      </tr>
      <tr>
        <th><div style='position:relative;display:none'><?php echo $form['mision_cb']->renderLabel() ?></div><i class="icon-chevron-right"></i> Misión: </th>
        <td>
          <?php echo $form['mision_cb']->renderError() ?>
          <?php echo $form['mision_cb'] ?>
        </td>
      </tr>
      <tr>
        <th><div style='position:relative;display:none'><?php echo $form['vision_cb']->renderLabel() ?></div><i class="icon-chevron-right"></i> Visión: </th>
        <td>
          <?php echo $form['vision_cb']->renderError() ?>
          <?php echo $form['vision_cb'] ?>
        </td>
      </tr>
      <tr>
        <th><div style='position:relative;display:none'><?php echo $form['telefono1']->renderLabel() ?></div><i class="icon-headphones"></i> Teléfono 1: </th>
        <td>
          <?php echo $form['telefono1']->renderError() ?>
          <?php echo $form['telefono1'] ?>
        </td>
      </tr>
      <tr>
        <th><div style='position:relative;display:none'><?php echo $form['telefono2']->renderLabel() ?></div><i class="icon-headphones"></i> Teléfono 2: </th>
        <td>
          <?php echo $form['telefono2']->renderError() ?>
          <?php echo $form['telefono2'] ?>
        </td>
      </tr>
      <tr>
        <th><div style='position:relative;display:none'><?php echo $form['telefono3']->renderLabel() ?></div><i class="icon-headphones"></i> Teléfono 3: </th>
        <td>
          <?php echo $form['telefono3']->renderError() ?>
          <?php echo $form['telefono3'] ?>
        </td>
      </tr>
      <tr>
        <th><div style='position:relative;display:none'><?php echo $form['pagina_web_cb']->renderLabel() ?></div><i class="icon-th-list"></i> Página web: </th>
        <td>
          <?php echo $form['pagina_web_cb']->renderError() ?>
          <?php echo $form['pagina_web_cb'] ?>
        </td>
      </tr>
      <tr>
        <th><div style='position:relative;display:none'><?php echo $form['imagen_casa_benef']->renderLabel() ?></div><i class="icon-heart"></i> Logo: </th>
        <td>
          <?php echo $form['imagen_casa_benef']->renderError() ?>
          <?php echo $form['imagen_casa_benef'] ?>
        </td>
      </tr>
      <tr>
        <th><div style='position:relative;display:none'><?php echo $form['provincia']->renderLabel() ?></div><i class="icon-map-marker"></i> Provincia: </th>
        <td>
          <?php echo $form['provincia']->renderError() ?>
          <?php echo $form['provincia'] ?>
        </td>
      </tr>
      <tr>
        <th><div style='position:relative;display:none'><?php echo $form['ciudad']->renderLabel() ?></div><i class="icon-map-marker"></i> Ciudad: </th>
        <td>
          <?php echo $form['ciudad']->renderError() ?>
          <?php echo $form['ciudad'] ?>
        </td>
      </tr>
      <tr>
        <th><div style='position:relative;display:none'><?php echo $form['direccion']->renderLabel() ?></div><i class="icon-map-marker"></i> Dirección: </th>
        <td>
          <?php echo $form['direccion']->renderError() ?>
          <?php echo $form['direccion'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>
