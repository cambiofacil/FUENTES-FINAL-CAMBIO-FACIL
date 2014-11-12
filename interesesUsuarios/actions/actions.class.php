<?php

/**
 * interesesUsuarios actions.
 *
 * @package    ok_AplicativoTesisEACLL
 * @subpackage interesesUsuarios
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class interesesUsuariosActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
      $this->infocatt = Doctrine_Core::getTable('apcategoria')
      ->createQuery('a')
      ->orderBy('a.nombre_cat ASC')
      ->execute();

      $id_usuario=$this->getUser()->getGuardUser()->getId();
      $this->fanuncioss = Doctrine_Core::getTable('apinfocompusuarios')->getDatosUsuarioLoginado($id_usuario);

      if($request->isMethod('post')){
          $id_usuario_env=$this->getUser()->getGuardUser()->getId();
          for($i=1; $i<=15 ; $i++){
              $id_cat_interes=$request->getPostParameter('intereses'.$i);
              if($id_cat_interes!=null){
                  $el_interes=$this->getUser()->getGuardUser()->getId();
                  $var_ap_int = new ApIntereses();
                  $var_ap_int->setIdUsuario($el_interes);
                  $var_ap_int->setIdCategoria($id_cat_interes);
                  $var_ap_int->save();
              }
          }
        $this->redirect('notificacionMensaje/notifIngresaIntereses');
      }
  }
}
