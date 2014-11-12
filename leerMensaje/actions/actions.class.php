<?php

/**
 * leerMensaje actions.
 *
 * @package    ok_AplicativoTesisEACLL
 * @subpackage leerMensaje
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class leerMensajeActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
      $id_usuario_envia = $this->getUser()->getGuardUser()->getId();
      $id_usr_recibe = $request->getGetParameter('id_usr_envia');
      $id_anuncio_historia_msj = $request->getGetParameter('id_anuncio');

      $id_mensaje=$request->getGetParameter('id_mensaje');
      $this->ver_mensaje = Doctrine_Core::getTable('apmensajes')->getVerMensajesRecibido($id_mensaje);

      $username=$request->getGetParameter('username');
      $this->fanuncioss = Doctrine_Core::getTable('apanuncios')->getVerPerfilDatosUsuario($username);
      
      $id_anuncio=$request->getGetParameter('idanuncio');
      $this->lanuncioss = Doctrine_Core::getTable('apanuncios')->getVerPerfilDatosAnuncio($username,$id_anuncio);

      $id_usuario=$request->getGetParameter('idusuario');
      $titulo=$request->getGetParameter('titulo');
      $this->idanuncios = Doctrine_Core::getTable('apanuncios')->getIdAnuncio($id_usuario,$titulo);
      
      $id_usuario_envia=$request->getGetParameter('idusuario');
      //$this->listaMSJ = Doctrine_Core::getTable('apmensajes')->muestraListaMensajes($id_usuario_envia,$id_usuario_recibe,$id_usuario_recibe,$id_usuario_envia);

      $id_mensaje=$request->getGetParameter('id_mensaje');
      $this->actualizarMensaje = Doctrine_Core::getTable('apanuncios')->getUpdateMensaje($id_mensaje);

      if($request->isMethod('post')){
          $id_usuario_env=$this->getUser()->getGuardUser()->getId();
          $id_usuario_rec=$request->getPostParameter('id_usuario');
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

          $this->redirect('notificacionMensaje/notifMensajePlano');
      }
  }

  public function executeEnvioMensajeResp(sfWebRequest $request)
  {
      
  }

  public function executeVerConverzacion(sfWebRequest $request)
  {
      $id_usuario_envia = $this->getUser()->getGuardUser()->getId();
      $id_usr_recibe = $request->getGetParameter('id_usr_envia');
      $id_anuncio_historia_msj = $request->getGetParameter('id_anuncio');
      $this->hist_msj = Doctrine_Core::getTable('apmensajes')->verHistorialMensajess($id_usuario_envia,$id_usr_recibe,$id_anuncio_historia_msj,$id_usr_recibe,$id_usuario_envia,$id_anuncio_historia_msj);

  }
}
