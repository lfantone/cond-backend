<?php header("Content-Type: text/html; charset=utf-8"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Conduciendo - Precios</title>
<link href="assets/styles/screen.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?
include("header.php");
?>
<div class="container">
  <div class="content">
<?php
$strPageTitle = 'Precios';
require(__INCLUDES__ . '/header.inc.php');
?>
<style type="text/css">
    .divinline div {
        display: inline;
    }
    .divinline div.renderWithName {

    }
    .divfloatleft div {
        float: left;
    }
</style>
    <?php $this->RenderBegin() ?>

    <div id="titleBar">
        <h2><?php "Precios"; ?></h2>
    </div>

    <div id="formControls">
        <table border="1">
            <tr>
                <td colspan="4" valign="top"><?php $this->lstItemsPerPage->RenderWithName(); ?></td>
                <td colspan="1" valign="top"><?php $this->btnMostrar->Render(); ?></td>
            </tr>
            <tr>
                <td colspan="4" valign="top"><?php $this->lstOrdenar->RenderWithName(); ?>&nbsp;<?php $this->lstAscDesc->RenderWithName(); ?></td>
                <td colspan="1" valign="top"><?php $this->btnOrdenar->Render(); ?></td>
            </tr>
            <tr>
                <td colspan="4" valign="top"><div class="divfloatleft"><?php $this->lstBuscarPor->RenderWithName(); ?>&nbsp;<?php $this->txtBuscar->Render(); ?></div></td>
                <td colspan="1" valign="top"><?php $this->btnBuscar->Render(); ?></td>
            </tr>
            <tr><td colspan="5" align="center" valign="top">
                <?php $this->btnPrev->Render(); ?>&nbsp;
                <?php foreach ($this->arrLinks as $objLink) $objLink->Render(); ?>
                &nbsp;<?php $this->btnNext->Render(); ?>
            </td></tr>
        <?php foreach ($this->objFichasArray as $objFicha) : ?>
        <tr>
            <td class="divinline" valign="top" width="15%"><?php echo $objFicha->IdMarcaObject->Nombre; ?></td>
            <td class="divinline" valign="top" width="15%"><?php echo $objFicha->IdModeloObject->Nombre; ?></td>
            <td class="divinline" valign="top" width="15%"><?php echo $objFicha->IdVersionObject->Nombre; ?></td>
            <td class="divinline" valign="top" width="27%"><?php $this->GetPrecioInputById($objFicha->Id)->Render(); ?></td>
            <td valign="top" width="28%"><?php $this->GetMonedaInputById($objFicha->Id)->Render(); ?></td>
        </tr>
        <?php endforeach; ?>
        </table>


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
