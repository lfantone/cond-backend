<?php
	// This is the HTML template include file (.tpl.php) for the moneda_pais_edit.php
	// form DRAFT page.  Remember that this is a DRAFT.  It is MEANT to be altered/modified.

	// Be sure to move this out of the generated/ subdirectory before modifying to ensure that subsequent 
	// code re-generations do not overwrite your changes.

	$strPageTitle = QApplication::Translate('MonedaPais') . ' - ' . $this->mctMonedaPais->TitleVerb;
	require(__INCLUDES__ . '/header.inc.php');
?>

	<?php $this->RenderBegin() ?>

	<div id="titleBar">
		<h2><?php _p($this->mctMonedaPais->TitleVerb); ?></h2>
		<h1><?php _t('MonedaPais')?></h1>
	</div>

	<div id="formControls">
		<?php $this->txtIdMoneda->RenderWithName(); ?>

		<?php $this->txtIdPais->RenderWithName(); ?>

		<?php $this->txtOrden->RenderWithName(); ?>

	</div>

	<div id="formActions">
		<div id="save"><?php $this->btnSave->Render(); ?></div>
		<div id="cancel"><?php $this->btnCancel->Render(); ?></div>
		<div id="delete"><?php $this->btnDelete->Render(); ?></div>
	</div>

	<?php $this->RenderEnd() ?>	

<?php require(__INCLUDES__ .'/footer.inc.php'); ?>