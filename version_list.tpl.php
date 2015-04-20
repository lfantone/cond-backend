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
  <div class="content"><?php
	// This is the HTML template include file (.tpl.php) for the version_list.php
	// form DRAFT page.  Remember that this is a DRAFT.  It is MEANT to be altered/modified.

	// Be sure to move this out of this directory before modifying to ensure that subsequent 
	// code re-generations do not overwrite your changes.

	$strPageTitle = QApplication::Translate('Versions') . ' - ' . QApplication::Translate('List All');
	require(__INCLUDES__ . '/header.inc.php');
  if (!$intIdPais = QApplication::QueryString('id_pais'))
      $intIdPais = 2; 
?>

	<?php $this->RenderBegin() ?>

	<div id="titleBar">
		<h2 id="right"><a href="<?php _p(__BACKEND_DIR__) ?>/index.php">&laquo; <?php _t('Go to "Form Drafts"'); ?></a></h2>
		<h2><?php _t('List All'); ?></h2>
		<h1><?php _t('Versions'); ?></h1>
	</div>

	<?php $this->dtgVersions->Render(); ?>

	<p class="create">
		<a href="<?php _p(__BACKEND_DIR__) ?>/version_edit.php?id_pais=<?php echo $intIdPais; ?>"><?php _t('Crear nueva '); ?> <?php _t('Version');?></a>
	</p>

	<?php $this->RenderEnd() ?>
  </div></div>
<?php require(__INCLUDES__ . '/footer.inc.php'); ?>
