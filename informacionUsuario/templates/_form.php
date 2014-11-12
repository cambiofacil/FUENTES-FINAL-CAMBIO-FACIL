<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('informacionUsuario/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id_info_com_usu='.$form->getObject()->getIdInfoComUsu() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
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
            <center><input type="submit" value="Guardar Información" class="btn btn-success"/></center>
            <br/><br/>
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>

        <tr>
                <td><center>Provincia:</center></td>
                <td><input type="text" id="txt_prov" name="txt_prov" data-provide="typeahead" placeholder="Ingresa tu provincia"
                data-source='["AZUAY","BOLIVAR","CAÑAR","CARCHI","COTOPAXI","CHIMBORAZO","EL ORO","ESMERALDAS",
                              "GUAYAS","IMBABURA","LOJA","LOS RIOS","MANABI","MORONA SANTIAGO","NAPO","PASTAZA",
                              "PICHINCHA","SANTA ELENA","SANTO DOMINGO DE LOS TSÁCHILAS","TUNGURAHUA","ZAMORA CHINCHIPE",
                              "GALÁPAGOS","SUCUMBIOS","ORELLANA"]'></td>
            </tr>
            <tr>
                <td><center>Ciudad:</center></td>
                <td><input type="text" id="txt_ciudad" name="txt_ciudad" data-provide="typeahead" placeholder="Ingresa tu ciudad"
                data-source='["24 DE MAYO","AGUARICO","ALAUSI","ALFREDO BAQUERIZO MORENO","AMBATO","AMBUQUI","ANTONIO ANTE",
                              "ARAJUNO","ARCHIDONA","ARENILLAS","ATACAMES","ATAHUALPA","AZOGUES","BABA","BABAHOYO","BALAO",
                              "BALSAS","BALZAR","BAÑOS DE AGUA SANTA","BIBLIAN","BOLIVAR","BOLIVAR","BUENA FE","CALUMA",
                              "CALVAS","CAMILO PONCE ENRIQUEZ","CAÑAR","CARLOS JULIO AROSEMENA T.","CASCALES",
                              "CATAMAYO","CAYAMBE","CELICA","CENTINELA DEL CONDOR","CEVALLOS","CHAGUARPAMBA",
                              "CHAMBO","CHILLA","CHILLANES","CHIMBO","CHINCHIPE","CHONE","CHORDELEG","CHUNCHI",
                              "COLIMES","COLTA","CORONEL MARCELINO MARIDUEÑA","COTACACHI","CUENCA","CUMANDA",
                              "CUMBAYA","CUYABENO","DAULE","DELEG","DURAN","ECHEANDIA","EL CARMEN","EL CHACO",
                              "EL EMPALME","EL GUABO","EL PAN","EL PANGUI","EL TAMBO","EL TRIUNFO","ELOY ALFARO",
                              "ESMERALDAS","ESPEJO","ESPINDOLA","FLAVIO ALFARO","GENERAL ANTONIO ELIZALDE (BUCAY)",
                              "GIRON","GONZALO PIZARRO","GONZANAMA","GUACHAPALA","GUALACEO","GUALAQUIZA",
                              "GUAMOTE","GUANO","GUARANDA","GUAYAQUIL","HUAMBOYA","HUAQUILLAS","IBARRA",
                              "ISABELA","ISIDRO AYORA","JAMA","JARAMIJO","JIPIJAPA","JUNIN","LA JOYA DE LOS SACHAS",
                              "LA LIBERTAD","LA LIBERTAD","LA MANA","LA TRONCAL","LAGO AGRIO","LAS LAJAS",
                              "LAS NAVES","LATACUNGA","LIMON - INDANZA","LOGROÑO","LOJA","LOJA","LOMAS DE SARGENTILLO",
                              "LORETO","MACARA","MACHACHI","MACHALA","MANTA","MARCABELI","MEJIA","MERA","MILAGRO",
                              "MIRA (CHONTAHUASI)","MOCACHE","MOCHA","MONTALVO","MONTECRISTI","MONTUFAR","MORONA",
                              "MUISNE","NABON","NANGARITZA","NARANJAL","NARANJITO","NOBOL (VICENTE PIEDRAHITA)",
                              "NUEVA LOJA","OLMEDO","OLMEDO","OÑA","ORELLANA","OTAVALO","PABLO VI","PAJAN",
                              "PALANDA","PALENQUE","PALESTINA","PALLATANGA","PALORA","PALTAS","PANGUA",
                              "PAQUISHA","PASAJE","PASTAZA","PATATE","PAUTE","PEDERNALES","PEDRO MONCAYO",
                              "PEDRO VICENTE MALDONADO","PENIPE","PICHINCHA","PIFO","PIMAMPIRO","PINDAL",
                              "PIÑAS","PLAYAS (GENERAL VILLAMIL)","PORTOVELO","PORTOVIEJO","PUCARA","PUEBLO VIEJO",
                              "PUEMBO","PUERTO LOPEZ","PUERTO QUITO","PUJILI","PUTUMAYO","PUYANGO","QUERO",
                              "QUEVEDO","QUIJOS","QUILANGA","QUININDE","QUITO","RIOBAMBA","RIOVERDE",
                              "ROCAFUERTE","RUMIÑAHUI","SALCEDO","SALINAS","SALINAS","SAMBORONDON",
                              "SAN CRISTOBAL","SAN FERNANDO","SAN GABRIEL","SAN JACINTO DE YAGUACHI",
                              "SAN JUAN DON BOSCO","SAN LORENZO","SAN MIGUEL","SAN MIGUEL DE LOS BANCOS",
                              "SAN MIGUEL DE URCUQUI","SAN PEDRO DE HUACA","SAN PEDRO DE PELILEO",
                              "SAN RAFAEL","SAN VICENTE","SANTA ANA","SANTA CLARA","SANTA CRUZ",
                              "SANTA ELENA","SANTA ELENA","SANTA ISABEL (CHAGUARURCO)","SANTA LUCIA",
                              "SANTA ROSA","SANTIAGO","SANTIAGO DE PILLARO","SANTO DOMINGO","SANTO DOMINGO DE LOS COLORADOS",
                              "SAQUISILI","SARAGURO","SEVILLA DE ORO","SHUSHUFINDI","SIGCHOS","SIGSIG",
                              "SIMON BOLIVAR","SOZORANGA","SUCRE","SUCUA","SUCUMBIOS","SUSCAL","TAISHA",
                              "TENA","TISALEO","TIWINTZA","TOSAGUA","TULCAN","TUMBACO","URBINA JADO","URDANETE",
                              "VALENCIA","VENTANAS","VINCES","YACUAMBI","YANZATZA","ZAMORA","ZAPOTILLO",
                              "ZARUMA","ZULETA"]'></td>
            </tr>

      <tr>
        <th><?php echo $form['provincia']->renderLabel() ?></th>
        <td>
          <?php echo $form['provincia']->renderError() ?>
          <?php echo $form['provincia'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['ciudad']->renderLabel() ?></th>
        <td>
          <?php echo $form['ciudad']->renderError() ?>
          <?php echo $form['ciudad'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['foto']->renderLabel() ?></th>
        <td>
          <?php echo $form['foto']->renderError() ?>
          <?php echo $form['foto'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['nro_celular']->renderLabel() ?></th>
        <td>
          <?php echo $form['nro_celular']->renderError() ?>
          <?php echo $form['nro_celular'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['nro_convencional']->renderLabel() ?></th>
        <td>
          <?php echo $form['nro_convencional']->renderError() ?>
          <?php echo $form['nro_convencional'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['nro_oficina']->renderLabel() ?></th>
        <td>
          <?php echo $form['nro_oficina']->renderError() ?>
          <?php echo $form['nro_oficina'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['nacionalidad']->renderLabel() ?></th>
        <td>
          <?php echo $form['nacionalidad']->renderError() ?>
          <?php echo $form['nacionalidad'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['fecha_nac']->renderLabel() ?></th>
        <td>
          <?php echo $form['fecha_nac']->renderError() ?>
          <?php echo $form['fecha_nac'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['ocupacion']->renderLabel() ?></th>
        <td>
          <?php echo $form['ocupacion']->renderError() ?>
          <?php echo $form['ocupacion'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>
