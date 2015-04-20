<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2" />
<title>Conduciendo - Autores</title>
<link href="assets/styles/screen.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?
include("header.php");
?>
<div class="container">
  <div class="content">
  <?php
	// This is the HTML template include file (.tpl.php) for the autores_list.php
	// form DRAFT page.  Remember that this is a DRAFT.  It is MEANT to be altered/modified.

	// Be sure to move this out of this directory before modifying to ensure that subsequent 
	// code re-generations do not overwrite your changes.

	$strPageTitle = QApplication::Translate('Autoreses') . ' - ' . QApplication::Translate('List All');
	require(__INCLUDES__ . '/header.inc.php');
?>

	<?php $this->RenderBegin() ?>

	<?php $this->dtgAutoreses->Render(); ?>

	<p class="create">
		<a href="<?php _p(__VIRTUAL_DIRECTORY__ . __BACKEND_DIR__) ?>/autores_edit.php"><?php _t('Crear un nuevo Autor'); ?></a>
	</p>

	<?php $this->RenderEnd() ?>
	 </div>
</div>
  
<?php require(__INCLUDES__ . '/footer.inc.php'); ?>
