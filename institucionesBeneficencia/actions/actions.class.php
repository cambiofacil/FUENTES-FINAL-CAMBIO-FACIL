<?php

/**
 * institucionesBeneficencia actions.
 *
 * @package    ok_AplicativoTesisEACLL
 * @subpackage institucionesBeneficencia
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class institucionesBeneficenciaActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
      $this->info_cbene = Doctrine_Core::getTable('apcasasbeneficencia')->getDatosCasaBeneficencia();
      $this->nro_total_donac = Doctrine_Core::getTable('apfichadonacionCab')->getNroTotalDonaciones();
  }
}
