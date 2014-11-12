<?php

/**
 * buscarArticulos actions.
 *
 * @package    ok_AplicativoTesisEACLL
 * @subpackage buscarArticulos
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class buscarArticulosActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
      $this->anuncioss = Doctrine_Core::getTable('apanuncios')->getDatosAnuncios();

      $this->infocatte = Doctrine_Core::getTable('apcategoria')
      ->createQuery('a')
      ->execute();

      $this->infocatt = Doctrine_Core::getTable('apanuncios')->getCategoriaActivo();
    
      $var=$this->anuncioss[0];
      $id_anuncio=$var['id_anuncio'];
      $this->nro_visitas = Doctrine_Core::getTable('apanuncios')->getNroVisitasAnuncios(44);

      $this->categorias_act = Doctrine_Core::getTable('apanuncios')->getCategoriasActivas();
      $this->ciudades_act = Doctrine_Core::getTable('apanuncios')->getCiudadesActivas();

      if($request->isMethod('post')){
          $id_cat=$request->getPostParameter('id_cat');
          $estado_fi=$request->getPostParameter('estado');
          $ciudad=$request->getPostParameter('ciudad');
          $this->categorias_act = Doctrine_Core::getTable('apanuncios')->getAnunciosTresFiltros($id_cat,$estado_fi,$ciudad);
      }

      $nro_de_anuncios_x_pagina = 7;
      
      $this->usr_register = Doctrine_Core::getTable('apanuncios')->getUsuariosRegistrados();

      $this->pager = new sfDoctrinePager('apanuncios', $nro_de_anuncios_x_pagina);
      $this->pager->setQuery(Doctrine_Core::getTable('apanuncios')->getDatosAnuncios_2());
      $this->pager->setPage($request->getParameter('page')); //paginador de articulos
      $this->pager->init();
  }

  public function executeMensajeConfirmacionEstado(sfWebRequest $request)
  {
      
  }

}
