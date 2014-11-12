<?php

/**
 * administracionMensajes actions.
 *
 * @package    ok_AplicativoTesisEACLL
 * @subpackage administracionMensajes
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class administracionMensajesActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
      $id_usuario=$this->getUser()->getGuardUser()->getId();
      
      $this->max_id_mensaje=Doctrine_Core::getTable('apmensajes')->getMaxIdMensaje($id_usuario);
      
      $this->admin_mensajes = Doctrine_Core::getTable('apmensajes')->getVerMensajes($id_usuario,'SIN LEER');

      $this->admin_mensajes_leidos = Doctrine_Core::getTable('apmensajes')->getVerMensajes_Leidos($id_usuario,'ok');
      $this->admin_mensajes_leidos_count = Doctrine_Core::getTable('apmensajes')->getVerMensajes_Leidos_count($id_usuario,'ok');

      $this->fanuncioss = Doctrine_Core::getTable('apinfocompusuarios')->getDatosUsuarioLoginado($id_usuario);

      $this->info_para_link = Doctrine_Core::getTable('apinfousuarios')->get_datos_usuarios_easy($id_usuario);


      /*if($request->isMethod('post')){
          $camp = new ApMensajes();
          $id_mesaje=$request->getPostParameter('id_mensaje');
          $this->setestadomsj = Doctrine_Core::getTable('apmensajes')->setEstadoMSJ($id_mesaje);
          $camp->save();
      }*/

      //$id_mensaje=$$request->getPostParameter('id_mensaje');
      //$this->actualizarMensaje = Doctrine_Core::getTable('apanuncios')->getUpdateMensaje($id_mensaje);
  }

  public function executeRespuestaMSJ(sfWebRequest $request)
  {
      $id_usuario_recibe=$this->getUser()->getGuardUser()->getId();

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
      $this->listaMSJ = Doctrine_Core::getTable('apmensajes')->muestraListaMensajes($id_usuario_envia,$id_usuario_recibe,$id_usuario_recibe,$id_usuario_envia);

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
      }
  }
}
