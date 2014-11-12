<?php

/**
 * informacionUsuario actions.
 *
 * @package    ok_AplicativoTesisEACLL
 * @subpackage informacionUsuario
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class informacionUsuarioActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->apinfocompusuarioss = Doctrine_Core::getTable('apinfocompusuarios')
      ->createQuery('a')
      ->execute();

    $id_usuario_rec=$request->getGetParameter('id_usr_contacto');
    $this->info_usr_envio=Doctrine_Core::getTable('apinfocompusuarios')->getDatosUsuarioEnviaMSJ($id_usuario_rec);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new apinfocompusuariosForm();
    $id_usuario=$this->getUser()->getGuardUser()->getId();
    $this->form->setDefault('id_usuario', $id_usuario);

    $this->form->setDefault('ciudad', 10);

    $id_usuario=$this->getUser()->getGuardUser()->getId();
    $this->fanuncioss = Doctrine_Core::getTable('apinfocompusuarios')->getDatosUsuarioLoginado($id_usuario);
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new apinfocompusuariosForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($apinfocompusuarios = Doctrine_Core::getTable('apinfocompusuarios')->find(array($request->getParameter('id_info_com_usu'))), sprintf('Object apinfocompusuarios does not exist (%s).', $request->getParameter('id_info_com_usu')));
    $this->form = new apinfocompusuariosForm($apinfocompusuarios);

    $id_usuario=$this->getUser()->getGuardUser()->getId();
    $this->fanuncioss = Doctrine_Core::getTable('apinfocompusuarios')->getDatosUsuarioLoginado($id_usuario);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($apinfocompusuarios = Doctrine_Core::getTable('apinfocompusuarios')->find(array($request->getParameter('id_info_com_usu'))), sprintf('Object apinfocompusuarios does not exist (%s).', $request->getParameter('id_info_com_usu')));
    $this->form = new apinfocompusuariosForm($apinfocompusuarios);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($apinfocompusuarios = Doctrine_Core::getTable('apinfocompusuarios')->find(array($request->getParameter('id_info_com_usu'))), sprintf('Object apinfocompusuarios does not exist (%s).', $request->getParameter('id_info_com_usu')));
    $apinfocompusuarios->delete();

    $this->redirect('informacionUsuario/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $apinfocompusuarios = $form->save();

      //$this->redirect('informacionUsuario/edit?id_info_com_usu='.$apinfocompusuarios->getIdInfoComUsu());

      $this->redirect('notificacionMensaje/NotifInfoCompUsuFormCompl');
    }
  }

  public function executeInfoUsuario(sfWebRequest $request)
  {
      $id_usuario_rec=$request->getGetParameter('idusrcontacto');
      $this->info_usr_envio=Doctrine_Core::getTable('apinfocompusuarios')->getDatosUsuarioEnviaMSJ($id_usuario_rec);
  }
}
