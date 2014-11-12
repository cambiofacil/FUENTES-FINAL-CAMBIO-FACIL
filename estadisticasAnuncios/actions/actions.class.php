<?php

/**
 * estadisticasAnuncios actions.
 *
 * @package    ok_AplicativoTesisEACLL
 * @subpackage estadisticasAnuncios
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class estadisticasAnunciosActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
      $id_usuario=$this->getUser()->getGuardUser()->getId();
      $this->anuncios_usuario = Doctrine_Core::getTable('apnrovisitasanuncios')->getAnunciosUsuario($id_usuario);

      $id_anuncio_nro=$request->getGetParameter('idanuncio');
      $this->nro_visitas = Doctrine_Core::getTable('apanuncios')->getNroVisitasAnuncios($id_anuncio_nro);

      $this->fanuncioss = Doctrine_Core::getTable('apinfocompusuarios')->getDatosUsuarioLoginado($id_usuario);

      $this->nro_anu_reg_jl = Doctrine_Core::getTable('apkeyuser')->getNroAnuRegistradosJlUsr($id_usuario);
      $this->nro_anu_reg_ag = Doctrine_Core::getTable('apkeyuser')->getNroAnuRegistradosAgUsr($id_usuario);
      $this->nro_anu_reg_sp = Doctrine_Core::getTable('apkeyuser')->getNroAnuRegistradosSpUsr($id_usuario);
      $this->nro_anu_reg_oc = Doctrine_Core::getTable('apkeyuser')->getNroAnuRegistradosOcUsr($id_usuario);
      $this->nro_anu_reg_nv = Doctrine_Core::getTable('apkeyuser')->getNroAnuRegistradosNvUsr($id_usuario);

       $this->anunciosEstado = Doctrine_Core::getTable('apkeyuser')->getAnunciosEstadoUsr($id_usuario);
  }
}
