<?php
	// This is the HTML template include file (.tpl.php) for the encuestas_edit.php
	// form DRAFT page.  Remember that this is a DRAFT.  It is MEANT to be altered/modified.

	// Be sure to move this out of the generated/ subdirectory before modifying to ensure that subsequent 
	// code re-generations do not overwrite your changes.

	$strPageTitle = QApplication::Translate('Encuestas') . ' - ' . $this->mctEncuestas->TitleVerb;
	require(__INCLUDES__ . '/header.inc.php');
?>

	<?php $this->RenderBegin() ?>

	<div id="titleBar">
		<h2><?php _p($this->mctEncuestas->TitleVerb); ?></h2>
		<h1><?php _t('Encuestas')?></h1>
	</div>

	<div id="formControls">
		<?php $this->lblId->RenderWithName(); ?>

		<?php $this->txtTitulo->RenderWithName(); ?>

		<?php $this->txtOpcion1->RenderWithName(); ?>

		<?php $this->txtOpcion2->RenderWithName(); ?>

		<?php $this->txtOpcion3->RenderWithName(); ?>

		<?php $this->txtOpcion4->RenderWithName(); ?>

		<?php $this->txtOpcion5->RenderWithName(); ?>

		<?php $this->txtOpcion6->RenderWithName(); ?>

		<?php $this->txtValor1->RenderWithName(); ?>

		<?php $this->txtValor2->RenderWithName(); ?>

		<?php $this->txtValor3->RenderWithName(); ?>

		<?php $this->txtValor4->RenderWithName(); ?>

		<?php $this->txtValor5->RenderWithName(); ?>

		<?php $this->txtValor6->RenderWithName(); ?>

		<?php $this->txtEstado->RenderWithName(); ?>

	</div>

	<div id="formActions">
		<div id="save"><?php $this->btnSave->Render(); ?></div>
		<div id="cancel"><?php $this->btnCancel->Render(); ?></div>
		<div id="delete"><?php $this->btnDelete->Render(); ?></div>
	</div>

	<?php $this->RenderEnd() ?>	

<?php require(__INCLUDES__ .'/footer.inc.php'); ?>