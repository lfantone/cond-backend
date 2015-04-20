<?php
	// This is the HTML template include file (.tpl.php) for the fichas_backup_edit.php
	// form DRAFT page.  Remember that this is a DRAFT.  It is MEANT to be altered/modified.

	// Be sure to move this out of the generated/ subdirectory before modifying to ensure that subsequent 
	// code re-generations do not overwrite your changes.

	$strPageTitle = QApplication::Translate('FichasBackup') . ' - ' . $this->mctFichasBackup->TitleVerb;
	require(__INCLUDES__ . '/header.inc.php');
?>

	<?php $this->RenderBegin() ?>

	<div id="titleBar">
		<h2><?php _p($this->mctFichasBackup->TitleVerb); ?></h2>
		<h1><?php _t('FichasBackup')?></h1>
	</div>

	<div id="formControls">
		<?php $this->lblId->RenderWithName(); ?>

		<?php $this->txtIdMarca->RenderWithName(); ?>

		<?php $this->txtIdTipos->RenderWithName(); ?>

		<?php $this->txtModelo->RenderWithName(); ?>

		<?php $this->txtDescripcion->RenderWithName(); ?>

		<?php $this->txtPrecio->RenderWithName(); ?>

		<?php $this->txtCombustible->RenderWithName(); ?>

		<?php $this->txtCilindrada->RenderWithName(); ?>

		<?php $this->txtCilindros->RenderWithName(); ?>

		<?php $this->txtPotenciaMaxima->RenderWithName(); ?>

		<?php $this->txtParMotorTorque->RenderWithName(); ?>

		<?php $this->txtPosicion->RenderWithName(); ?>

		<?php $this->txtAlimentacion->RenderWithName(); ?>

		<?php $this->txtRelacionDeCompresion->RenderWithName(); ?>

		<?php $this->txtValvulas->RenderWithName(); ?>

		<?php $this->txtTipo->RenderWithName(); ?>

		<?php $this->txtMarchas->RenderWithName(); ?>

		<?php $this->txtTraccion->RenderWithName(); ?>

		<?php $this->txtVelocidadMaxima->RenderWithName(); ?>

		<?php $this->txtAceleracion0100->RenderWithName(); ?>

		<?php $this->txtConsumoUrbano->RenderWithName(); ?>

		<?php $this->txtConsumoInterurbano->RenderWithName(); ?>

		<?php $this->txtConsumoMixto->RenderWithName(); ?>

		<?php $this->txtEmisionesCo2->RenderWithName(); ?>

		<?php $this->txtTipoCarroceria->RenderWithName(); ?>

		<?php $this->txtPuertas->RenderWithName(); ?>

		<?php $this->txtPlazas->RenderWithName(); ?>

		<?php $this->txtFilasDeAsientos->RenderWithName(); ?>

		<?php $this->txtInfoEjes->RenderWithName(); ?>

		<?php $this->txtPeso->RenderWithName(); ?>

		<?php $this->txtCapacidadBaul->RenderWithName(); ?>

		<?php $this->txtCapacidadTanque->RenderWithName(); ?>

		<?php $this->txtInfoCajaCarga->RenderWithName(); ?>

		<?php $this->txtVolumenCajaCarga->RenderWithName(); ?>

		<?php $this->txtCapacidadCarga->RenderWithName(); ?>

		<?php $this->txtFrenosDelanteros->RenderWithName(); ?>

		<?php $this->txtFrenosTraseros->RenderWithName(); ?>

		<?php $this->txtLlantas->RenderWithName(); ?>

		<?php $this->txtNeumaticos->RenderWithName(); ?>

		<?php $this->txtSuspensionDelantera->RenderWithName(); ?>

		<?php $this->txtSuspensionTrasera->RenderWithName(); ?>

		<?php $this->txtLucesAutomatico->RenderWithName(); ?>

		<?php $this->txtClimatizacion->RenderWithName(); ?>

		<?php $this->txtAlarmaLucesEncendidas->RenderWithName(); ?>

		<?php $this->txtCritalesElectricos->RenderWithName(); ?>

		<?php $this->txtAperturaBaul->RenderWithName(); ?>

		<?php $this->txtAperturaTanque->RenderWithName(); ?>

		<?php $this->txtAsientosRegulablesAltura->RenderWithName(); ?>

		<?php $this->txtAsientoTraseroRebatible->RenderWithName(); ?>

		<?php $this->txtAsientosCalefaccionado->RenderWithName(); ?>

		<?php $this->txtAsientosAjustesElectronicos->RenderWithName(); ?>

		<?php $this->txtAsientosDelButacaDeportiva->RenderWithName(); ?>

		<?php $this->txtAsientoDelBipartido->RenderWithName(); ?>

		<?php $this->txtBotonStartStop->RenderWithName(); ?>

		<?php $this->txtCambioSecuencialVolante->RenderWithName(); ?>

		<?php $this->txtCierreCentralizado->RenderWithName(); ?>

		<?php $this->txtComputadoraABordo->RenderWithName(); ?>

		<?php $this->txtDireccionAsistida->RenderWithName(); ?>

		<?php $this->txtMandosAudioVolante->RenderWithName(); ?>

		<?php $this->txtReposabrazos->RenderWithName(); ?>

		<?php $this->txtControlCrucero->RenderWithName(); ?>

		<?php $this->txtSensorLluvia->RenderWithName(); ?>

		<?php $this->txtTapizado->RenderWithName(); ?>

		<?php $this->txtSalidasAire->RenderWithName(); ?>

		<?php $this->txtTechoCorredizo->RenderWithName(); ?>

		<?php $this->txtComandoDistancia->RenderWithName(); ?>

		<?php $this->txtVolanteAjusteVertical->RenderWithName(); ?>

		<?php $this->txtVolanteCuero->RenderWithName(); ?>

		<?php $this->txtMoldurasColorCarroceria->RenderWithName(); ?>

		<?php $this->txtEspejosElectricos->RenderWithName(); ?>

		<?php $this->txtEspejosRebatiblesElectricamente->RenderWithName(); ?>

		<?php $this->txtEspejosMemorias->RenderWithName(); ?>

		<?php $this->txtLavaFaros->RenderWithName(); ?>

		<?php $this->txtLavaLuneta->RenderWithName(); ?>

		<?php $this->txtCobertorCajaCarga->RenderWithName(); ?>

		<?php $this->txtBarrasPortaequipajeTecho->RenderWithName(); ?>

		<?php $this->txtBarraAntivuelco->RenderWithName(); ?>

		<?php $this->txtEstribos->RenderWithName(); ?>

		<?php $this->txtConexionAuxiliar->RenderWithName(); ?>

		<?php $this->txtConexionBluetooth->RenderWithName(); ?>

		<?php $this->txtControlPorVoz->RenderWithName(); ?>

		<?php $this->txtEntradaUsb->RenderWithName(); ?>

		<?php $this->txtLectorTarjetasSd->RenderWithName(); ?>

		<?php $this->txtNavegadorGps->RenderWithName(); ?>

		<?php $this->txtParlantes->RenderWithName(); ?>

		<?php $this->txtRadioAmfm->RenderWithName(); ?>

		<?php $this->txtRadioSatelitalXm->RenderWithName(); ?>

		<?php $this->txtReproductorCd->RenderWithName(); ?>

		<?php $this->txtReproductorDvd->RenderWithName(); ?>

		<?php $this->txtReproductorMp3->RenderWithName(); ?>

		<?php $this->txtTomaCorriente12v->RenderWithName(); ?>

		<?php $this->txtAirbags->RenderWithName(); ?>

		<?php $this->txtAlarma->RenderWithName(); ?>

		<?php $this->txtAsientoParaNinos->RenderWithName(); ?>

		<?php $this->txtAsistenciasElectronicas->RenderWithName(); ?>

		<?php $this->txtCamaraRetroceso->RenderWithName(); ?>

		<?php $this->txtCinturonesInerciales->RenderWithName(); ?>

		<?php $this->txtSensorDistanciaEstacionamiento->RenderWithName(); ?>

		<?php $this->txtDesempaniadorEspejosExteriores->RenderWithName(); ?>

		<?php $this->txtEncendidoAutoBalizasUrgencia->RenderWithName(); ?>

		<?php $this->txtFarosAntiniebla->RenderWithName(); ?>

		<?php $this->txtFarosXenon->RenderWithName(); ?>

		<?php $this->txtGanchosIsofixLatch->RenderWithName(); ?>

		<?php $this->txtGarantia->RenderWithName(); ?>

		<?php $this->txtIndicadorPresionNeumaticos->RenderWithName(); ?>

		<?php $this->txtLavafaros->RenderWithName(); ?>

		<?php $this->txtLucesAdaptativasCurvas->RenderWithName(); ?>

		<?php $this->txtTercerApoyaCabezaTrasero->RenderWithName(); ?>

		<?php $this->txtIdEstado->RenderWithName(); ?>

	</div>

	<div id="formActions">
		<div id="save"><?php $this->btnSave->Render(); ?></div>
		<div id="cancel"><?php $this->btnCancel->Render(); ?></div>
		<div id="delete"><?php $this->btnDelete->Render(); ?></div>
	</div>

	<?php $this->RenderEnd() ?>	

<?php require(__INCLUDES__ .'/footer.inc.php'); ?>