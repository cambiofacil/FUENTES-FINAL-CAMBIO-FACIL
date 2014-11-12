<?php include_component('ap_provincias','listAll',array(
'id_provincia'=>$persona->getIdProvincia(),
'nombre_prov'=>'persona[nombre_prov]',
));?>
<?php echo observe_field('id_provincia',array(
'update'   => 'estado',
'url'      => 'anuncios/listCiudadesByProvincias',
'with'     => "'id_provincia=' + value",
'script'   => true,
)) ?>
