<?php

/**
 * CasasBeneficencia actions.
 *
 * @package    ok_AplicativoTesisEACLL
 * @subpackage CasasBeneficencia
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class CasasBeneficenciaActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->apcasasbeneficencias = Doctrine_Core::getTable('apcasasbeneficencia')
      ->createQuery('a')
      ->execute();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new apcasasbeneficenciaForm();
    $id_usuario=$this->getUser()->getGuardUser()->getId();
    $this->form->setDefault('cod_usuario', $id_usuario);
    $meses = array("Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dic");
    $fecha=$meses[date('n')-1]. date(" d, Y");
    $this->form->setDefault('fecha_ingreso', $fecha);
    $nro_visitas_cb_inicial = 0;
    $this->form->setDefault('nro_visitas_cb', $nro_visitas_cb_inicial);
    $nro_comentarios_cb_inicial = 0;
    $this->form->setDefault('nro_comentarios_cb', $nro_comentarios_cb_inicial);
    $this->form->setDefault('estado_cb', true);
    $fecha_rep = date("Y-m-d H:i:s");
    $this->form->setDefault('fecha_cb_rep', $fecha_rep);

    $id_usuario=$this->getUser()->getGuardUser()->getId();
    $this->fanuncioss = Doctrine_Core::getTable('apinfocompusuarios')->getDatosUsuarioLoginado($id_usuario);
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new apcasasbeneficenciaForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($apcasasbeneficencia = Doctrine_Core::getTable('apcasasbeneficencia')->find(array($request->getParameter('cod_casas_benef'))), sprintf('Object apcasasbeneficencia does not exist (%s).', $request->getParameter('cod_casas_benef')));
    $this->form = new apcasasbeneficenciaForm($apcasasbeneficencia);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($apcasasbeneficencia = Doctrine_Core::getTable('apcasasbeneficencia')->find(array($request->getParameter('cod_casas_benef'))), sprintf('Object apcasasbeneficencia does not exist (%s).', $request->getParameter('cod_casas_benef')));
    $this->form = new apcasasbeneficenciaForm($apcasasbeneficencia);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($apcasasbeneficencia = Doctrine_Core::getTable('apcasasbeneficencia')->find(array($request->getParameter('cod_casas_benef'))), sprintf('Object apcasasbeneficencia does not exist (%s).', $request->getParameter('cod_casas_benef')));
    $apcasasbeneficencia->delete();

    $this->redirect('CasasBeneficencia/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $apcasasbeneficencia = $form->save();

       //$this->redirect('CasasBeneficencia/edit?cod_casas_benef='.$apcasasbeneficencia->getCodCasasBenef());
       $this->redirect('notificacionMensaje/NotifCreaCasaBenef');
    }
  }
}
