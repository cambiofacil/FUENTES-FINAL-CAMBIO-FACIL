<?php

/**
 * intro actions.
 *
 * @package    ok_AplicativoTesisEACLL
 * @subpackage intro
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class introActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
      $this->categorias_act = Doctrine_Core::getTable('apanuncios')->getCategoriasActivas();
      $this->ciudades_act = Doctrine_Core::getTable('apanuncios')->getCiudadesActivas();

      $this->nro_usr_reg = Doctrine_Core::getTable('apkeyuser')->getNroUsrRegistrados();

      $this->top_3_donantes = Doctrine_Core::getTable('apinfousuarios')->get_top_3_donadores();

      //$id_categoria=$request->getGetParameter('id_cat');
      //$this->buscar_articulos_filtro = Doctrine_Core::getTable('apanuncios')->getBuscadorArticulosInicio($id_categoria);
  }
}
