<?php

/**
 * mensajes actions.
 *
 * @package    ok_AplicativoTesisEACLL
 * @subpackage mensajes
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class mensajesActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
      $this->apmensajess = Doctrine_Core::getTable('apmensajes')
      ->createQuery('a')
      ->execute();

      $id_usuario=$this->getUser()->getGuardUser()->getId();
      $this->fanuncioss = Doctrine_Core::getTable('apinfocompusuarios')->getDatosUsuarioLoginado($id_usuario);

      $id_usuario_envia = $this->getUser()->getGuardUser()->getId();
      $id_usr_recibe = $request->getGetParameter('id_usr_envia');
      
      $this->datos_usr = Doctrine_Core::getTable('apinfousuarios')->get_datos_usuarios($id_usr_recibe);
      $id_anuncio_historia_msj = $request->getGetParameter('id_anuncio_hist_msj');
      $this->hist_msj = Doctrine_Core::getTable('apmensajes')->verHistorialMensajess($id_usuario_envia,$id_usr_recibe,$id_anuncio_historia_msj,$id_usr_recibe,$id_usuario_envia,$id_anuncio_historia_msj);

      if($request->isMethod('post')){
          $id_usuario_env=$this->getUser()->getGuardUser()->getId();
          $id_usuario_rec=$request->getPostParameter('id_usuario_r');
          $mensaje=$request->getPostParameter('mensaje');
          $id_anuncio_interes=$request->getPostParameter('id_anuncio_int');
          $meses = array("Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dic");
          $fecha=$meses[date('n')-1]. date(" d, Y g:i A");
          $nom_usu_envia=$request->getPostParameter('nombre');
          $ape_usu_envia=$request->getPostParameter('apellido');
          $provincia_usu_envia=$request->getPostParameter('provincia');
          $ciudad_usu_envia=$request->getPostParameter('ciudad');
          $email_usu_envia=$request->getPostParameter('email');

          $camp = new ApMensajes();
          $camp->setIdUsuarioenvia($id_usuario_env);
          $camp->setIdUsuariorecibe($id_usuario_rec);
          $camp->setMensaje($mensaje);
          $camp->setFecha($fecha);
          $camp->setInformeAbuso(false);
          $camp->setIdAnuncio($id_anuncio_interes);
          $camp->setEstadoMensaje('SIN LEER');
          $camp->setNombreUsuEnvia($nom_usu_envia);
          $camp->setApellidoUsuEnvia($ape_usu_envia);
          $camp->setProvinciaUsuEnvia($provincia_usu_envia);
          $camp->setCiudadUsuEnvia($ciudad_usu_envia);
          $camp->setEmailUsuEnvia($email_usu_envia);
          $camp->save();

          $this->redirect('notificacionMensaje/index');
      }
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new apmensajesForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new apmensajesForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($apmensajes = Doctrine_Core::getTable('apmensajes')->find(array($request->getParameter('id_mensaje'))), sprintf('Object apmensajes does not exist (%s).', $request->getParameter('id_mensaje')));
    $this->form = new apmensajesForm($apmensajes);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($apmensajes = Doctrine_Core::getTable('apmensajes')->find(array($request->getParameter('id_mensaje'))), sprintf('Object apmensajes does not exist (%s).', $request->getParameter('id_mensaje')));
    $this->form = new apmensajesForm($apmensajes);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($apmensajes = Doctrine_Core::getTable('apmensajes')->find(array($request->getParameter('id_mensaje'))), sprintf('Object apmensajes does not exist (%s).', $request->getParameter('id_mensaje')));
    $apmensajes->delete();

    $this->redirect('mensajes/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $apmensajes = $form->save();

      $this->redirect('mensajes/edit?id_mensaje='.$apmensajes->getIdMensaje());
    }
  }
}
