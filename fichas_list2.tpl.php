<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2" />
<title>Conduciendo - <?php echo $strPageTitle = 'Fichas' . ' - ' . 'Todas'; ?></title>
<link href="assets/styles/screen.css" rel="stylesheet" type="text/css" />
</head>
<body>
<style>
    table.datagrid td {
        border:1px solid #AAAAFF;
        min-width:100px;
        padding:5px;
    }
    table.datagrid th {
        border:1px solid #FFFFFF;
        min-width:100px;
        padding:5px;
    }
</style>
<?
include("header.php");
?>
<div class="container">
  <div class="content">
<?php
	// This is the HTML template include file (.tpl.php) for the fichas_list.php
	// form DRAFT page.  Remember that this is a DRAFT.  It is MEANT to be altered/modified.

	// Be sure to move this out of this directory before modifying to ensure that subsequent 
	// code re-generations do not overwrite your changes.

	$strPageTitle = 'Fichas' . ' - ' . 'Todas';
	require(__INCLUDES__ . '/header.inc.php');
?>

	<?php $this->RenderBegin() ?>

	<div id="titleBar">
		<h2 id="right"><a href="/backend/index.php">&laquo; <?php _t('Index'); ?></a></h2>
		<h2><?php _t('Todas'); ?></h2>
		<h1><?php _t('Fichas'); ?></h1>
	</div>

	<?php $this->dtgFichases->Render(); ?>

	<p class="create">
		<a href="/backend/fichas_edit.php"><?php _t('Crear una Ficha nueva'); ?></a>
	</p>

	<?php $this->RenderEnd() ?>
   </div>
</div>
	
<?php require(__INCLUDES__ . '/footer.inc.php'); ?>