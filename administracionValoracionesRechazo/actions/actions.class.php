<?php

/**
 * administracionValoracionesRechazo actions.
 *
 * @package    ok_AplicativoTesisEACLL
 * @subpackage administracionValoracionesRechazo
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class administracionValoracionesRechazoActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
      if($request->isMethod('post')){
          $id_usuario_ing=$this->getUser()->getGuardUser()->getId();
          $id_referencia_pri=$request->getPostParameter('ref_pri');
          $meses = array("Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dic");
          $fecha=$meses[date('n')-1]. date(" d, Y g:i A");
          $tbl_ap_base = new ApIncidentesDet();
          $tbl_ap_base->setIdIncidenteCab(1);
          $tbl_ap_base->setIdReferenciaPri($id_referencia_pri);
          $tbl_ap_base->setIdReferenciaSec($id_referencia_pri);
          $tbl_ap_base->setFechaIncidDet($fecha);
          $tbl_ap_base->setEstadoIncidDet(1);
          $tbl_ap_base->setUsrIngresaIncid($id_usuario_ing);
          $tbl_ap_base->save();
          $this->redirect('administracionValoracionesRechazo/rechazoValoracionNotif');
      }
  }

  public function executeRechazoValoracionNotif(sfWebRequest $request)
  {

  }

  public function executeRechazoAnunciosNotif(sfWebRequest $request)
  {
      if($request->isMethod('post')){
          $id_usuario_ing=$this->getUser()->getGuardUser()->getId();
          $id_referencia_pri=$request->getPostParameter('ref_pri');
          $meses = array("Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dic");
          $fecha=$meses[date('n')-1]. date(" d, Y g:i A");
          $tbl_ap_base = new ApIncidentesDet();
          $tbl_ap_base->setIdIncidenteCab(1);
          $tbl_ap_base->setIdReferenciaPri($id_referencia_pri);
          $tbl_ap_base->setIdReferenciaSec($id_referencia_pri);
          $tbl_ap_base->setFechaIncidDet($fecha);
          $tbl_ap_base->setEstadoIncidDet(1);
          $tbl_ap_base->setUsrIngresaIncid($id_usuario_ing);
          $tbl_ap_base->save();
          $this->redirect('administracionValoracionesRechazo/rechazoValoracionNotif');
      }
  }

  public function executeRechazoMensajeNotif(sfWebRequest $request)
  {

  }

  public function executeRechazoAnunciosPubliNotif(sfWebRequest $request)
  {

  }
}
