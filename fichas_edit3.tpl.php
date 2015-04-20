<?php header("Content-Type: text/html; charset=utf-8"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Conduciendo - Autores</title>
<link href="assets/styles/screen.css" rel="stylesheet" type="text/css" />
</head>
<body>
<style>
    h2,h3 {
        margin-left:200px;
    }
    div.renderWithName {
        margin: 12px 0px;
        width:500px;
    }
    div.renderWithName div.right {
        float:left;
    }
    .panel {
overflow: scroll; width: 500px; display: block; max-height: 500px !important;
    }
    .smallInput {

        width:50px !important;
        
    }
    .right span, .right input {
        float:left;
    }
    .floatLeft {
        float:left;
        margin-right: 5px;
    }
    .precio {
        
    }
    #absoluteRight h4 {
        text-align:center;
    }
    #absoluteRight input {
        min-width:178px !important;
    }
    #absoluteRight {
        background-color:white;
        border:3px solid gray;
        padding:10px;
        position:fixed;
        right:30px;
        text-align: left ;
        top:30px;
        width:200px;
        height:400px;
        overflow-y:scroll;
    }
</style>
<?
include("header.php");
?>
<div class="container">
  <div class="content">

<?php
  // This is the HTML template include file (.tpl.php) for the fichas_edit.php
  // form DRAFT page.  Remember that this is a DRAFT.  It is MEANT to be altered/modified.

  // Be sure to move this out of the generated/ subdirectory before modifying to ensure that subsequent
  // code re-generations do not overwrite your changes.

  $strPageTitle = QApplication::Translate('Fichas') . ' - ' . $this->mctFichas->TitleVerb;
  require(__INCLUDES__ . '/header.inc.php');
?>

  <?php $this->RenderBegin() ?>

  <div id="titleBar">
    <h2><?php _p($this->mctFichas->TitleVerb); ?></h2>
    <h1><?php _t('Fichas')?></h1>
  </div>

  <div id="formControls">
        <?php $this->lstFichasCargar->RenderWithName(); ?>
        <?php $this->btnFichasCargar->RenderWithName(); ?>
        <?php $this->objWaitIcon->RenderWithName(); ?>

        <hr />

    <?php $this->lblId->RenderWithName(); ?>

    <?php $this->lstIdMarcaObject->RenderWithName(); ?>

    <?php $this->lstIdModeloObject->RenderWithName(); ?>

    <?php $this->lstIdVersionObject->RenderWithName(); ?>

        <?php $this->lstIdTiposObject->RenderWithName(); ?>

    <?php $this->txtPrecio->RenderWithName(); ?><?php $this->lstTipoMonedaPrecio->Render(); ?>

    <?php $this->txtAnio->RenderWithName(); ?>

    <?php $this->txtDescripcion->RenderWithName(); ?>

        <h2>T&eacute;cnica</h2>
        <h3>Motor</h3>

    <?php $this->txtCombustible->RenderWithName(); ?>

    <?php $this->txtCilindrada->RenderWithName(); ?>

    <?php $this->txtCilindros->RenderWithName(); ?>

    <?php $this->txtPotenciaMaxima->RenderWithName(); ?>

    <?php $this->txtParMotorTorque->RenderWithName(); ?>

    <?php $this->txtPosicion->RenderWithName(); ?>

    <?php $this->txtAlimentacion->RenderWithName(); ?>

    <?//php $this->txtRelacionDeCompresion->RenderWithName(); ?>

    <?php $this->txtValvulas->RenderWithName(); ?>
        <h3>Transmisi&oacute;n</h3>

    <?php $this->txtTipo->RenderWithName(); ?>

    <?php $this->txtMarchas->RenderWithName(); ?>

    <?php $this->txtTraccion->RenderWithName(); ?>
        <h3>Performance</h3>

    <?php $this->txtVelocidadMaxima->RenderWithName(); ?>

    <?php $this->txtAceleracion0100->RenderWithName(); ?>

    <?php $this->txtConsumoUrbano->RenderWithName(); ?>

    <?php $this->txtConsumoInterurbano->RenderWithName(); ?>

    <?php $this->txtConsumoMixto->RenderWithName(); ?>

    <?//php $this->txtEmisionesCo2->RenderWithName(); ?>
        <h3>Dimensiones y chasis</h3>

    <?//php $this->txtTipoCarroceria->RenderWithName(); ?>

    <?php $this->txtPuertas->RenderWithName(); ?>

    <?php $this->txtPlazas->RenderWithName(); ?>

    <?php $this->txtFilasDeAsientos->RenderWithName(); ?>

    <?php $this->txtInfoEjes->RenderWithName(); ?>

    <?php $this->txtPeso->RenderWithName(); ?>

    <?php $this->txtCapacidadBaul->RenderWithName(); ?>

    <?php $this->txtCapacidadTanque->RenderWithName(); ?>

    <?//php $this->txtInfoCajaCarga->RenderWithName(); ?>

    <?//php $this->txtVolumenCajaCarga->RenderWithName(); ?>

    <?php $this->txtCapacidadCarga->RenderWithName(); ?>

    <?php $this->txtFrenosDelanteros->RenderWithName(); ?>

    <?php $this->txtFrenosTraseros->RenderWithName(); ?>

    <?//php $this->txtLlantas->RenderWithName(); ?>

    <?php $this->txtNeumaticos->RenderWithName(); ?>

    <?php $this->txtSuspensionDelantera->RenderWithName(); ?>

    <?php $this->txtSuspensionTrasera->RenderWithName(); ?>

        <h2>Confort y dise&ntilde;o</h2>
        <!-- <h3>Interior</h3> -->

        <?php
        if ($this->objItemInputArray && $this->objItemInputSeccionArray) {
            foreach ($this->objItemInputSeccionArray as $strSeccion => $objItemInputArray) {
                echo '<div id="seccion_'.$strSeccion.' onclick="show_hide(this.id);" ><h3 style="text-transform: capitalize;">'.$strSeccion.'</h3>';
                foreach ($objItemInputArray as $objItemInput) {
                    $objItemInput->RenderWithName();
                }
                echo '</div>';
            }
//            $arrSecciones = array();
//            foreach ($this->objItemInputArray as $objItem) {
//                if (!in_array($this->objItemAllArray[$objItem->ControlId]->Seccion, $arrSecciones)) {
//                    echo '<h3 style="text-transform: capitalize;">'.$this->objItemAllArray[$objItem->ControlId]->Seccion.'</h3>';
//                    array_push($arrSecciones, $this->objItemAllArray[$objItem->ControlId]->Seccion);
//                }
//                //$this->objCloseLinkArray[$objItem->ControlId]->Render();
//                $objItem->RenderWithName();
//            }
        }
        ?>

    <?php $this->lstIdEstadoObject->RenderWithName(); ?>

        <hr />
        <h3>Asociar Imagenes</h3>
        <?php $this->txtFiltroImagenes->RenderWithName(); ?>

        <?php $this->btnMostrarImagenes->Render(); ?>

        <?php if ($this->objCheckBoxListImagesLoaded) : ?>
            <h3>Imagenes vinculadas</h3>
            <?php $this->objCheckBoxListImagesLoaded->Render(); ?>
        <?php endif; ?>

        <?php if ($this->objCheckBoxListImages) : ?>
            <h3>Vincular</h3>
            <?php $this->objCheckBoxListImages->Render(); ?>
        <?php endif; ?>

        <?php $this->lstAsociarNota->RenderWithName(); ?>

        <?php $this->lstAsociarNotaImagenes->RenderWithName(); ?>


  </div>

  <div id="formActions">
    <div style="float:left; padding-right: 10px;"><?php $this->btnSaveAndStay->Render(); ?></div>
    <div id="save"><?php $this->btnSave->Render(); ?></div>
    <!-- <div style="float:left; padding-left: 10px;"><?php $this->btnGuardarMostrarXml->Render(); ?></div> -->
    <div id="cancel"><?php $this->btnCancel->Render(); ?></div>
    <!-- <div id="delete"><?php $this->btnDelete->Render(); ?></div> -->
        <?php if ($this->intIdFichas) : ?>
    <div style="float:left; padding-left: 10px;"><?php $this->btnMostrarXml->Render(); ?></div>
        <?php endif; ?>
  </div>
<!--
      <div id="absoluteRight">
          <h4>Items que se pueden utilizar</h4>
          <?//php foreach ($this->objItemLinksArray as $objItemLink) {
              //$objItemLink->Render();
              //print '<br />';
          //}
          ?>
      </div>
-->

  <?php $this->RenderEnd() ?>
   </div>
</div>
<?php require(__INCLUDES__ .'/footer.inc.php'); ?>


