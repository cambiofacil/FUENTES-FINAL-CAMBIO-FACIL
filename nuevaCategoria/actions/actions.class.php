<?php

/**
 * nuevaCategoria actions.
 *
 * @package    ok_AplicativoTesisEACLL
 * @subpackage nuevaCategoria
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class nuevaCategoriaActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->apcategorias = Doctrine_Core::getTable('apcategoria')
      ->createQuery('a')
      ->execute();
  }

  public function executeNew(sfWebRequest $request)
  {
      $id_usuario=$this->getUser()->getGuardUser()->getId();
      $this->fanuncioss = Doctrine_Core::getTable('apinfocompusuarios')->getDatosUsuarioLoginado($id_usuario);
    $this->form = new apcategoriaForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new apcategoriaForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($apcategoria = Doctrine_Core::getTable('apcategoria')->find(array($request->getParameter('id_categoria'))), sprintf('Object apcategoria does not exist (%s).', $request->getParameter('id_categoria')));
    $this->form = new apcategoriaForm($apcategoria);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($apcategoria = Doctrine_Core::getTable('apcategoria')->find(array($request->getParameter('id_categoria'))), sprintf('Object apcategoria does not exist (%s).', $request->getParameter('id_categoria')));
    $this->form = new apcategoriaForm($apcategoria);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($apcategoria = Doctrine_Core::getTable('apcategoria')->find(array($request->getParameter('id_categoria'))), sprintf('Object apcategoria does not exist (%s).', $request->getParameter('id_categoria')));
    $apcategoria->delete();

    $this->redirect('nuevaCategoria/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $apcategoria = $form->save();

      $this->redirect('nuevaCategoria/edit?id_categoria='.$apcategoria->getIdCategoria());
    }
  }
}
