<?php

/**
 * valoracionesDonacion actions.
 *
 * @package    ok_AplicativoTesisEACLL
 * @subpackage valoracionesDonacion
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class valoracionesDonacionActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->apvaloracionesdonacions = Doctrine_Core::getTable('apvaloracionesdonacion')
      ->createQuery('a')
      ->execute();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new apvaloracionesdonacionForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new apvaloracionesdonacionForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($apvaloracionesdonacion = Doctrine_Core::getTable('apvaloracionesdonacion')->find(array($request->getParameter('id_val_donac'))), sprintf('Object apvaloracionesdonacion does not exist (%s).', $request->getParameter('id_val_donac')));
    $this->form = new apvaloracionesdonacionForm($apvaloracionesdonacion);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($apvaloracionesdonacion = Doctrine_Core::getTable('apvaloracionesdonacion')->find(array($request->getParameter('id_val_donac'))), sprintf('Object apvaloracionesdonacion does not exist (%s).', $request->getParameter('id_val_donac')));
    $this->form = new apvaloracionesdonacionForm($apvaloracionesdonacion);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($apvaloracionesdonacion = Doctrine_Core::getTable('apvaloracionesdonacion')->find(array($request->getParameter('id_val_donac'))), sprintf('Object apvaloracionesdonacion does not exist (%s).', $request->getParameter('id_val_donac')));
    $apvaloracionesdonacion->delete();

    $this->redirect('valoracionesDonacion/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $apvaloracionesdonacion = $form->save();

      $this->redirect('valoracionesDonacion/edit?id_val_donac='.$apvaloracionesdonacion->getIdValDonac());
    }
  }
}
