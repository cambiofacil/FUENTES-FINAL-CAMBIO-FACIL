<?php

/**
 * cuenta actions.
 *
 * @package    ok_AplicativoTesisEACLL
 * @subpackage cuenta
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class cuentaActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
      //$this->redirect('notificacionMensaje/NotifInfoCompUsu');
      //$usuario=$request->getParameter('id');
      //$this->cuenta=Doctrine::getTable('sfguarduser')->find(array($usuario));

      //$this->result=Doctrine::getTable('sfguarduser')->getDatosUsuario($request->getParameter(id));

      //$sf_user->getGuardUser()->getId();
      //$this->result=Doctrine::getTable('apAnuncios')->getHistoricoAnuncios($request->getParameter('nombre'));
    
      $this->apanuncioss = Doctrine_Core::getTable('apanuncios')
      ->createQuery('a')
      ->execute();

      $id_usuario=$this->getUser()->getGuardUser()->getId();
      
      $this->anuncioss = Doctrine_Core::getTable('apinfocompusuarios')->getHistoricoAnuncios($id_usuario);

      $this->fanuncioss = Doctrine_Core::getTable('apinfocompusuarios')->getDatosUsuarioLoginado($id_usuario);

      $this->MSJnuevos = Doctrine_Core::getTable('apmensajes')->cuentaMSJEntrada($id_usuario,'SIN LEER');

      //$cuenta_filas_MSJ=$this->MSJnuevos;

      $this->mensajesGalery = Doctrine_Core::getTable('apanuncios')->getAnunciosGalery('ACTIVO');

      $this->mensajesGaleryASC = Doctrine_Core::getTable('apanuncios')->getAnunciosGaleryASC('ACTIVO');

      $this->nroVisitasTotal = Doctrine_Core::getTable('apnrovisitasanuncios')->getNroVisitasAnunciosTotal($id_usuario);

      $this->nroComentariosTotal = Doctrine_Core::getTable('apcomentarios')->getNroComentariosAnunciosTotal($id_usuario);

      //$this->var_bandera = Doctrine_Core::getTable('apinfocompusuarios')->getUsuarioRegisInfoCom();

      $this->nroValoracionesTotal = Doctrine_Core::getTable('apncusuarioCab')->getNotifValoracionUsr($id_usuario);
      
      $this->infoCBUsr = Doctrine_Core::getTable('apcasasbeneficencia')->getInfoCBUsuario($id_usuario);
      
      $this->nro_donaciones_usr = Doctrine_Core::getTable('apcasasbeneficencia')->getNroDonacionesUsr($id_usuario);

      $this->nro_donaciones = Doctrine_Core::getTable('apcatalogomedallas')->getNroDonacionesUsr_Pendientes($id_usuario);

      $this->nro_trueques = Doctrine_Core::getTable('apanuncios')->getTruequesRealizados_Usr($id_usuario);
      
      $total_donacines = Doctrine_Core::getTable('apcatalogomedallas')->getNroDonacionesUsr_Pendientes($id_usuario);

      $var=$this->nro_donaciones[0];
      $can_donac = $var['numdonaciones'];
      $tipo_medalla_usr=0;

      if($can_donac>0 && $can_donac<=5){
          $tipo_medalla_usr = 1;
      }

      if($can_donac>5 && $can_donac<=20){
          $tipo_medalla_usr = 2;
      }

      if($can_donac>20 && $can_donac<=70){
          $tipo_medalla_usr = 3;
      }

      if($can_donac>70){
          $tipo_medalla_usr = 4;
      }

      $this->primera_medalla = Doctrine_Core::getTable('apcatalogomedallas')->getTipoMedalla($tipo_medalla_usr);
      $this->frase_ramdom = Doctrine_Core::getTable('apfrasesmotivacion')->getFrasesRamdom();
      $this->usr_info_com = Doctrine_Core::getTable('apinfocompUsuarios')->getUsuarioRegisInfoCom($id_usuario);

      $this->ult_val = Doctrine_Core::getTable('apanuncios')->getUltimaValoracion($id_usuario);
      
      $this->nc_usr_register = Doctrine_Core::getTable('apinfocompusuarios')->getNCUsuarioCabecera($id_usuario);

  }
}