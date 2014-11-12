<?php

/**
 * verPerfil actions.
 *
 * @package    ok_AplicativoTesisEACLL
 * @subpackage verPerfil
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */

require_once(sfConfig::get('sf_plugins_dir').'/sfDoctrineGuardPlugin/modules/sfGuardAuth/lib/BasesfGuardAuthActions.class.php');

class verPerfilActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
      $username=$request->getGetParameter('username');
      $this->fanuncioss_dat_usr = Doctrine_Core::getTable('apanuncios')->getVerPerfilDatosUsuario($username);
      $id_anuncio=$request->getGetParameter('idanuncio');
      $id_usr_perfil=$request->getGetParameter('id');
      $this->lanuncioss = Doctrine_Core::getTable('apanuncios')->getVerPerfilDatosAnuncio($username,$id_anuncio);
      //$id_usuario=$this->getUser()->getGuardUser()->getId();
      //$this->nanuncioss = Doctrine_Core::getTable('apanuncios')->getReconoceUsuarioExist($id_usuario);

      $this->apultimosmsjs = Doctrine_Core::getTable('apultimosmensajes')->getIdUsuariosMensajes();     

      $id_usuario=$this->getUser()->getGuardUser()->getId();

      $this->fanuncioss = Doctrine_Core::getTable('apinfocompusuarios')->getDatosUsuarioLoginado($id_usuario);

      $this->fanuncioss_foto = Doctrine_Core::getTable('apinfocompusuarios')->getDatosUsuarioLoginado($id_usuario);
      
      $meses = array("Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dic");
      $fecha=$meses[date('n')-1]. date(" d, Y g:i A");
      $id_usuario_publica_anuncio=$request->getGetParameter('idusuario');

      $id_usuario_dueno_anuncio=$request->getGetParameter('idusuario');

      if($id_usuario != $id_usuario_dueno_anuncio){
          $ap_nro_visitas = new ApNroVisitasAnuncios();
          $ap_nro_visitas->setIdAnuncios($id_anuncio);
          $ap_nro_visitas->setIdUsuarioVisita($id_usuario);
          $ap_nro_visitas->setFechaVisita($fecha);
          $ap_nro_visitas->setIdUsuarioPublicaAnuncio($id_usuario_publica_anuncio);

          $ap_nro_visitas->save();

          $this->gatUpdateVisitas = Doctrine_Core::getTable('apanuncios')->getUpdateNroVisitas($id_anuncio);
      }

      $this->getNroVisitasAnuncio = Doctrine_Core::getTable('apanuncios')->getNroVisitasAnunciosInt($id_anuncio);
      
      $id_anuncio_nro=$request->getGetParameter('idanuncio');
      $this->nro_visitas = Doctrine_Core::getTable('apanuncios')->getNroVisitasAnuncios($id_anuncio_nro);

      $this->nro_trueques = Doctrine_Core::getTable('apanuncios')->getTruequesRealizados_Usr($id_usr_perfil);
      $this->nro_donaciones = Doctrine_Core::getTable('apcatalogomedallas')->getNroDonacionesUsr_Pendientes($id_usr_perfil);
      $this->ult_val = Doctrine_Core::getTable('apanuncios')->getUltimaValoracion($id_usr_perfil);

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

          $this->redirect('notificacionMensaje/index');

          /*
          $id_usuario_env1=$this->getUser()->getGuardUser()->getId();
          $id_usuario_rec1=$request->getPostParameter('id_usuario1');
          $id_anuncio_interes1=$request->getPostParameter('id_anuncio_int1');
          $nom_usu_envia1=$request->getPostParameter('nombre1');
          $ape_usu_envia1=$request->getPostParameter('apellido1');
          $provincia_usu_envia1=$request->getPostParameter('provincia1');
          $ciudad_usu_envia1=$request->getPostParameter('ciudad1');
          $email_usu_envia1=$request->getPostParameter('email1');

          $ult_mensajes = new ApUltimosMensajes();

          $ult_mensajes->setIdUsuarioenvia($id_usuario_env1);
          $ult_mensajes->setIdUsuariorecibe($id_usuario_rec1);
          $ult_mensajes->setMensaje($mensaje);
          $ult_mensajes->setFecha($fecha);
          $ult_mensajes->setInformeAbuso(false);
          $ult_mensajes->setIdAnuncio($id_anuncio_interes1);
          $ult_mensajes->setEstadoMensaje('SIN LEER');
          $ult_mensajes->setNombreUsuEnvia($nom_usu_envia1);
          $ult_mensajes->setApellidoUsuEnvia($ape_usu_envia1);
          $ult_mensajes->setProvinciaUsuEnvia($provincia_usu_envia1);
          $ult_mensajes->setCiudadUsuEnvia($ciudad_usu_envia1);
          $ult_mensajes->setEmailUsuEnvia($email_usu_envia1);
          $ult_mensajes->save();                  
*/
      }
  }
}
