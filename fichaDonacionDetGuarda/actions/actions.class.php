<?php

/**
 * fichaDonacionDetGuarda actions.
 *
 * @package    ok_AplicativoTesisEACLL
 * @subpackage fichaDonacionDetGuarda
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class fichaDonacionDetGuardaActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
      $id_usuario=$this->getUser()->getGuardUser()->getId();
      $this->fanuncioss = Doctrine_Core::getTable('apinfocompusuarios')->getDatosUsuarioLoginado($id_usuario);
      if($request->isMethod('post')){
          $id_fich_donacion_cab=$request->getPostParameter('id_ficha_don_cab');
          
          for($i=1; $i<=3; $i++){
              $cant_art_donac = $request->getPostParameter('txt_cantidad_donac'.$i);
              $descr_donac = $request->getPostParameter('txt_descrip_donac'.$i);
              $estado_fis_dona = $request->getPostParameter('estado_don'.$i);
              $var_tbl = new ApFichaDonacionDet();
              $var_tbl->setIdFichCab($id_fich_donacion_cab);
              $var_tbl->setCantidadAticDona($cant_art_donac);
              $var_tbl->setDescripcionDonac($descr_donac);
              $var_tbl->setEstadoFisicoDonac($estado_fis_dona);
              $meses = array("Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dic");
              $fecha=$meses[date('n')-1]. date(" d, Y g:i A");
              $var_tbl->setFechaFichDet($fecha);
              $var_tbl->save();
          }
          $this->update_estado_cab = Doctrine_Core::getTable('apcasasbeneficencia')->getUpdateEstadoDonacion($id_fich_donacion_cab);
          $this->redirect('notificacionMensaje/notifCreaFichDonacDet');
      }
  }
}
