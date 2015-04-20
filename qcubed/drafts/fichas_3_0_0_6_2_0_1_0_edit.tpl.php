<?php
	// This is the HTML template include file (.tpl.php) for the fichas_3_0_0_6_2_0_1_0_edit.php
	// form DRAFT page.  Remember that this is a DRAFT.  It is MEANT to be altered/modified.

	// Be sure to move this out of the generated/ subdirectory before modifying to ensure that subsequent 
	// code re-generations do not overwrite your changes.

	$strPageTitle = QApplication::Translate('Fichas30062010') . ' - ' . $this->mctFichas30062010->TitleVerb;
	require(__INCLUDES__ . '/header.inc.php');
?>

	<?php $this->RenderBegin() ?>

	<div id="titleBar">
		<h2><?php _p($this->mctFichas30062010->TitleVerb); ?></h2>
		<h1><?php _t('Fichas30062010')?></h1>
	</div>

	<div id="formControls">
		<?php $this->lblId->RenderWithName(); ?>

		<?php $this->txtIdMarca->RenderWithName(); ?>

		<?php $this->txtIdTipos->RenderWithName(); ?>

		<?php $this->txtIdModelo->RenderWithName(); ?>

		<?php $this->txtIdVersion->RenderWithName(); ?>

		<?php $this->txtDescripcion->RenderWithName(); ?>

		<?php $this->txtPrecio->RenderWithName(); ?>

		<?php $this->txtAnio->RenderWithName(); ?>

		<?php $this->txtCombustible->RenderWithName(); ?>

		<?php $this->txtCilindrada->RenderWithName(); ?>

		<?php $this->txtCilindros->RenderWithName(); ?>

		<?php $this->txtPotenciaMaxima->RenderWithName(); ?>

		<?php $this->txtParMotorTorque->RenderWithName(); ?>

		<?php $this->txtPosicion->RenderWithName(); ?>

		<?php $this->txtAlimentacion->RenderWithName(); ?>

		<?php $this->txtMotorShort->RenderWithName(); ?>

		<?php $this->txtValvulas->RenderWithName(); ?>

		<?php $this->txtTipo->RenderWithName(); ?>

		<?php $this->txtMarchas->RenderWithName(); ?>

		<?php $this->txtTraccion->RenderWithName(); ?>

		<?php $this->txtVelocidadMaxima->RenderWithName(); ?>

		<?php $this->txtAceleracion0100->RenderWithName(); ?>

		<?php $this->txtConsumoUrbano->RenderWithName(); ?>

		<?php $this->txtConsumoInterurbano->RenderWithName(); ?>

		<?php $this->txtConsumoMixto->RenderWithName(); ?>

		<?php $this->txtPuertas->RenderWithName(); ?>

		<?php $this->txtPlazas->RenderWithName(); ?>

		<?php $this->txtFilasDeAsientos->RenderWithName(); ?>

		<?php $this->txtInfoEjes->RenderWithName(); ?>

		<?php $this->txtPeso->RenderWithName(); ?>

		<?php $this->txtCapacidadBaul->RenderWithName(); ?>

		<?php $this->txtCapacidadTanque->RenderWithName(); ?>

		<?php $this->txtCapacidadCarga->RenderWithName(); ?>

		<?php $this->txtFrenosDelanteros->RenderWithName(); ?>

		<?php $this->txtFrenosTraseros->RenderWithName(); ?>

		<?php $this->txtNeumaticos->RenderWithName(); ?>

		<?php $this->txtSuspensionDelantera->RenderWithName(); ?>

		<?php $this->txtSuspensionTrasera->RenderWithName(); ?>

		<?php $this->txtIdEstado->RenderWithName(); ?>

		<?php $this->chkProcesada->RenderWithName(); ?>

	</div>

	<div id="formActions">
		<div id="save"><?php $this->btnSave->Render(); ?></div>
		<div id="cancel"><?php $this->btnCancel->Render(); ?></div>
		<div id="delete"><?php $this->btnDelete->Render(); ?></div>
	</div>

	<?php $this->RenderEnd() ?>	

<?php require(__INCLUDES__ .'/footer.inc.php'); ?>