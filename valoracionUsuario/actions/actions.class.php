<?php

/**
 * valoracionUsuario actions.
 *
 * @package    ok_AplicativoTesisEACLL
 * @subpackage valoracionUsuario
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class valoracionUsuarioActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
      $id_anuncio=$request->getGetParameter('id_anuncio');
      $this->datos_anuncio = Doctrine_Core::getTable('apanuncios')->getInfoAnuncio($id_anuncio);

      $this->usr_register = Doctrine_Core::getTable('apanuncios')->getUsuariosRegistrados();

      $username=$request->getGetParameter('username');
      $id_anuncio1=$request->getGetParameter('idanuncio');
      $this->lanuncioss = Doctrine_Core::getTable('apanuncios')->getVerPerfilDatosAnuncio($username,$id_anuncio1);

      $ext_usr=$request->getGetParameter('username_txt');
      $this->id_username = Doctrine_Core::getTable('apanuncios')->getIdUsername($ext_usr);
      
      $this->info_usuario = Doctrine_Core::getTable('apvaloracionesusuario');
      $this->id_anuncio_x_get = Doctrine_Core::getTable('apanuncios');

      if($request->isMethod('post')){
          $username_post=$request->getPostParameter('username_txt');
          $id_anuncio_w=$request->getPostParameter('id_anuncio_buscar_art');
          //$this->datos_anuncio = Doctrine_Core::getTable('apanuncios')->getInfoAnuncio($id_anuncio_w);
          $this->info_usuario = Doctrine_Core::getTable('apvaloracionesusuario')->getDatossUsuariosValoracion($username_post);
          $this->id_anuncio_x_get = Doctrine_Core::getTable('apanuncios')->getIdAnuncio_x_val($id_anuncio_w);
      }
  }

  public function executeIngresaValoracion(sfWebRequest $request)
  {
      
  }
}
