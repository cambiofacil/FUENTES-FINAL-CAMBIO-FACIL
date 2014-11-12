<?php use_helper('Object','Javascript') ?>

<?php include_component('estado','selectByPais',array(
'id_pais' =>  $sf_request->getParameter('id_pais'),
'nombre'  =>  'persona[id_estado]',
));
?>
<?php echo observe_field('persona_id_estado',array(
'update'   => 'municipio',
'url'      => 'municipio/listByEstado',
'with'     => "'id_estado=' + value + '&nombre=persona[id_municipio]'",
)) 
?>
<?php echo javascript_tag('reset_select("persona_id_municipio")')?>   