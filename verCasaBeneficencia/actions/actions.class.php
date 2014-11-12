<?php

/**
 * verCasaBeneficencia actions.
 *
 * @package    ok_AplicativoTesisEACLL
 * @subpackage verCasaBeneficencia
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class verCasaBeneficenciaActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
      $id_usuario=$this->getUser()->getGuardUser()->getId();
      $id_cbene=$request->getGetParameter('cod_casas_benef');
      $id_casa_benef_get=$request->getGetParameter('id_cb_x_get');

      $this->info_cbene = Doctrine_Core::getTable('apcasasbeneficencia')->getDatosCasaBeneficencia_id($id_cbene);
      $this->nec_CB = Doctrine_Core::getTable('apcasasbeneficencia')->getNecCBenef($id_cbene);

      $this->info_cbene_panel = Doctrine_Core::getTable('apcasasbeneficencia')->getDatosCasaBeneficencia();
      $this->nro_don_cb = Doctrine_Core::getTable('apcasasbeneficencia')->getNroDonacionesCB($id_cbene);

      $this->hist_dona_cb = Doctrine_Core::getTable('apcasasbeneficencia')->getHistorialDonacCB($id_cbene);

      /*$prov_usr_anun = Doctrine_Core::getTable('apinfousuarios')->get_prov_info_comp($id_usuario);
        $prov=$prov_usr_anun[0];*/

      if($id_usuario != $id_casa_benef_get){
          //$id_usuario_dueno_cb_get=$request->getGetParameter('id_usr_cb');
          $meses = array("Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dic");
          $fecha=$meses[date('n')-1]. date(" d, Y g:i A");
          $ap_nro_visitas_cb = new ApNroVisitasCb();
          $ap_nro_visitas_cb->setIdCasaBenef($id_cbene);
          $ap_nro_visitas_cb->setIdUsrVisitaCb($id_usuario);
          $ap_nro_visitas_cb->setFechaVisitaCb($fecha);
          $ap_nro_visitas_cb->setIdUsrPublicaCb($id_casa_benef_get);
          $ap_nro_visitas_cb->save();

          $this->getUpdateVisitasCb = Doctrine_Core::getTable('apcasasbeneficencia')->getUpdateNroVisitas_CB($id_cbene);

      }

      if($request->isMethod('post')){
          $id_usuario_env=$this->getUser()->getGuardUser()->getId();
          $id_usuario_rec=$request->getPostParameter('id_usuario');
          $mensaje=$request->getPostParameter('mensaje');
          $meses = array("Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dic");
          $fecha=$meses[date('n')-1]. date(" d, Y g:i A");
          $nom_usu_envia=$request->getPostParameter('nombre');
          $ape_usu_envia=$request->getPostParameter('apellido');
          $camp = new ApMensajes();
          $camp->setIdUsuarioenvia($id_usuario_env);
          $camp->setIdUsuariorecibe($id_usuario_rec);
          $camp->setMensaje($mensaje);
          $camp->setFecha($fecha);
          $camp->setInformeAbuso(false);
          $camp->setIdAnuncio(116);//Ojo aqui parametrizar el id del anuncio para los mensajes de Casa Benef
          $camp->setEstadoMensaje('SIN LEER');
          $camp->setNombreUsuEnvia($nom_usu_envia);
          $camp->setApellidoUsuEnvia($ape_usu_envia);
          //$camp->setProvinciaUsuEnvia($provincia_usu_envia);
          //$camp->setCiudadUsuEnvia($ciudad_usu_envia);
          //$camp->setEmailUsuEnvia($email_usu_envia);
          $camp->save();

          $this->redirect('notificacionMensaje/index');
      }
  }
}
