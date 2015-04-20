<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2" />
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
  // This is the HTML template include file (.tpl.php) for the item_edit.php
  // form DRAFT page.  Remember that this is a DRAFT.  It is MEANT to be altered/modified.

  // Be sure to move this out of the generated/ subdirectory before modifying to ensure that subsequent 
  // code re-generations do not overwrite your changes.

  $strPageTitle = QApplication::Translate('Item') . ' - ' . $this->mctItem->TitleVerb;
  require(__INCLUDES__ . '/header.inc.php');
?>

  <?php $this->RenderBegin() ?>

  <div id="titleBar">
    <h2><?php _p($this->mctItem->TitleVerb); ?></h2>
    <h1><?php _t('Item')?></h1>
  </div>

  <div id="formControls">
    <?php $this->lblIdItem->RenderWithName(); ?>

    <?//php $this->txtNombre->RenderWithName(); ?>

    <?php $this->txtDescripcion->RenderWithName(); ?>

    <?php $this->txtSeccion->RenderWithName(); ?>

    <?//php $this->lstIdTipoDatoTypeObject->RenderWithName(); ?>
    
    <?php $this->lstIdPaisObject->RenderWithName(); ?>

  </div>

  <div id="formActions">
    <div id="save"><?php $this->btnSave->Render(); ?></div>
    <div id="cancel"><?php $this->btnCancel->Render(); ?></div>
    <div id="delete"><?php $this->btnDelete->Render(); ?></div>
  </div>

  <?php $this->RenderEnd() ?> 
   </div>
</div>
<?php require(__INCLUDES__ .'/footer.inc.php'); ?>
