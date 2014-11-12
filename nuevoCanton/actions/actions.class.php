<?php

/**
 * nuevoCanton actions.
 *
 * @package    ok_AplicativoTesisEACLL
 * @subpackage nuevoCanton
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class nuevoCantonActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->apcantoness = Doctrine_Core::getTable('apcantones')
      ->createQuery('a')
      ->execute();
  }

  public function executeNew(sfWebRequest $request)
  {
      $id_usuario=$this->getUser()->getGuardUser()->getId();
      $this->fanuncioss = Doctrine_Core::getTable('apinfocompusuarios')->getDatosUsuarioLoginado($id_usuario);
    $this->form = new apcantonesForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new apcantonesForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($apcantones = Doctrine_Core::getTable('apcantones')->find(array($request->getParameter('id_canton'))), sprintf('Object apcantones does not exist (%s).', $request->getParameter('id_canton')));
    $this->form = new apcantonesForm($apcantones);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($apcantones = Doctrine_Core::getTable('apcantones')->find(array($request->getParameter('id_canton'))), sprintf('Object apcantones does not exist (%s).', $request->getParameter('id_canton')));
    $this->form = new apcantonesForm($apcantones);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($apcantones = Doctrine_Core::getTable('apcantones')->find(array($request->getParameter('id_canton'))), sprintf('Object apcantones does not exist (%s).', $request->getParameter('id_canton')));
    $apcantones->delete();

    $this->redirect('nuevoCanton/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $apcantones = $form->save();

      $this->redirect('nuevoCanton/edit?id_canton='.$apcantones->getIdCanton());
    }
  }
}
