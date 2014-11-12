<?php

/**
 * necesidadesCB actions.
 *
 * @package    ok_AplicativoTesisEACLL
 * @subpackage necesidadesCB
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class necesidadesCBActions extends sfActions
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
      $this->categoria_nec=Doctrine_Core::getTable('apcategorianec')->getCategoriasActivas();
      $this->necesidadesCB=Doctrine_Core::getTable('apcategorianec')->getNecesidadesCB();

      $id_CB=$request->getGetParameter('cod_casas_benef');

      $this->idCB=Doctrine_Core::getTable('apcasasbeneficencia')->getIdCB($id_CB);

       if($request->isMethod('post')){
           $check_1=$request->getPostParameter('1');
           if ($check_1!=null)
           {
               $id_casa_benef=$request->getPostParameter('id_CB');
               $id_cat=1;
               $id_det_cat=1;
               $meses = array("Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dic");
               $fecha=$meses[date('n')-1]. date(" d, Y g:i A");
               $ap_necesidades_c_b = new ApNecesidadesCB();
               $ap_necesidades_c_b->setCodCasaBebef($id_casa_benef);
               $ap_necesidades_c_b->setIdCategoria($id_cat);
               $ap_necesidades_c_b->setIdDetCatNec($id_det_cat);
               $ap_necesidades_c_b->setFechaIngreso($fecha);
               $ap_necesidades_c_b->save();
           }

           $check_2=$request->getPostParameter('2');
           if ($check_2!=null)
           {
               $id_casa_benef=$request->getPostParameter('id_CB');
               $id_cat=2;
               $id_det_cat=2;
               $meses = array("Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dic");
               $fecha=$meses[date('n')-1]. date(" d, Y g:i A");
               $ap_necesidades_c_b = new ApNecesidadesCB();
               $ap_necesidades_c_b->setCodCasaBebef($id_casa_benef);
               $ap_necesidades_c_b->setIdCategoria($id_cat);
               $ap_necesidades_c_b->setIdDetCatNec($id_det_cat);
               $ap_necesidades_c_b->setFechaIngreso($fecha);
               $ap_necesidades_c_b->save();
           }

           $check_3=$request->getPostParameter('3');
           if ($check_3!=null)
           {
               $id_casa_benef=$request->getPostParameter('id_CB');
               $id_cat=2;
               $id_det_cat=3;
               $meses = array("Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dic");
               $fecha=$meses[date('n')-1]. date(" d, Y g:i A");
               $ap_necesidades_c_b = new ApNecesidadesCB();
               $ap_necesidades_c_b->setCodCasaBebef($id_casa_benef);
               $ap_necesidades_c_b->setIdCategoria($id_cat);
               $ap_necesidades_c_b->setIdDetCatNec($id_det_cat);
               $ap_necesidades_c_b->setFechaIngreso($fecha);
               $ap_necesidades_c_b->save();
           }

           $check_4=$request->getPostParameter('4');
           if ($check_4!=null)
           {
               $id_casa_benef=$request->getPostParameter('id_CB');
               $id_cat=2;
               $id_det_cat=4;
               $meses = array("Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dic");
               $fecha=$meses[date('n')-1]. date(" d, Y g:i A");
               $ap_necesidades_c_b = new ApNecesidadesCB();
               $ap_necesidades_c_b->setCodCasaBebef($id_casa_benef);
               $ap_necesidades_c_b->setIdCategoria($id_cat);
               $ap_necesidades_c_b->setIdDetCatNec($id_det_cat);
               $ap_necesidades_c_b->setFechaIngreso($fecha);
               $ap_necesidades_c_b->save();
           }

           $check_5=$request->getPostParameter('5');
           if ($check_5!=null)
           {
               $id_casa_benef=$request->getPostParameter('id_CB');
               $id_cat=2;
               $id_det_cat=5;
               $meses = array("Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dic");
               $fecha=$meses[date('n')-1]. date(" d, Y g:i A");
               $ap_necesidades_c_b = new ApNecesidadesCB();
               $ap_necesidades_c_b->setCodCasaBebef($id_casa_benef);
               $ap_necesidades_c_b->setIdCategoria($id_cat);
               $ap_necesidades_c_b->setIdDetCatNec($id_det_cat);
               $ap_necesidades_c_b->setFechaIngreso($fecha);
               $ap_necesidades_c_b->save();
           }

           $check_6=$request->getPostParameter('6');
           if ($check_6!=null)
           {
               $id_casa_benef=$request->getPostParameter('id_CB');
               $id_cat=2;
               $id_det_cat=6;
               $meses = array("Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dic");
               $fecha=$meses[date('n')-1]. date(" d, Y g:i A");
               $ap_necesidades_c_b = new ApNecesidadesCB();
               $ap_necesidades_c_b->setCodCasaBebef($id_casa_benef);
               $ap_necesidades_c_b->setIdCategoria($id_cat);
               $ap_necesidades_c_b->setIdDetCatNec($id_det_cat);
               $ap_necesidades_c_b->setFechaIngreso($fecha);
               $ap_necesidades_c_b->save();
           }

           $check_7=$request->getPostParameter('7');
           if ($check_7!=null)
           {
               $id_casa_benef=$request->getPostParameter('id_CB');
               $id_cat=2;
               $id_det_cat=7;
               $meses = array("Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dic");
               $fecha=$meses[date('n')-1]. date(" d, Y g:i A");
               $ap_necesidades_c_b = new ApNecesidadesCB();
               $ap_necesidades_c_b->setCodCasaBebef($id_casa_benef);
               $ap_necesidades_c_b->setIdCategoria($id_cat);
               $ap_necesidades_c_b->setIdDetCatNec($id_det_cat);
               $ap_necesidades_c_b->setFechaIngreso($fecha);
               $ap_necesidades_c_b->save();
           }

           $check_8=$request->getPostParameter('8');
           if ($check_8!=null)
           {
               $id_casa_benef=$request->getPostParameter('id_CB');
               $id_cat=2;
               $id_det_cat=8;
               $meses = array("Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dic");
               $fecha=$meses[date('n')-1]. date(" d, Y g:i A");
               $ap_necesidades_c_b = new ApNecesidadesCB();
               $ap_necesidades_c_b->setCodCasaBebef($id_casa_benef);
               $ap_necesidades_c_b->setIdCategoria($id_cat);
               $ap_necesidades_c_b->setIdDetCatNec($id_det_cat);
               $ap_necesidades_c_b->setFechaIngreso($fecha);
               $ap_necesidades_c_b->save();
           }

           $check_9=$request->getPostParameter('9');
           if ($check_9!=null)
           {
               $id_casa_benef=$request->getPostParameter('id_CB');
               $id_cat=2;
               $id_det_cat=9;
               $meses = array("Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dic");
               $fecha=$meses[date('n')-1]. date(" d, Y g:i A");
               $ap_necesidades_c_b = new ApNecesidadesCB();
               $ap_necesidades_c_b->setCodCasaBebef($id_casa_benef);
               $ap_necesidades_c_b->setIdCategoria($id_cat);
               $ap_necesidades_c_b->setIdDetCatNec($id_det_cat);
               $ap_necesidades_c_b->setFechaIngreso($fecha);
               $ap_necesidades_c_b->save();
           }

           $check_10=$request->getPostParameter('10');
           if ($check_10!=null)
           {
               $id_casa_benef=$request->getPostParameter('id_CB');
               $id_cat=2;
               $id_det_cat=10;
               $meses = array("Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dic");
               $fecha=$meses[date('n')-1]. date(" d, Y g:i A");
               $ap_necesidades_c_b = new ApNecesidadesCB();
               $ap_necesidades_c_b->setCodCasaBebef($id_casa_benef);
               $ap_necesidades_c_b->setIdCategoria($id_cat);
               $ap_necesidades_c_b->setIdDetCatNec($id_det_cat);
               $ap_necesidades_c_b->setFechaIngreso($fecha);
               $ap_necesidades_c_b->save();
           }

           $check_11=$request->getPostParameter('11');
           if ($check_11!=null)
           {
               $id_casa_benef=$request->getPostParameter('id_CB');
               $id_cat=2;
               $id_det_cat=11;
               $meses = array("Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dic");
               $fecha=$meses[date('n')-1]. date(" d, Y g:i A");
               $ap_necesidades_c_b = new ApNecesidadesCB();
               $ap_necesidades_c_b->setCodCasaBebef($id_casa_benef);
               $ap_necesidades_c_b->setIdCategoria($id_cat);
               $ap_necesidades_c_b->setIdDetCatNec($id_det_cat);
               $ap_necesidades_c_b->setFechaIngreso($fecha);
               $ap_necesidades_c_b->save();
           }

           $check_12=$request->getPostParameter('12');
           if ($check_12!=null)
           {
               $id_casa_benef=$request->getPostParameter('id_CB');
               $id_cat=2;
               $id_det_cat=12;
               $meses = array("Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dic");
               $fecha=$meses[date('n')-1]. date(" d, Y g:i A");
               $ap_necesidades_c_b = new ApNecesidadesCB();
               $ap_necesidades_c_b->setCodCasaBebef($id_casa_benef);
               $ap_necesidades_c_b->setIdCategoria($id_cat);
               $ap_necesidades_c_b->setIdDetCatNec($id_det_cat);
               $ap_necesidades_c_b->setFechaIngreso($fecha);
               $ap_necesidades_c_b->save();
           }

           $check_14=$request->getPostParameter('14');
           if ($check_14!=null)
           {
               $id_casa_benef=$request->getPostParameter('id_CB');
               $id_cat=2;
               $id_det_cat=14;
               $meses = array("Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dic");
               $fecha=$meses[date('n')-1]. date(" d, Y g:i A");
               $ap_necesidades_c_b = new ApNecesidadesCB();
               $ap_necesidades_c_b->setCodCasaBebef($id_casa_benef);
               $ap_necesidades_c_b->setIdCategoria($id_cat);
               $ap_necesidades_c_b->setIdDetCatNec($id_det_cat);
               $ap_necesidades_c_b->setFechaIngreso($fecha);
               $ap_necesidades_c_b->save();
           }

           $check_15=$request->getPostParameter('15');
           if ($check_15!=null)
           {
               $id_casa_benef=$request->getPostParameter('id_CB');
               $id_cat=2;
               $id_det_cat=15;
               $meses = array("Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dic");
               $fecha=$meses[date('n')-1]. date(" d, Y g:i A");
               $ap_necesidades_c_b = new ApNecesidadesCB();
               $ap_necesidades_c_b->setCodCasaBebef($id_casa_benef);
               $ap_necesidades_c_b->setIdCategoria($id_cat);
               $ap_necesidades_c_b->setIdDetCatNec($id_det_cat);
               $ap_necesidades_c_b->setFechaIngreso($fecha);
               $ap_necesidades_c_b->save();
           }

           $check_16=$request->getPostParameter('16');
           if ($check_16!=null)
           {
               $id_casa_benef=$request->getPostParameter('id_CB');
               $id_cat=2;
               $id_det_cat=16;
               $meses = array("Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dic");
               $fecha=$meses[date('n')-1]. date(" d, Y g:i A");
               $ap_necesidades_c_b = new ApNecesidadesCB();
               $ap_necesidades_c_b->setCodCasaBebef($id_casa_benef);
               $ap_necesidades_c_b->setIdCategoria($id_cat);
               $ap_necesidades_c_b->setIdDetCatNec($id_det_cat);
               $ap_necesidades_c_b->setFechaIngreso($fecha);
               $ap_necesidades_c_b->save();
           }

           $check_17=$request->getPostParameter('17');
           if ($check_17!=null)
           {
               $id_casa_benef=$request->getPostParameter('id_CB');
               $id_cat=2;
               $id_det_cat=17;
               $meses = array("Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dic");
               $fecha=$meses[date('n')-1]. date(" d, Y g:i A");
               $ap_necesidades_c_b = new ApNecesidadesCB();
               $ap_necesidades_c_b->setCodCasaBebef($id_casa_benef);
               $ap_necesidades_c_b->setIdCategoria($id_cat);
               $ap_necesidades_c_b->setIdDetCatNec($id_det_cat);
               $ap_necesidades_c_b->setFechaIngreso($fecha);
               $ap_necesidades_c_b->save();
           }

           $check_18=$request->getPostParameter('18');
           if ($check_18!=null)
           {
               $id_casa_benef=$request->getPostParameter('id_CB');
               $id_cat=2;
               $id_det_cat=18;
               $meses = array("Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dic");
               $fecha=$meses[date('n')-1]. date(" d, Y g:i A");
               $ap_necesidades_c_b = new ApNecesidadesCB();
               $ap_necesidades_c_b->setCodCasaBebef($id_casa_benef);
               $ap_necesidades_c_b->setIdCategoria($id_cat);
               $ap_necesidades_c_b->setIdDetCatNec($id_det_cat);
               $ap_necesidades_c_b->setFechaIngreso($fecha);
               $ap_necesidades_c_b->save();
           }
            
           $check_19=$request->getPostParameter('19');
           if ($check_19!=null)
           {
               $id_casa_benef=$request->getPostParameter('id_CB');
               $id_cat=3;
               $id_det_cat=19;
               $meses = array("Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dic");
               $fecha=$meses[date('n')-1]. date(" d, Y g:i A");
               $ap_necesidades_c_b = new ApNecesidadesCB();
               $ap_necesidades_c_b->setCodCasaBebef($id_casa_benef);
               $ap_necesidades_c_b->setIdCategoria($id_cat);
               $ap_necesidades_c_b->setIdDetCatNec($id_det_cat);
               $ap_necesidades_c_b->setFechaIngreso($fecha);
               $ap_necesidades_c_b->save();
           }

            $check_20=$request->getPostParameter('20');
           if ($check_20!=null)
           {
               $id_casa_benef=$request->getPostParameter('id_CB');
               $id_cat=3;
               $id_det_cat=20;
               $meses = array("Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dic");
               $fecha=$meses[date('n')-1]. date(" d, Y g:i A");
               $ap_necesidades_c_b = new ApNecesidadesCB();
               $ap_necesidades_c_b->setCodCasaBebef($id_casa_benef);
               $ap_necesidades_c_b->setIdCategoria($id_cat);
               $ap_necesidades_c_b->setIdDetCatNec($id_det_cat);
               $ap_necesidades_c_b->setFechaIngreso($fecha);
               $ap_necesidades_c_b->save();
           }

           $check_21=$request->getPostParameter('21');
           if ($check_21!=null)
           {
               $id_casa_benef=$request->getPostParameter('id_CB');
               $id_cat=3;
               $id_det_cat=21;
               $meses = array("Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dic");
               $fecha=$meses[date('n')-1]. date(" d, Y g:i A");
               $ap_necesidades_c_b = new ApNecesidadesCB();
               $ap_necesidades_c_b->setCodCasaBebef($id_casa_benef);
               $ap_necesidades_c_b->setIdCategoria($id_cat);
               $ap_necesidades_c_b->setIdDetCatNec($id_det_cat);
               $ap_necesidades_c_b->setFechaIngreso($fecha);
               $ap_necesidades_c_b->save();
           }

           $check_22=$request->getPostParameter('22');
           if ($check_22!=null)
           {
               $id_casa_benef=$request->getPostParameter('id_CB');
               $id_cat=3;
               $id_det_cat=22;
               $meses = array("Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dic");
               $fecha=$meses[date('n')-1]. date(" d, Y g:i A");
               $ap_necesidades_c_b = new ApNecesidadesCB();
               $ap_necesidades_c_b->setCodCasaBebef($id_casa_benef);
               $ap_necesidades_c_b->setIdCategoria($id_cat);
               $ap_necesidades_c_b->setIdDetCatNec($id_det_cat);
               $ap_necesidades_c_b->setFechaIngreso($fecha);
               $ap_necesidades_c_b->save();
           }

           $check_23=$request->getPostParameter('23');
           if ($check_23!=null)
           {
               $id_casa_benef=$request->getPostParameter('id_CB');
               $id_cat=3;
               $id_det_cat=23;
               $meses = array("Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dic");
               $fecha=$meses[date('n')-1]. date(" d, Y g:i A");
               $ap_necesidades_c_b = new ApNecesidadesCB();
               $ap_necesidades_c_b->setCodCasaBebef($id_casa_benef);
               $ap_necesidades_c_b->setIdCategoria($id_cat);
               $ap_necesidades_c_b->setIdDetCatNec($id_det_cat);
               $ap_necesidades_c_b->setFechaIngreso($fecha);
               $ap_necesidades_c_b->save();
           }

           $check_24=$request->getPostParameter('24');
           if ($check_24!=null)
           {
               $id_casa_benef=$request->getPostParameter('id_CB');
               $id_cat=3;
               $id_det_cat=24;
               $meses = array("Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dic");
               $fecha=$meses[date('n')-1]. date(" d, Y g:i A");
               $ap_necesidades_c_b = new ApNecesidadesCB();
               $ap_necesidades_c_b->setCodCasaBebef($id_casa_benef);
               $ap_necesidades_c_b->setIdCategoria($id_cat);
               $ap_necesidades_c_b->setIdDetCatNec($id_det_cat);
               $ap_necesidades_c_b->setFechaIngreso($fecha);
               $ap_necesidades_c_b->save();
           }

           $check_25=$request->getPostParameter('25');
           if ($check_25!=null)
           {
               $id_casa_benef=$request->getPostParameter('id_CB');
               $id_cat=3;
               $id_det_cat=25;
               $meses = array("Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dic");
               $fecha=$meses[date('n')-1]. date(" d, Y g:i A");
               $ap_necesidades_c_b = new ApNecesidadesCB();
               $ap_necesidades_c_b->setCodCasaBebef($id_casa_benef);
               $ap_necesidades_c_b->setIdCategoria($id_cat);
               $ap_necesidades_c_b->setIdDetCatNec($id_det_cat);
               $ap_necesidades_c_b->setFechaIngreso($fecha);
               $ap_necesidades_c_b->save();
           }

           $check_26=$request->getPostParameter('26');
           if ($check_26!=null)
           {
               $id_casa_benef=$request->getPostParameter('id_CB');
               $id_cat=3;
               $id_det_cat=26;
               $meses = array("Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dic");
               $fecha=$meses[date('n')-1]. date(" d, Y g:i A");
               $ap_necesidades_c_b = new ApNecesidadesCB();
               $ap_necesidades_c_b->setCodCasaBebef($id_casa_benef);
               $ap_necesidades_c_b->setIdCategoria($id_cat);
               $ap_necesidades_c_b->setIdDetCatNec($id_det_cat);
               $ap_necesidades_c_b->setFechaIngreso($fecha);
               $ap_necesidades_c_b->save();
           }

           $check_27=$request->getPostParameter('27');
           if ($check_27!=null)
           {
               $id_casa_benef=$request->getPostParameter('id_CB');
               $id_cat=3;
               $id_det_cat=27;
               $meses = array("Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dic");
               $fecha=$meses[date('n')-1]. date(" d, Y g:i A");
               $ap_necesidades_c_b = new ApNecesidadesCB();
               $ap_necesidades_c_b->setCodCasaBebef($id_casa_benef);
               $ap_necesidades_c_b->setIdCategoria($id_cat);
               $ap_necesidades_c_b->setIdDetCatNec($id_det_cat);
               $ap_necesidades_c_b->setFechaIngreso($fecha);
               $ap_necesidades_c_b->save();
           }

           $check_28=$request->getPostParameter('28');
           if ($check_28!=null)
           {
               $id_casa_benef=$request->getPostParameter('id_CB');
               $id_cat=3;
               $id_det_cat=28;
               $meses = array("Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dic");
               $fecha=$meses[date('n')-1]. date(" d, Y g:i A");
               $ap_necesidades_c_b = new ApNecesidadesCB();
               $ap_necesidades_c_b->setCodCasaBebef($id_casa_benef);
               $ap_necesidades_c_b->setIdCategoria($id_cat);
               $ap_necesidades_c_b->setIdDetCatNec($id_det_cat);
               $ap_necesidades_c_b->setFechaIngreso($fecha);
               $ap_necesidades_c_b->save();
           }

           $check_29=$request->getPostParameter('29');
           if ($check_29!=null)
           {
               $id_casa_benef=$request->getPostParameter('id_CB');
               $id_cat=4;
               $id_det_cat=29;
               $meses = array("Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dic");
               $fecha=$meses[date('n')-1]. date(" d, Y g:i A");
               $ap_necesidades_c_b = new ApNecesidadesCB();
               $ap_necesidades_c_b->setCodCasaBebef($id_casa_benef);
               $ap_necesidades_c_b->setIdCategoria($id_cat);
               $ap_necesidades_c_b->setIdDetCatNec($id_det_cat);
               $ap_necesidades_c_b->setFechaIngreso($fecha);
               $ap_necesidades_c_b->save();
           }

           $check_30=$request->getPostParameter('30');
           if ($check_30!=null)
           {
               $id_casa_benef=$request->getPostParameter('id_CB');
               $id_cat=4;
               $id_det_cat=30;
               $meses = array("Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dic");
               $fecha=$meses[date('n')-1]. date(" d, Y g:i A");
               $ap_necesidades_c_b = new ApNecesidadesCB();
               $ap_necesidades_c_b->setCodCasaBebef($id_casa_benef);
               $ap_necesidades_c_b->setIdCategoria($id_cat);
               $ap_necesidades_c_b->setIdDetCatNec($id_det_cat);
               $ap_necesidades_c_b->setFechaIngreso($fecha);
               $ap_necesidades_c_b->save();
           }

           $check_31=$request->getPostParameter('31');
           if ($check_31!=null)
           {
               $id_casa_benef=$request->getPostParameter('id_CB');
               $id_cat=4;
               $id_det_cat=31;
               $meses = array("Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dic");
               $fecha=$meses[date('n')-1]. date(" d, Y g:i A");
               $ap_necesidades_c_b = new ApNecesidadesCB();
               $ap_necesidades_c_b->setCodCasaBebef($id_casa_benef);
               $ap_necesidades_c_b->setIdCategoria($id_cat);
               $ap_necesidades_c_b->setIdDetCatNec($id_det_cat);
               $ap_necesidades_c_b->setFechaIngreso($fecha);
               $ap_necesidades_c_b->save();
           }

           $check_32=$request->getPostParameter('32');
           if ($check_32!=null)
           {
               $id_casa_benef=$request->getPostParameter('id_CB');
               $id_cat=4;
               $id_det_cat=32;
               $meses = array("Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dic");
               $fecha=$meses[date('n')-1]. date(" d, Y g:i A");
               $ap_necesidades_c_b = new ApNecesidadesCB();
               $ap_necesidades_c_b->setCodCasaBebef($id_casa_benef);
               $ap_necesidades_c_b->setIdCategoria($id_cat);
               $ap_necesidades_c_b->setIdDetCatNec($id_det_cat);
               $ap_necesidades_c_b->setFechaIngreso($fecha);
               $ap_necesidades_c_b->save();
           }

           $check_33=$request->getPostParameter('33');
           if ($check_33!=null)
           {
               $id_casa_benef=$request->getPostParameter('id_CB');
               $id_cat=4;
               $id_det_cat=33;
               $meses = array("Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dic");
               $fecha=$meses[date('n')-1]. date(" d, Y g:i A");
               $ap_necesidades_c_b = new ApNecesidadesCB();
               $ap_necesidades_c_b->setCodCasaBebef($id_casa_benef);
               $ap_necesidades_c_b->setIdCategoria($id_cat);
               $ap_necesidades_c_b->setIdDetCatNec($id_det_cat);
               $ap_necesidades_c_b->setFechaIngreso($fecha);
               $ap_necesidades_c_b->save();
           }

           $check_53=$request->getPostParameter('53');
           if ($check_53!=null)
           {
               $id_casa_benef=$request->getPostParameter('id_CB');
               $id_cat=4;
               $id_det_cat=53;
               $meses = array("Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dic");
               $fecha=$meses[date('n')-1]. date(" d, Y g:i A");
               $ap_necesidades_c_b = new ApNecesidadesCB();
               $ap_necesidades_c_b->setCodCasaBebef($id_casa_benef);
               $ap_necesidades_c_b->setIdCategoria($id_cat);
               $ap_necesidades_c_b->setIdDetCatNec($id_det_cat);
               $ap_necesidades_c_b->setFechaIngreso($fecha);
               $ap_necesidades_c_b->save();
           }

           $check_34=$request->getPostParameter('34');
           if ($check_34!=null)
           {
               $id_casa_benef=$request->getPostParameter('id_CB');
               $id_cat=5;
               $id_det_cat=34;
               $meses = array("Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dic");
               $fecha=$meses[date('n')-1]. date(" d, Y g:i A");
               $ap_necesidades_c_b = new ApNecesidadesCB();
               $ap_necesidades_c_b->setCodCasaBebef($id_casa_benef);
               $ap_necesidades_c_b->setIdCategoria($id_cat);
               $ap_necesidades_c_b->setIdDetCatNec($id_det_cat);
               $ap_necesidades_c_b->setFechaIngreso($fecha);
               $ap_necesidades_c_b->save();
           }

           $check_35=$request->getPostParameter('35');
           if ($check_35!=null)
           {
               $id_casa_benef=$request->getPostParameter('id_CB');
               $id_cat=5;
               $id_det_cat=35;
               $meses = array("Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dic");
               $fecha=$meses[date('n')-1]. date(" d, Y g:i A");
               $ap_necesidades_c_b = new ApNecesidadesCB();
               $ap_necesidades_c_b->setCodCasaBebef($id_casa_benef);
               $ap_necesidades_c_b->setIdCategoria($id_cat);
               $ap_necesidades_c_b->setIdDetCatNec($id_det_cat);
               $ap_necesidades_c_b->setFechaIngreso($fecha);
               $ap_necesidades_c_b->save();
           }

           $check_36=$request->getPostParameter('36');
           if ($check_36!=null)
           {
               $id_casa_benef=$request->getPostParameter('id_CB');
               $id_cat=5;
               $id_det_cat=36;
               $meses = array("Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dic");
               $fecha=$meses[date('n')-1]. date(" d, Y g:i A");
               $ap_necesidades_c_b = new ApNecesidadesCB();
               $ap_necesidades_c_b->setCodCasaBebef($id_casa_benef);
               $ap_necesidades_c_b->setIdCategoria($id_cat);
               $ap_necesidades_c_b->setIdDetCatNec($id_det_cat);
               $ap_necesidades_c_b->setFechaIngreso($fecha);
               $ap_necesidades_c_b->save();
           }

           $check_37=$request->getPostParameter('37');
           if ($check_37!=null)
           {
               $id_casa_benef=$request->getPostParameter('id_CB');
               $id_cat=5;
               $id_det_cat=37;
               $meses = array("Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dic");
               $fecha=$meses[date('n')-1]. date(" d, Y g:i A");
               $ap_necesidades_c_b = new ApNecesidadesCB();
               $ap_necesidades_c_b->setCodCasaBebef($id_casa_benef);
               $ap_necesidades_c_b->setIdCategoria($id_cat);
               $ap_necesidades_c_b->setIdDetCatNec($id_det_cat);
               $ap_necesidades_c_b->setFechaIngreso($fecha);
               $ap_necesidades_c_b->save();
           }

           $check_38=$request->getPostParameter('38');
           if ($check_38!=null)
           {
               $id_casa_benef=$request->getPostParameter('id_CB');
               $id_cat=5;
               $id_det_cat=38;
               $meses = array("Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dic");
               $fecha=$meses[date('n')-1]. date(" d, Y g:i A");
               $ap_necesidades_c_b = new ApNecesidadesCB();
               $ap_necesidades_c_b->setCodCasaBebef($id_casa_benef);
               $ap_necesidades_c_b->setIdCategoria($id_cat);
               $ap_necesidades_c_b->setIdDetCatNec($id_det_cat);
               $ap_necesidades_c_b->setFechaIngreso($fecha);
               $ap_necesidades_c_b->save();
           }

           $check_39=$request->getPostParameter('39');
           if ($check_39!=null)
           {
               $id_casa_benef=$request->getPostParameter('id_CB');
               $id_cat=5;
               $id_det_cat=39;
               $meses = array("Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dic");
               $fecha=$meses[date('n')-1]. date(" d, Y g:i A");
               $ap_necesidades_c_b = new ApNecesidadesCB();
               $ap_necesidades_c_b->setCodCasaBebef($id_casa_benef);
               $ap_necesidades_c_b->setIdCategoria($id_cat);
               $ap_necesidades_c_b->setIdDetCatNec($id_det_cat);
               $ap_necesidades_c_b->setFechaIngreso($fecha);
               $ap_necesidades_c_b->save();
           }

           $check_40=$request->getPostParameter('40');
           if ($check_40!=null)
           {
               $id_casa_benef=$request->getPostParameter('id_CB');
               $id_cat=6;
               $id_det_cat=40;
               $meses = array("Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dic");
               $fecha=$meses[date('n')-1]. date(" d, Y g:i A");
               $ap_necesidades_c_b = new ApNecesidadesCB();
               $ap_necesidades_c_b->setCodCasaBebef($id_casa_benef);
               $ap_necesidades_c_b->setIdCategoria($id_cat);
               $ap_necesidades_c_b->setIdDetCatNec($id_det_cat);
               $ap_necesidades_c_b->setFechaIngreso($fecha);
               $ap_necesidades_c_b->save();
           }

           $check_41=$request->getPostParameter('41');
           if ($check_41!=null)
           {
               $id_casa_benef=$request->getPostParameter('id_CB');
               $id_cat=6;
               $id_det_cat=41;
               $meses = array("Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dic");
               $fecha=$meses[date('n')-1]. date(" d, Y g:i A");
               $ap_necesidades_c_b = new ApNecesidadesCB();
               $ap_necesidades_c_b->setCodCasaBebef($id_casa_benef);
               $ap_necesidades_c_b->setIdCategoria($id_cat);
               $ap_necesidades_c_b->setIdDetCatNec($id_det_cat);
               $ap_necesidades_c_b->setFechaIngreso($fecha);
               $ap_necesidades_c_b->save();
           }

           $check_42=$request->getPostParameter('42');
           if ($check_42!=null)
           {
               $id_casa_benef=$request->getPostParameter('id_CB');
               $id_cat=6;
               $id_det_cat=42;
               $meses = array("Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dic");
               $fecha=$meses[date('n')-1]. date(" d, Y g:i A");
               $ap_necesidades_c_b = new ApNecesidadesCB();
               $ap_necesidades_c_b->setCodCasaBebef($id_casa_benef);
               $ap_necesidades_c_b->setIdCategoria($id_cat);
               $ap_necesidades_c_b->setIdDetCatNec($id_det_cat);
               $ap_necesidades_c_b->setFechaIngreso($fecha);
               $ap_necesidades_c_b->save();
           }

           $check_43=$request->getPostParameter('43');
           if ($check_43!=null)
           {
               $id_casa_benef=$request->getPostParameter('id_CB');
               $id_cat=6;
               $id_det_cat=43;
               $meses = array("Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dic");
               $fecha=$meses[date('n')-1]. date(" d, Y g:i A");
               $ap_necesidades_c_b = new ApNecesidadesCB();
               $ap_necesidades_c_b->setCodCasaBebef($id_casa_benef);
               $ap_necesidades_c_b->setIdCategoria($id_cat);
               $ap_necesidades_c_b->setIdDetCatNec($id_det_cat);
               $ap_necesidades_c_b->setFechaIngreso($fecha);
               $ap_necesidades_c_b->save();
           }

           $check_44=$request->getPostParameter('44');
           if ($check_44!=null)
           {
               $id_casa_benef=$request->getPostParameter('id_CB');
               $id_cat=7;
               $id_det_cat=44;
               $meses = array("Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dic");
               $fecha=$meses[date('n')-1]. date(" d, Y g:i A");
               $ap_necesidades_c_b = new ApNecesidadesCB();
               $ap_necesidades_c_b->setCodCasaBebef($id_casa_benef);
               $ap_necesidades_c_b->setIdCategoria($id_cat);
               $ap_necesidades_c_b->setIdDetCatNec($id_det_cat);
               $ap_necesidades_c_b->setFechaIngreso($fecha);
               $ap_necesidades_c_b->save();
           }

           $check_45=$request->getPostParameter('45');
           if ($check_45!=null)
           {
               $id_casa_benef=$request->getPostParameter('id_CB');
               $id_cat=7;
               $id_det_cat=45;
               $meses = array("Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dic");
               $fecha=$meses[date('n')-1]. date(" d, Y g:i A");
               $ap_necesidades_c_b = new ApNecesidadesCB();
               $ap_necesidades_c_b->setCodCasaBebef($id_casa_benef);
               $ap_necesidades_c_b->setIdCategoria($id_cat);
               $ap_necesidades_c_b->setIdDetCatNec($id_det_cat);
               $ap_necesidades_c_b->setFechaIngreso($fecha);
               $ap_necesidades_c_b->save();
           }

           $check_46=$request->getPostParameter('46');
           if ($check_46!=null)
           {
               $id_casa_benef=$request->getPostParameter('id_CB');
               $id_cat=8;
               $id_det_cat=46;
               $meses = array("Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dic");
               $fecha=$meses[date('n')-1]. date(" d, Y g:i A");
               $ap_necesidades_c_b = new ApNecesidadesCB();
               $ap_necesidades_c_b->setCodCasaBebef($id_casa_benef);
               $ap_necesidades_c_b->setIdCategoria($id_cat);
               $ap_necesidades_c_b->setIdDetCatNec($id_det_cat);
               $ap_necesidades_c_b->setFechaIngreso($fecha);
               $ap_necesidades_c_b->save();
           }

           $check_47=$request->getPostParameter('47');
           if ($check_47!=null)
           {
               $id_casa_benef=$request->getPostParameter('id_CB');
               $id_cat=8;
               $id_det_cat=47;
               $meses = array("Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dic");
               $fecha=$meses[date('n')-1]. date(" d, Y g:i A");
               $ap_necesidades_c_b = new ApNecesidadesCB();
               $ap_necesidades_c_b->setCodCasaBebef($id_casa_benef);
               $ap_necesidades_c_b->setIdCategoria($id_cat);
               $ap_necesidades_c_b->setIdDetCatNec($id_det_cat);
               $ap_necesidades_c_b->setFechaIngreso($fecha);
               $ap_necesidades_c_b->save();
           }

           $check_48=$request->getPostParameter('48');
           if ($check_48!=null)
           {
               $id_casa_benef=$request->getPostParameter('id_CB');
               $id_cat=8;
               $id_det_cat=48;
               $meses = array("Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dic");
               $fecha=$meses[date('n')-1]. date(" d, Y g:i A");
               $ap_necesidades_c_b = new ApNecesidadesCB();
               $ap_necesidades_c_b->setCodCasaBebef($id_casa_benef);
               $ap_necesidades_c_b->setIdCategoria($id_cat);
               $ap_necesidades_c_b->setIdDetCatNec($id_det_cat);
               $ap_necesidades_c_b->setFechaIngreso($fecha);
               $ap_necesidades_c_b->save();
           }

           $check_49=$request->getPostParameter('49');
           if ($check_49!=null)
           {
               $id_casa_benef=$request->getPostParameter('id_CB');
               $id_cat=9;
               $id_det_cat=49;
               $meses = array("Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dic");
               $fecha=$meses[date('n')-1]. date(" d, Y g:i A");
               $ap_necesidades_c_b = new ApNecesidadesCB();
               $ap_necesidades_c_b->setCodCasaBebef($id_casa_benef);
               $ap_necesidades_c_b->setIdCategoria($id_cat);
               $ap_necesidades_c_b->setIdDetCatNec($id_det_cat);
               $ap_necesidades_c_b->setFechaIngreso($fecha);
               $ap_necesidades_c_b->save();
           }

           $check_50=$request->getPostParameter('50');
           if ($check_50!=null)
           {
               $id_casa_benef=$request->getPostParameter('id_CB');
               $id_cat=9;
               $id_det_cat=50;
               $meses = array("Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dic");
               $fecha=$meses[date('n')-1]. date(" d, Y g:i A");
               $ap_necesidades_c_b = new ApNecesidadesCB();
               $ap_necesidades_c_b->setCodCasaBebef($id_casa_benef);
               $ap_necesidades_c_b->setIdCategoria($id_cat);
               $ap_necesidades_c_b->setIdDetCatNec($id_det_cat);
               $ap_necesidades_c_b->setFechaIngreso($fecha);
               $ap_necesidades_c_b->save();
           }

           $check_51=$request->getPostParameter('51');
           if ($check_51!=null)
           {
               $id_casa_benef=$request->getPostParameter('id_CB');
               $id_cat=10;
               $id_det_cat=51;
               $meses = array("Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dic");
               $fecha=$meses[date('n')-1]. date(" d, Y g:i A");
               $ap_necesidades_c_b = new ApNecesidadesCB();
               $ap_necesidades_c_b->setCodCasaBebef($id_casa_benef);
               $ap_necesidades_c_b->setIdCategoria($id_cat);
               $ap_necesidades_c_b->setIdDetCatNec($id_det_cat);
               $ap_necesidades_c_b->setFechaIngreso($fecha);
               $ap_necesidades_c_b->save();
           }

           $check_52=$request->getPostParameter('52');
           if ($check_52!=null)
           {
               $id_casa_benef=$request->getPostParameter('id_CB');
               $id_cat=10;
               $id_det_cat=52;
               $meses = array("Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dic");
               $fecha=$meses[date('n')-1]. date(" d, Y g:i A");
               $ap_necesidades_c_b = new ApNecesidadesCB();
               $ap_necesidades_c_b->setCodCasaBebef($id_casa_benef);
               $ap_necesidades_c_b->setIdCategoria($id_cat);
               $ap_necesidades_c_b->setIdDetCatNec($id_det_cat);
               $ap_necesidades_c_b->setFechaIngreso($fecha);
               $ap_necesidades_c_b->save();
           }
           $this->redirect('notificacionMensaje/index');
       }
    }
 }

