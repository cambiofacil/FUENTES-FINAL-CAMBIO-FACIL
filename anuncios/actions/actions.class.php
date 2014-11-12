<?php

/**
 * anuncios actions.
 *
 * @package    ok_AplicativoTesisEACLL
 * @subpackage anuncios
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class anunciosActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
      $this->apanuncioss = Doctrine_Core::getTable('apanuncios')
      ->createQuery('a')
      ->execute();

      $id_usuario=$this->getUser()->getGuardUser()->getId();
      $id_anuncio_msj=$request->getGetParameter('id_anuncio');
      $this->info_anuncios_msj=Doctrine_Core::getTable('apanuncios')->getVerPerfilDatosAnuncio_compl($id_anuncio_msj);
      $this->usr_info_com = Doctrine_Core::getTable('apinfocompUsuarios')->getUsuarioRegisInfoCom($id_usuario);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new apanunciosForm();
    $id_usuario=$this->getUser()->getGuardUser()->getId();
    $this->form->setDefault('id_usuario', $id_usuario);
    $meses = array("Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dic");
    $fecha=$meses[date('n')-1]. date(" d, Y g:i A");
    $this->form->setDefault('fecha_public', $fecha);
    $estado="ACTIVO";
    $this->form->setDefault('estado_anuncio', $estado);
    $visitas_inicial=0;
    $this->form->setDefault('nro_visitas', $visitas_inicial);
    $cometarios_inicial=0;
    $this->form->setDefault('nro_comentarios', $cometarios_inicial);
    //$id_prov_usr_anun=$request->getGetParameter('id_prov');
    $prov_usr_anun = Doctrine_Core::getTable('apinfousuarios')->get_prov_info_comp($id_usuario);
    $prov=$prov_usr_anun[0];    
    $this->form->setDefault('provincia_usr', $prov);
    $ciud_usr_anun = Doctrine_Core::getTable('apinfousuarios')->get_ciud_info_comp($id_usuario);
    $ciud=$ciud_usr_anun[0];
    $this->form->setDefault('ciudad_usr', $ciud);
    $valor_nc_usr_anun = Doctrine_Core::getTable('apinfousuarios')->get_nc_usr_anun($id_usuario);
    $id_usr_nc=$valor_nc_usr_anun[0];
    $this->form->setDefault('id_nc_usuario', $id_usr_nc);
    $fecha_rep = date("Y-m-d H:i:s");
    $this->form->setDefault('fecha_anun_rep', $fecha_rep);

   // $id_provincia_get=$request->getGetParameter('id_prov');
   // $this->form->setDefault('provincia_usr', 1);
   // $id_ciudad_get=$request->getGetParameter('id_ciud');
   // $this->form->setDefault('ciudad_usr', 118);
   // $this->form->setDefault('id_nc_usuario', 1);

    $this->fanuncioss = Doctrine_Core::getTable('apinfocompusuarios')->getDatosUsuarioLoginado($id_usuario);

    $this->apanuncioss = Doctrine_Core::getTable('apanuncios')
      ->createQuery('a')
      ->execute();

      $this->anuncioss = Doctrine_Core::getTable('apinfocompusuarios')->getHistoricoAnuncios($id_usuario);
      //$this->update_tbl_anunc = Doctrine_Core::getTable('apanuncios')->getUpdateTblAnuncios(2,11,1,1);

      $this->usr_info_com = Doctrine_Core::getTable('apinfocompUsuarios')->getUsuarioRegisInfoCom($id_usuario);

      if($request->isMethod('post')){
          //$id_usuario_login=$this->getUser()->getGuardUser()->getId();
          //$id_prov_por_fin=$request->getPostParameter('id_prov_post');
          //$id_ciud_por_fin=$request->getPostParameter('id_ciud_post');
          //$this->update_tbl_anunc = Doctrine_Core::getTable('apanuncios')->getUpdateTblAnuncios(2);

          $this->redirect('cuenta/index');
      }      
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new apanunciosForm();


    $id_usuario=$this->getUser()->getGuardUser()->getId();
    $this->anuncioss = Doctrine_Core::getTable('apinfocompusuarios')->getHistoricoAnuncios($id_usuario);

    $this->usr_info_com = Doctrine_Core::getTable('apinfocompUsuarios')->getUsuarioRegisInfoCom($id_usuario);

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($apanuncios = Doctrine_Core::getTable('apanuncios')->find(array($request->getParameter('id_anuncio'))), sprintf('Object apanuncios does not exist (%s).', $request->getParameter('id_anuncio')));
    $this->form = new apanunciosForm($apanuncios);

    $id_usuario=$this->getUser()->getGuardUser()->getId();
    $this->fanuncioss = Doctrine_Core::getTable('apinfocompusuarios')->getDatosUsuarioLoginado($id_usuario);

    $id_usuario=$this->getUser()->getGuardUser()->getId();

    $this->anuncioss = Doctrine_Core::getTable('apinfocompusuarios')->getHistoricoAnuncios($id_usuario);

    $this->usr_info_com = Doctrine_Core::getTable('apinfocompUsuarios')->getUsuarioRegisInfoCom($id_usuario);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $id_usuario=$this->getUser()->getGuardUser()->getId();
    $this->usr_info_com = Doctrine_Core::getTable('apinfocompUsuarios')->getUsuarioRegisInfoCom($id_usuario);
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($apanuncios = Doctrine_Core::getTable('apanuncios')->find(array($request->getParameter('id_anuncio'))), sprintf('Object apanuncios does not exist (%s).', $request->getParameter('id_anuncio')));
    $this->form = new apanunciosForm($apanuncios);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $id_usuario=$this->getUser()->getGuardUser()->getId();
    $this->usr_info_com = Doctrine_Core::getTable('apinfocompUsuarios')->getUsuarioRegisInfoCom($id_usuario);
    $request->checkCSRFProtection();

    $this->forward404Unless($apanuncios = Doctrine_Core::getTable('apanuncios')->find(array($request->getParameter('id_anuncio'))), sprintf('Object apanuncios does not exist (%s).', $request->getParameter('id_anuncio')));
    $apanuncios->delete();

    $this->redirect('anuncios/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $id_usuario=$this->getUser()->getGuardUser()->getId();
    $this->usr_info_com = Doctrine_Core::getTable('apinfocompUsuarios')->getUsuarioRegisInfoCom($id_usuario);
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $apanuncios = $form->save();

      //$this->redirect('anuncios/edit?id_anuncio='.$apanuncios->getIdAnuncio());
      $this->redirect('notificacionMensaje/NotifInfoCompUsu');
    }
  }
  
}
