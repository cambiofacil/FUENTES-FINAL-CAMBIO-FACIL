<?php

/**
 * apMensajes actions.
 *
 * @package    ok_AplicativoTesisEACLL
 * @subpackage apMensajes
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class apMensajesActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->apmensajess = Doctrine_Core::getTable('apmensajes')
      ->createQuery('a')
      ->execute();
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

    $this->redirect('apMensajes/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $apmensajes = $form->save();

      $this->redirect('apMensajes/edit?id_mensaje='.$apmensajes->getIdMensaje());
    }
  }
}
