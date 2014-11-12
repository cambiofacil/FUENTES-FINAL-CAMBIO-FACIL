<?php

/**
 * nuevaMedalla actions.
 *
 * @package    ok_AplicativoTesisEACLL
 * @subpackage nuevaMedalla
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class nuevaMedallaActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->apcatalogomedallass = Doctrine_Core::getTable('apcatalogomedallas')
      ->createQuery('a')
      ->execute();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new apcatalogomedallasForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new apcatalogomedallasForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($apcatalogomedallas = Doctrine_Core::getTable('apcatalogomedallas')->find(array($request->getParameter('id_catalogo_medall'))), sprintf('Object apcatalogomedallas does not exist (%s).', $request->getParameter('id_catalogo_medall')));
    $this->form = new apcatalogomedallasForm($apcatalogomedallas);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($apcatalogomedallas = Doctrine_Core::getTable('apcatalogomedallas')->find(array($request->getParameter('id_catalogo_medall'))), sprintf('Object apcatalogomedallas does not exist (%s).', $request->getParameter('id_catalogo_medall')));
    $this->form = new apcatalogomedallasForm($apcatalogomedallas);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($apcatalogomedallas = Doctrine_Core::getTable('apcatalogomedallas')->find(array($request->getParameter('id_catalogo_medall'))), sprintf('Object apcatalogomedallas does not exist (%s).', $request->getParameter('id_catalogo_medall')));
    $apcatalogomedallas->delete();

    $this->redirect('nuevaMedalla/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $apcatalogomedallas = $form->save();

      $this->redirect('nuevaMedalla/edit?id_catalogo_medall='.$apcatalogomedallas->getIdCatalogoMedall());
    }
  }
}
