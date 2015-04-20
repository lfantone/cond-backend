<?php
	// This is the HTML template include file (.tpl.php) for fichasEditPanel.
	// Remember that this is a DRAFT.  It is MEANT to be altered/modified.
	// Be sure to move this out of the drafts/dashboard subdirectory before modifying to ensure that subsequent 
	// code re-generations do not overwrite your changes.
?>
	<div id="formControls">
		<?php $_CONTROL->lblId->RenderWithName(); ?>

		<?php $_CONTROL->lstIdMarcaObject->RenderWithName(); ?>

		<?php $_CONTROL->lstIdTiposObject->RenderWithName(); ?>

		<?php $_CONTROL->lstIdModeloObject->RenderWithName(); ?>

		<?php $_CONTROL->lstIdVersionObject->RenderWithName(); ?>

		<?php $_CONTROL->lstIdPaisObject->RenderWithName(); ?>

		<?php $_CONTROL->txtIdSeguro->RenderWithName(); ?>

		<?php $_CONTROL->txtDescripcion->RenderWithName(); ?>

		<?php $_CONTROL->txtPrecio->RenderWithName(); ?>

		<?php $_CONTROL->txtAnio->RenderWithName(); ?>

		<?php $_CONTROL->txtCombustible->RenderWithName(); ?>

		<?php $_CONTROL->txtCilindrada->RenderWithName(); ?>

		<?php $_CONTROL->txtCilindros->RenderWithName(); ?>

		<?php $_CONTROL->txtPotenciaMaxima->RenderWithName(); ?>

		<?php $_CONTROL->txtParMotorTorque->RenderWithName(); ?>

		<?php $_CONTROL->txtPosicion->RenderWithName(); ?>

		<?php $_CONTROL->txtAlimentacion->RenderWithName(); ?>

		<?php $_CONTROL->txtMotorShort->RenderWithName(); ?>

		<?php $_CONTROL->txtValvulas->RenderWithName(); ?>

		<?php $_CONTROL->txtTipo->RenderWithName(); ?>

		<?php $_CONTROL->txtMarchas->RenderWithName(); ?>

		<?php $_CONTROL->txtTraccion->RenderWithName(); ?>

		<?php $_CONTROL->txtVelocidadMaxima->RenderWithName(); ?>

		<?php $_CONTROL->txtAceleracion0100->RenderWithName(); ?>

		<?php $_CONTROL->txtConsumoUrbano->RenderWithName(); ?>

		<?php $_CONTROL->txtConsumoInterurbano->RenderWithName(); ?>

		<?php $_CONTROL->txtConsumoMixto->RenderWithName(); ?>

		<?php $_CONTROL->txtPuertas->RenderWithName(); ?>

		<?php $_CONTROL->txtPlazas->RenderWithName(); ?>

		<?php $_CONTROL->txtFilasDeAsientos->RenderWithName(); ?>

		<?php $_CONTROL->txtInfoEjes->RenderWithName(); ?>

		<?php $_CONTROL->txtPeso->RenderWithName(); ?>

		<?php $_CONTROL->txtCapacidadBaul->RenderWithName(); ?>

		<?php $_CONTROL->txtCapacidadTanque->RenderWithName(); ?>

		<?php $_CONTROL->txtCapacidadCarga->RenderWithName(); ?>

		<?php $_CONTROL->txtFrenosDelanteros->RenderWithName(); ?>

		<?php $_CONTROL->txtFrenosTraseros->RenderWithName(); ?>

		<?php $_CONTROL->txtNeumaticos->RenderWithName(); ?>

		<?php $_CONTROL->txtSuspensionDelantera->RenderWithName(); ?>

		<?php $_CONTROL->txtSuspensionTrasera->RenderWithName(); ?>

		<?php $_CONTROL->lstIdEstadoObject->RenderWithName(); ?>

		<?php $_CONTROL->chkProcesada->RenderWithName(); ?>

	</div>

	<div id="formActions">
		<div id="save"><?php $_CONTROL->btnSave->Render(); ?></div>
		<div id="cancel"><?php $_CONTROL->btnCancel->Render(); ?></div>
		<div id="delete"><?php $_CONTROL->btnDelete->Render(); ?></div>
	</div>
