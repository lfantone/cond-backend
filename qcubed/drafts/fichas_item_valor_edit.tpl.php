<?php
	// This is the HTML template include file (.tpl.php) for the fichas_item_valor_edit.php
	// form DRAFT page.  Remember that this is a DRAFT.  It is MEANT to be altered/modified.

	// Be sure to move this out of the generated/ subdirectory before modifying to ensure that subsequent 
	// code re-generations do not overwrite your changes.

	$strPageTitle = QApplication::Translate('FichasItemValor') . ' - ' . $this->mctFichasItemValor->TitleVerb;
	require(__INCLUDES__ . '/header.inc.php');
?>

	<?php $this->RenderBegin() ?>

	<div id="titleBar">
		<h2><?php _p($this->mctFichasItemValor->TitleVerb); ?></h2>
		<h1><?php _t('FichasItemValor')?></h1>
	</div>

	<div id="formControls">
		<?php $this->lstIdFichasObject->RenderWithName(); ?>

		<?php $this->lstIdItemObject->RenderWithName(); ?>

		<?php $this->txtValor->RenderWithName(); ?>

	</div>

	<div id="formActions">
		<div id="save"><?php $this->btnSave->Render(); ?></div>
		<div id="cancel"><?php $this->btnCancel->Render(); ?></div>
		<div id="delete"><?php $this->btnDelete->Render(); ?></div>
	</div>

	<?php $this->RenderEnd() ?>	

<?php require(__INCLUDES__ .'/footer.inc.php'); ?>