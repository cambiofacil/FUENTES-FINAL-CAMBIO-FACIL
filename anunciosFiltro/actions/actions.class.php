<?php

/**
 * anunciosFiltro actions.
 *
 * @package    ok_AplicativoTesisEACLL
 * @subpackage anunciosFiltro
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class anunciosFiltroActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
      $id_categoria=$request->getGetParameter('id_cat');
      $this->anuncioss = Doctrine_Core::getTable('apanuncios')->getDatosAnunciosFiltrados_2($id_categoria);

      $this->infocatte = Doctrine_Core::getTable('apcategoria')
      ->createQuery('a')
      ->execute();

      $this->infocatt = Doctrine_Core::getTable('apanuncios')->getCategoriaActivo();

      $nro_de_anuncios_x_pagina = 7;

      $this->usr_register = Doctrine_Core::getTable('apanuncios')->getUsuariosRegistrados();

      $this->pager = new sfDoctrinePager('apanuncios', $nro_de_anuncios_x_pagina);
      $this->pager->setQuery(Doctrine_Core::getTable('apanuncios')->getDatosAnunciosFiltrados_2($id_categoria));
      $this->pager->setPage($request->getParameter('page')); //paginador de articulos
      $this->pager->init();
  }
}
