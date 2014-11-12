<?php

/**
 * guardInfoUsuario actions.
 *
 * @package    ok_AplicativoTesisEACLL
 * @subpackage guardInfoUsuario
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class guardInfoUsuarioActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->sfguardusers = Doctrine_Core::getTable('sfguarduser')
      ->createQuery('a')
      ->execute();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new sfguarduserForm();

    $provincia_usr=2;

    $this->form->setDefault('provincia', $provincia_usr);

  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new sfguarduserForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($sfguarduser = Doctrine_Core::getTable('sfguarduser')->find(array($request->getParameter('id'))), sprintf('Object sfguarduser does not exist (%s).', $request->getParameter('id')));
    $this->form = new sfguarduserForm($sfguarduser);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($sfguarduser = Doctrine_Core::getTable('sfguarduser')->find(array($request->getParameter('id'))), sprintf('Object sfguarduser does not exist (%s).', $request->getParameter('id')));
    $this->form = new sfguarduserForm($sfguarduser);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($sfguarduser = Doctrine_Core::getTable('sfguarduser')->find(array($request->getParameter('id'))), sprintf('Object sfguarduser does not exist (%s).', $request->getParameter('id')));
    $sfguarduser->delete();

    $this->redirect('guardInfoUsuario/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $sfguarduser = $form->save();

      $this->redirect('guardInfoUsuario/edit?id='.$sfguarduser->getId());
    }
  }

  public function executeInfoCompUsuarios(sfWebRequest $request)
  {
      if($request->isMethod('post')){
          $prov_ing_usuario=$request->getPostParameter('txt_prov');
          $ciudad_ing_usuario=$request->getPostParameter('txt_ciudad');
          $this->provincias = Doctrine_Core::getTable('approvincias')->getProvinciasReg();
          $this->cantones = Doctrine_Core::getTable('approvincias')->getCiudadesReg();

          $id_prov=0;
         /* foreach ($provincias as $provinciass):
              if($prov_ing_usuario==$provinciass['nombre_prov']){
                  $id_prov=$provinciass['id_provincia'];
              }
              else{
                  $id_prov=1;
              }
          endforeach;*/

          $id_cant=0;
          /*foreach ($cantones as $cantoness):
              if($ciudad_ing_usuario==$cantoness['nombre_cant']){
                  $id_cant=$cantoness['id_canton'];
              }
              else{
                  $id_cant=15;
              }
          endforeach;*/

          $id_usuario=$request->getPostParameter('id_usuario_ll');
          $id_provin=11;
          $id_ciud=118;

          $data_image = file_get_contents($request->getParameter('uploadedfile_img_perfil'));
          $escaped = pg_escape_bytea($data_image);
          $num_cel=$request->getPostParameter('txt_cel');
          $num_conve=$request->getPostParameter('txt_conve');
          $num_ofi=$request->getPostParameter('txt_ofi');
          $nacionali=$request->getPostParameter('txt_nacional');
          $fecha_nac=$request->getPostParameter('txt_f_nac');
          $ocupacion=$request->getPostParameter('ocupacion');

          $ap_info_com = new ApInfoCompUsuarios();
          $ap_info_com->setIdUsuario($id_usuario);
          $ap_info_com->setProvincia($id_provin);
          $ap_info_com->setCiudad($id_ciud);
          $ap_info_com->setFoto($escaped);
          $ap_info_com->setNroCelular($num_cel);
          $ap_info_com->setNroConvencional($num_conve);
          $ap_info_com->setNroOficina($num_ofi);
          $ap_info_com->setNacionalidad($nacionali);
          $ap_info_com->setFechaNac($fecha_nac);
          $ap_info_com->setOcupacion($ocupacion);

          $ap_info_com->save();
      }
  }
}
