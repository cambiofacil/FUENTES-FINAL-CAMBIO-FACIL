<?php

/**
 * notificacionMensaje actions.
 *
 * @package    ok_AplicativoTesisEACLL
 * @subpackage notificacionMensaje
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class notificacionMensajeActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
      if($request->isMethod('post')){
          $this->redirect('buscarArticulos/index');
      }

      $id_usuario=$this->getUser()->getGuardUser()->getId();
      $this->fanuncioss = Doctrine_Core::getTable('apinfocompusuarios')->getDatosUsuarioLoginado($id_usuario);
  }

  public function executeNotifCambioEstado(sfWebRequest $request)
  {
      if($request->isMethod('post')){
          $this->redirect('buscarArticulos/index');
      }

      $id_usuario=$this->getUser()->getGuardUser()->getId();
      $this->fanuncioss = Doctrine_Core::getTable('apinfocompusuarios')->getDatosUsuarioLoginado($id_usuario);
  }

  public function executeNotifErrorActivCuenta(sfWebRequest $request)
  {
      if($request->isMethod('post')){
          $this->redirect('buscarArticulos/index');
      }
  }

  public function executeNotifInfoCompUsu(sfWebRequest $request)
  {
      if($request->isMethod('post')){
          $this->redirect('buscarArticulos/index');
      }
  }

   public function executeNotifInfoCompUsuFormCompl(sfWebRequest $request)
  {
      $id_usuario=$this->getUser()->getGuardUser()->getId();
      $this->info_nc_cab = Doctrine_Core::getTable('apncusuariocab')->getDatosNCUserCab($id_usuario);

      if($request->isMethod('post')){
          $id_usuario_post=$this->getUser()->getGuardUser()->getId();
          $id_nc_cab=$request->getPostParameter('id_serial_nc_cab');
          $var_ap_nc_det = new ApNcUsuarioDet();
          $var_ap_nc_det->setIdApNcCab($id_nc_cab);
          $var_ap_nc_det->setValoracionPorcent(100);// es la valoracion que se le da al usuario para el icono y el color de fuente
          $var_ap_nc_det->setMotivoValoracion("El usuario complemento su información personal");
          $meses = array("Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dic");
          $fecha=$meses[date('n')-1]. date(" d, Y g:i A");
          $var_ap_nc_det->setFechaIng($fecha);
          $var_ap_nc_det->setActivo(1);
          $var_ap_nc_det->setIdUsrIngresa($id_usuario_post);
          $var_ap_nc_det->setIdAnuncioVal(132);//id de anuncio que muestra el dato de valoracion en el modulo de cuenta
          $var_ap_nc_det->save();

          $this->actualiza_nc_usr = Doctrine_Core::getTable('apncusuariocab')->getUpdatePorcetNCUsr($id_usuario_post);

          $this->redirect('cuenta/index');
      }
  }
  
  public function executeNotifIngresoValoracion(sfWebRequest $request)
  {
      
  }
  
  public function executeNotifActualizaEstadoAnuncio(sfWebRequest $request)
  {
      
  }

  public function executeNotifIngresaIntereses(sfWebRequest $request)
  {
      if($request->isMethod('post')){
          $this->redirect('cuenta/index');
      }
  }

  public function executeNotifCreaCasaBenef(sfWebRequest $request)
  {
      if($request->isMethod('post')){
          $this->redirect('institucionesBeneficencia/index');
      }
  }

  public function executeNotifCreaFichDonac(sfWebRequest $request)
  {
      if($request->isMethod('post')){
          $this->redirect('cuenta/index');
      }
  }

  public function executeNotifCreaFichDonacDet(sfWebRequest $request)
  {
      if($request->isMethod('post')){
          $this->redirect('cuenta/index');
      }
  }

  public function executeNotifCreacionMedalla(sfWebRequest $request)
  {
      if($request->isMethod('post')){
          $this->redirect('catalogoMedallas/reporteCatalogo');
      }
  }
  
  public function executeNotifInfoCompUsuNuevoAnuncio(sfWebRequest $request)
  {
      if($request->isMethod('post')){
          $this->redirect('informacionUsuario/new');
      }
  }

  public function executeNotifErrorCreacionCuenta(sfWebRequest $request)
  {
      if($request->isMethod('post')){
          $this->redirect('http://localhost:8687/backend_dev.php/guard/users/new');
      }
  }

  public function executeNotifMensajePlano(sfWebRequest $request)
  {
      if($request->isMethod('post')){
          $this->redirect('cuenta/index');
      }
  }

}
