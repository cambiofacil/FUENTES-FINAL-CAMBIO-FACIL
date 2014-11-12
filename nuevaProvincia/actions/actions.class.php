<?php

/**
 * nuevaProvincia actions.
 *
 * @package    ok_AplicativoTesisEACLL
 * @subpackage nuevaProvincia
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class nuevaProvinciaActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->approvinciass = Doctrine_Core::getTable('approvincias')
      ->createQuery('a')
      ->execute();
  }

  public function executeNew(sfWebRequest $request)
  {
      $id_usuario=$this->getUser()->getGuardUser()->getId();
      $this->fanuncioss = Doctrine_Core::getTable('apinfocompusuarios')->getDatosUsuarioLoginado($id_usuario);
    $this->form = new approvinciasForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new approvinciasForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($approvincias = Doctrine_Core::getTable('approvincias')->find(array($request->getParameter('id_provincia'))), sprintf('Object approvincias does not exist (%s).', $request->getParameter('id_provincia')));
    $this->form = new approvinciasForm($approvincias);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($approvincias = Doctrine_Core::getTable('approvincias')->find(array($request->getParameter('id_provincia'))), sprintf('Object approvincias does not exist (%s).', $request->getParameter('id_provincia')));
    $this->form = new approvinciasForm($approvincias);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($approvincias = Doctrine_Core::getTable('approvincias')->find(array($request->getParameter('id_provincia'))), sprintf('Object approvincias does not exist (%s).', $request->getParameter('id_provincia')));
    $approvincias->delete();

    $this->redirect('nuevaProvincia/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $approvincias = $form->save();

      $this->redirect('nuevaProvincia/edit?id_provincia='.$approvincias->getIdProvincia());
    }
  }
}
