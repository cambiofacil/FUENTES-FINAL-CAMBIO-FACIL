<?php

/**
 * intereses actions.
 *
 * @package    ok_AplicativoTesisEACLL
 * @subpackage intereses
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class interesesActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->apinteresess = Doctrine_Core::getTable('apintereses')
      ->createQuery('a')
      ->execute();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new apinteresesForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new apinteresesForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($apintereses = Doctrine_Core::getTable('apintereses')->find(array($request->getParameter('id_interes'))), sprintf('Object apintereses does not exist (%s).', $request->getParameter('id_interes')));
    $this->form = new apinteresesForm($apintereses);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($apintereses = Doctrine_Core::getTable('apintereses')->find(array($request->getParameter('id_interes'))), sprintf('Object apintereses does not exist (%s).', $request->getParameter('id_interes')));
    $this->form = new apinteresesForm($apintereses);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($apintereses = Doctrine_Core::getTable('apintereses')->find(array($request->getParameter('id_interes'))), sprintf('Object apintereses does not exist (%s).', $request->getParameter('id_interes')));
    $apintereses->delete();

    $this->redirect('intereses/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $apintereses = $form->save();

      $this->redirect('intereses/edit?id_interes='.$apintereses->getIdInteres());
    }
  }
}
