<?php

/**
 * ApNecesidadesCB actions.
 *
 * @package    ok_AplicativoTesisEACLL
 * @subpackage ApNecesidadesCB
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ApNecesidadesCBActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->ap_necesidades_c_bs = Doctrine_Core::getTable('ApNecesidadesCB')
      ->createQuery('a')
      ->execute();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new ApNecesidadesCBForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new ApNecesidadesCBForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($ap_necesidades_cb = Doctrine_Core::getTable('ApNecesidadesCB')->find(array($request->getParameter('id_necesidad_cb'))), sprintf('Object ap_necesidades_cb does not exist (%s).', $request->getParameter('id_necesidad_cb')));
    $this->form = new ApNecesidadesCBForm($ap_necesidades_cb);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($ap_necesidades_cb = Doctrine_Core::getTable('ApNecesidadesCB')->find(array($request->getParameter('id_necesidad_cb'))), sprintf('Object ap_necesidades_cb does not exist (%s).', $request->getParameter('id_necesidad_cb')));
    $this->form = new ApNecesidadesCBForm($ap_necesidades_cb);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($ap_necesidades_cb = Doctrine_Core::getTable('ApNecesidadesCB')->find(array($request->getParameter('id_necesidad_cb'))), sprintf('Object ap_necesidades_cb does not exist (%s).', $request->getParameter('id_necesidad_cb')));
    $ap_necesidades_cb->delete();

    $this->redirect('ApNecesidadesCB/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $ap_necesidades_cb = $form->save();

      $this->redirect('ApNecesidadesCB/edit?id_necesidad_cb='.$ap_necesidades_cb->getIdNecesidadCb());
    }
  }
}
